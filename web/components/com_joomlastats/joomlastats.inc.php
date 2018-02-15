<?PHP
	/**
	* @version $Id: joomlastats.inc.php 155 2006-11-23 19:14:12Z enzo1982 $
	* @package JoomlaStats
	* @copyright Copyright (C) 2004-2006 PJH Diender. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/

	// no direct access
	defined('_VALID_MOS') or die('Restricted access');

	// create JoomlaStatsBot class to register visitors
	$JS = new JoomlaStatsBot();

	class JoomlaStatsBot
	{
		// useragent
		var $UserAgent		= null;	// User agent (i.e. browser)
		var $UserId		= null;	// User ID if user is logged in
		var $IpAddress		= null;	// IP address
		var $RequestedPage	= null; // Requested page URL
		var $vType		= null; // Visitor type (0 = unknown, 1 = user, 2 = robot)
		var $vExclude		= null; // Set if user is excluded from statistics
		var $hourdiff		= null; // Offset to GMT
		var $enable_whois	= null; // Enable Whois lookup
		var $enable_i18n	= null; // Treat different translations as the same page

		function JoomlaStatsBot()
		{
			// read configuration
			$this->GetConfiguration();

			// get user agent of visitor
			$this->GetUserAgent();

			// get user ID
			$this->GetUserId();

			// get IP adress of visitor
			$this->GetIpAddress();

			// get requested page
			$this->GetRequestedPage();

			// check IP address; if not excluded, go on with registration

			if ($this->RequestedPage != '')
			{
				if ($this->CheckIpAddress() != 1)
				{
					// visitor/bot is not excluded
					
					// get a visit id so we can link the requested pages
					// and then register the pages requested by the visitor

					$this->PageRequest($this->visits());
				}
			}
		}

		function GetUserAgent()
		{
			if (isset($_SERVER['HTTP_USER_AGENT']))
			{
				if ($_SERVER['HTTP_USER_AGENT'] != NULL) $this->UserAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
				else					 $this->UserAgent = '';
			}
			else
			{
				$this->UserAgent = '';
			}
		}

		function GetUserId()
		{
			global $mainframe;

			if ($mainframe->_session->userid) $this->UserId = $mainframe->_session->userid;
			else				  $this->UserId = 0;
		}

		function GetRequestedPage()
		{
			global $mosConfig_sef;

			if ((isset($_SERVER['REQUEST_URI'])) && ($_SERVER['REQUEST_URI'] != NULL))
			{
				$this->RequestedPage = $_SERVER['REQUEST_URI'];
			}
			else if ((isset($_SERVER['PHP_SELF'])) && ($_SERVER['PHP_SELF'] != NULL))
			{
				$this->RequestedPage = $_SERVER['PHP_SELF'];

				if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != NULL))
				{
					$this->RequestedPage .= '?'.$_SERVER['QUERY_STRING'];
				}
			}
			else if ((isset($_SERVER['SCRIPT_NAME'])) && ($_SERVER['SCRIPT_NAME'] != NULL))
			{
				$this->RequestedPage = $_SERVER['SCRIPT_NAME'];

				if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != NULL))
				{
					$this->RequestedPage .= '?'.$_SERVER['QUERY_STRING'];
				}
			}

			if (($this->RequestedPage == "/") || ($this->RequestedPage == "\\"))
			{
				$this->RequestedPage .= "index.php";
			}

			if ((strtolower(substr($this->RequestedPage, -3)) == 'ico') || (strtolower(substr($this->RequestedPage, -3)) == 'png') || (strtolower(substr($this->RequestedPage, -3)) == 'gif') || (strtolower(substr($this->RequestedPage, -3)) == 'jpg'))
			{
				$this->RequestedPage = '';
			}

			if ($this->RequestedPage != '')
			{
				// Search Engine Friendly url

				if (intval($mosConfig_sef) == 1)
				{
					if (substr($this->RequestedPage, 0, 1) == '/') $this->RequestedPage = sefRelToAbs(substr($this->RequestedPage, 1));
					else					       $this->RequestedPage = sefRelToAbs($this->RequestedPage);
				}

				$this->RequestedPage = str_replace('http://', ':#:', $this->RequestedPage);
				$this->RequestedPage = str_replace('//', '/', $this->RequestedPage);
				$this->RequestedPage = str_replace(':#:', 'http://', $this->RequestedPage);
			}
		}

		function GetConfiguration()
		{
			global $mosConfig_offset, $database;

			$sql = "SELECT * FROM #__jstats_configuration";	
	
			$database->setQuery($sql);
			$rs = $database->query();

			$this->hourdiff = $mosConfig_offset;

			while ($row = mysql_fetch_array($rs))
			{	
				if	($row['description'] == 'onlinetime')	$this->onlinetime   = $row['value'];
				else if ($row['description'] == 'enable_whois') $this->enable_whois = ($row['value'] === 'true' ? true : false);
				else if ($row['description'] == 'enable_i18n')	$this->enable_i18n  = ($row['value'] === 'true' ? true : false);
			}

			mysql_free_result($rs);
		}

		function GetIpAddress() 
		{
			// get usefull vars:
			$client_ip	 = isset($_SERVER['HTTP_CLIENT_IP'])	   ? $_SERVER['HTTP_CLIENT_IP']	      : NULL;
			$x_forwarded_for = isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : NULL;
			$remote_addr	 = isset($_SERVER['REMOTE_ADDR'])	   ? $_SERVER['REMOTE_ADDR']	      : NULL;

			// then the script itself
			if (!empty($x_forwarded_for) && strrpos($x_forwarded_for, '.') > 0)
			{
				$arr = explode(',', $x_forwarded_for);
				$this->IpAddress = trim(end($arr));
			}

			if (!$this->isValidIPAddress($this->IpAddress) && !empty($client_ip))
			{
				$ip_expl = explode('.', $client_ip);
				$referer = explode('.', $remote_addr);

				if ($referer[0] != $ip_expl[0])
				{
					$this->IpAddress = trim(implode('.', array_reverse($ip_expl)));
				}
				else
				{
					$arr = explode(',', $client_ip);
					$this->IpAddress = trim(end($arr));
				}
			}

			if (!$this->isValidIPAddress($this->IpAddress) && !empty($remote_addr))
			{
				$arr = explode(',', $remote_addr);
				$this->IpAddress = trim(end($arr));
			}

			unset($client_ip, $x_forwarded_for, $remote_addr, $ip_expl, $referer);
		}

		function CheckIpAddress()
		/* 
		 * 	returns:
		 * 		1 if visitor/bot is excluded,
		 * 		0 otherwise 
		 */
		{
			global $database;

			$retval		  = 0;
			$visitor_tld	  = '';
			$visitor_nslookup = '';

			$visitor_unknown  = true;
			$ipentry_exists	  = false;

			// find IP address and UserAgent
			$sql = "SELECT exclude, type, tld, id FROM #__jstats_ipaddresses ".
				 "WHERE ip = '$this->IpAddress' AND useragent = '$this->UserAgent'";

			$database->setQuery($sql);
			$rs = $database->query();
			
			if ($row = mysql_fetch_array($rs))
			{
				// the user is already known 

				$visitor_unknown = false;
				$ipentry_exists = true;

				// check if the TLD could not be resolved previously and try again in that case
				if ($row['tld'] === '' || $row['tld'] === 'eu' || strlen($row['tld']) > 2)
				{
					// see if the user was active in the last few minutes

					$visitid = $row['id'];
					$sql = "SELECT id FROM #__jstats_visits ".
						 "WHERE month =  MONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)) ".
						   "AND year  =  YEAR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)) ".
						   "AND ip_id =  '$visitid' ".
						   "AND time  >= DATE_ADD(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR), INTERVAL -".$this->onlinetime." MINUTE)";

					$database->setQuery($sql);
					$rs = $database->query();

					if (!mysql_fetch_array($rs))
					{
						// no, he was not active, so do another whois query
						$visitor_unknown = true;
					}
				}
				
				if (!$visitor_unknown)
				{
					$retval = $row['exclude'];
					
/*					if ($retval == 2)
					{
						// Somewhere here we want to build a user exclusion later
					}
*/
					// global var for type of visit
					$type = $row['type'];
					$visitor_tld = $row['tld'];
				}
			}			

			if ($visitor_unknown)
			{
				// user is unknown or the tld was not resolved the last time

				// get fullname nslookup
				if ($this->isValidIPAddress($this->IpAddress))
				{
					$visitor_nslookup = gethostbyaddr($this->IpAddress);
				}

				// get country from visitor
				$pos = strrpos($visitor_nslookup, '.') + 1;

				if ($pos > 1)
				{
					$xt = trim(substr($visitor_nslookup, $pos));

					if (ereg('([a-zA-Z])', $xt))
					{
						$visitor_tld = strtolower($xt);
					}
					else
					{
						$visitor_tld = '';
						$visitor_nslookup = $this->IpAddress;
					}
				}
				else
				{
					$visitor_tld = '';
					$visitor_nslookup = $this->IpAddress;
				}

				if ($visitor_tld === '' || $visitor_tld === 'eu' || strlen($visitor_tld) > 2)
				{
					$sql = "SELECT country_code2 FROM #__jstats_iptocountry ".
						 "WHERE inet_aton('$this->IpAddress') >= ip_from AND inet_aton('$this->IpAddress') <= ip_to";

					$database->setQuery($sql);					
					$rs = $database->query();
		
					if ($row = mysql_fetch_array($rs))
					{
						$visitor_tld = strtolower($row['country_code2']);
					}
					else if ($this->enable_whois)
					{
						$visitor_tld = '';
						$countryCode = "";
						$ipFrom	     = "0.0.0.0";
						$ipTo	     = "255.255.255.255";

						// do RIPE Whois lookup for the IP address

						$query = "-s RIPE,ARIN,APNIC,RADB,VERIO,JPIRR -T inetnum -G -r $this->IpAddress\n";
						$countryCode = $this->queryWhois("whois.ripe.net", $query, $ipFrom, $ipTo);

						if ($countryCode === "LACNIC" || $countryCode === "EU" || $countryCode === "AP" || $countryCode === "")
						{
							$query = "$this->IpAddress\n";

							$countryCode = $this->queryWhois("whois.lacnic.net", $query, $ipFrom, $ipTo);
						}

						if ($countryCode === "AfriNIC" || $countryCode === "EU" || $countryCode === "AP" || $countryCode === "")
						{
							$query = "-T inetnum -r $this->IpAddress\n";

							$countryCode = $this->queryWhois("whois.afrinic.net", $query, $ipFrom, $ipTo);
						}

						// EU is used as the IANA generic country code; it is always returned
						// for 0.0.0.0 to 255.255.255.255 and some other generic IANA networks

						// AP is used as the APNIC generic country code; the real
						// country code can be obtained from the 'route' entry

						if ($countryCode !== "" && $countryCode !== "EU" && $countryCode !== "AP")
						{
							// found country code, enter it into iptocountry

							$sql = "INSERT INTO #__jstats_iptocountry (ip_from, ip_to, country_code2) ".
								 "VALUES (".sprintf("%u", ip2long($ipFrom)).", ".sprintf("%u", ip2long($ipTo)).", '$countryCode')";

							$database->setQuery($sql);
							$database->query();

							$visitor_tld = strtolower($countryCode);
						}
					}

					// GB is the only country code not matching the country TLD
					if ($visitor_tld === 'gb') $visitor_tld = 'uk';
				}

				// determine if bot or browser
				$type = 0;

			// get browser --------------------------------------------------------------------------

				$browser = '';
				
				$sql = 'SELECT LENGTH(browser_string) AS strlen, browser_string, browser_fullname FROM #__jstats_browsers ORDER BY strlen DESC';

				$database->setQuery($sql);
				$rs = $database->query();

				while ($row = mysql_fetch_array($rs))
				{
					if (strpos($this->UserAgent, $row['browser_string'], 0) !== false)
					{
						$browser = mysql_escape_string($row['browser_fullname']);
						$version = array();

						if (preg_match( "/".$row['browser_string']."[\/\sa-z]*([\d\.]*)/i", $this->UserAgent, $version))
						{
							$browser .= ' '.$version[1];
						}

						$type = 1;

						break;
					}
				}

				mysql_free_result($rs);

			// get browser -----------------------------------------------------------------------END

			// look for bot if browser unknown ------------------------------------------------------

				if ($browser == '')
				{
					// get bot
					$sql = 'SELECT LENGTH(bot_string) AS strlen, bot_string,bot_fullname FROM #__jstats_bots ORDER BY strlen DESC';

					$database->setQuery($sql);
					$rs = $database->query();

					while ($row = mysql_fetch_array($rs))
					{
						if (strpos($this->UserAgent, $row['bot_string'], 0) !== false)
						{
							$browser = mysql_escape_string($row['bot_fullname']);
							$type = 2;

							break;
						}
					}

					mysql_free_result($rs);
				}

				if ($browser == '')
				{
					if	(strpos($this->UserAgent, 'robot',  0) !== false) $browser = 'Unknown robot (identified by robot)';
					else if (strpos($this->UserAgent, 'crawl',  0) !== false) $browser = 'Unknown robot (identified by crawl)';
					else if (strpos($this->UserAgent, 'spider', 0) !== false) $browser = 'Unknown robot (identified by spider)';
					else if (strpos($this->UserAgent, 'bot',    0) !== false) $browser = 'Unknown robot (identified by bot)';

					if ($browser != '') $type = 2;
				}

			// look for bot if browser unknown ---------------------------------------------------END

			// get OS version -----------------------------------------------------------------------

				$OS = '';

				$sql = 'SELECT LENGTH(sys_string) AS strlen, sys_string, sys_fullname FROM #__jstats_systems ORDER BY strlen DESC';

				$database->setQuery($sql);
				$rs = $database->query();

				while ($row = mysql_fetch_array($rs))
				{
					if (strpos($this->UserAgent, $row['sys_string'], 0) !== false)
					{
						$OS = mysql_escape_string($row['sys_fullname']);

						break;
					}
				}

				mysql_free_result($rs);

			// get OS version --------------------------------------------------------------------END

			// do insert or update of unique visitor ------------------------------------------------

				if ($ipentry_exists) $sql = "UPDATE #__jstats_ipaddresses SET nslookup = '$visitor_nslookup', tld = '$visitor_tld', system = '$OS', browser = '$browser', type = $type WHERE ip = '$this->IpAddress' AND useragent = '$this->UserAgent'";
				else		     $sql = "INSERT INTO #__jstats_ipaddresses (ip, nslookup, useragent, tld, system, browser, type) VALUES ('$this->IpAddress', '$visitor_nslookup', '$this->UserAgent', '$visitor_tld', '$OS', '$browser', $type)";

				$database->setQuery($sql);
				$database->query();

			// do insert or update of unique visitor ---------------------------------------------END
			}

			// set value for vistor to type bot/browser
			$this->vType = $type;

			// set value for exclude
			$this->vExclude = $retval;

			return $retval;
		}

		function isValidIPAddress($ipAddress)
		{
			return (($ipAddress != NULL) &&
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('0.0.0.0'))) ||	// Reserved IP blocks
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('2.255.255.255')))
				) &&
				(substr($ipAddress, 0, 2) !== '5.') &&						// Reserved IP block
				(substr($ipAddress, 0, 2) !== '7.') &&						// Reserved IP block
				(substr($ipAddress, 0, 3) !== '10.') &&						// Reserved for private networks
				(substr($ipAddress, 0, 3) !== '14.') &&						// IANA Public Data Network
				(substr($ipAddress, 0, 3) !== '23.') &&						// Reserved IP block
				(substr($ipAddress, 0, 3) !== '27.') &&						// Reserved IP block
				(substr($ipAddress, 0, 3) !== '31.') &&						// Reserved IP block
				(substr($ipAddress, 0, 3) !== '36.') &&						// Reserved IP block
				(substr($ipAddress, 0, 3) !== '37.') &&						// Reserved IP block
				(substr($ipAddress, 0, 3) !== '42.') &&						// Reserved IP block
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('92.0.0.0'))) ||	// Reserved IP blocks
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('95.255.255.255')))
				) &&
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('100.0.0.0'))) ||	// Reserved IP blocks
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('120.255.255.255')))
				) &&
				(substr($ipAddress, 0, 4) !== '127.') &&					// Loop-back interfaces
				(substr($ipAddress, 0, 8) !== '169.254.') &&					// Link-local addresses
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('172.16.0.0'))) ||	// Reserved for private networks
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('172.31.255.255')))
				) &&
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('173.0.0.0'))) ||	// Reserved IP blocks
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('187.255.255.255')))
				) &&
				(substr($ipAddress, 0, 8) !== '192.168.') &&					// Reserved for private networks
				(substr($ipAddress, 0, 4) !== '197.') &&					// Reserved IP block
				(substr($ipAddress, 0, 4) !== '223.') &&					// Reserved IP block
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('224.0.0.0'))) ||	// Multicast addresses
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('239.255.255.255')))
				) &&
				((sprintf("%u", ip2long($ipAddress)) < sprintf("%u", ip2long('240.0.0.0'))) ||	// Reserved IP blocks
				 (sprintf("%u", ip2long($ipAddress)) > sprintf("%u", ip2long('255.255.255.255')))
				)
			       );
		}

		function queryWhois($server, $query, &$ipFrom, &$ipTo)
		{
			$countryCode = "";

			if (($socket = fsockopen(gethostbyname($server), 43)) != false)
			{
				// send the query string to the socket

				fputs($socket, $query, strlen($query));

				// get the result of the Whois lookup

				$line	    = "";
				$prevline   = "";
				$getCountry = false;
				$getRange   = false;

				while (!(($line = ereg_replace("[ ]+", " ", fgets($socket, 256))) === "\n" && $prevline === "\n"))
				{
					if ($line === "") break;

					// Make sure we just have single spaces
					$line = preg_replace('/\s+/', ' ', $line);

					if (substr($line, 0, 8) === "inetnum:")
					{
						// get IP range and see if it's narrower than the current range
						// note: ip2long gives signed results, so we convert to unsigned using sprintf

						if (substr_count($line, " - ") > 0)	// Netblock notation
						{
							$values = explode(" - ", substr($line, 9));
						}
						else if (substr_count($line, "/") > 0)	// CIDR block notation
						{
							/* - Begin CIDR notation parser, heavily based on code from Leo Jokinen <legetz81@yahoo.com> - */

							$values = explode("/", substr($line, 9));

							$bin = '';

							for ($i = 1; $i <= 32; $i++)				$bin .= $values[1] >= $i ? '1' : '0';
							for ($i = substr_count($values[0], "."); $i < 3; $i++)	$values[0] .= ".0";

							$nm = ip2long(bindec($bin));
							$nw = (ip2long($values[0]) & $nm);
							$bc = $nw | (~$nm);

							$values[0] = long2ip($nw);
							$values[1] = long2ip($bc);

							/* - End CIDR notation parser ---------------------------------------------------------------- */
						}

						if (sprintf("%u", ip2long($values[0])) >= sprintf("%u", ip2long($ipFrom)) &&
						    sprintf("%u", ip2long($values[1])) <= sprintf("%u", ip2long($ipTo)))
						{
							$ipFrom = $values[0];
							$ipTo = $values[1];

							$getCountry = true;
						}
						else
						{
							$getCountry = false;
						}
					}

					if (substr($line, 0, 8) === "netname:" && $getCountry)
					{
						// filter some of the generic networks

						$ipA = explode(".", $this->IpAddress);
						$ipNet = "NET".$ipA[0];

						if (substr($line, 9, 6)		     === "LACNIC"	 ||
						    substr($line, 9, 7)		     === "AFRINIC"	 ||
						    substr($line, 9, 9)		     === "RIPE-CIDR"	 ||
						    substr($line, 9, 9)		     === "ARIN-CIDR"	 ||
						    substr($line, 9, 10)	     === "IANA-BLOCK"	 ||
						    substr($line, 9, 13)	     === "IANA-NETBLOCK" ||
						    substr($line, 9, 12)	     === "ERX-NETBLOCK"	 ||
						    substr($line, 9, strlen($ipNet)) === $ipNet)	 $getCountry = false;

						if ($server === "whois.ripe.net")
						{
							if (substr($line, 9, 6) === "LACNIC")	$countryCode = "LACNIC";
							if (substr($line, 9, 7) === "AFRINIC")	$countryCode = "AfriNIC";
							if ($ipA[0] === "41")			$countryCode = "AfriNIC";
						}
					}

					if (substr($line, 0, 8) === "OrgName:")
					{
						// LACNIC Joint Whois entry, get country and IP range now

						$getCountry = true;
						$getRange = true;
					}

					if (substr($line, 0, 9) === "NetRange:" && $getRange)
					{
						// get IP range from LACNIC Joint Whois entry

						$values = explode(" - ", substr($line, 10));

						if (sprintf("%u", ip2long($values[0])) >= sprintf("%u", ip2long($ipFrom)) &&
						    sprintf("%u", ip2long($values[1])) <= sprintf("%u", ip2long($ipTo)))
						{
							$ipFrom = $values[0];
							$ipTo = $values[1];
						}

						$getRange = false;
					}

					if (strtolower(substr($line, 0, 8)) === "country:" && $getCountry)
					{
						// the last ip range was narrower than the ones before and we found
						// a country entry; now extract the country entry

						$countryCode = substr($line, 9, 2);

						if ($countryCode !== "AP") $getCountry = false;
					}

					if (substr($line, 0, 8) === "nserver:" && $getCountry)
					{
						// if there is no country entry, try to get the TLD from the name
						// server entry (e.g. registro.br does not include a country code)

						$pos = strrpos(substr($line, 9), '.') + 1;

						if ($pos > 1)
						{
							$xt = trim(substr(substr($line, 9), $pos));

							if (ereg('([a-zA-Z])', $xt))
							{
								$countryCode = $xt;
							}
						}
					}

					$prevline = $line;
				}

				fclose($socket);
			}

			return $countryCode;
		}

		function visits()
		{
			global $database;

			$sql = "SELECT id FROM #__jstats_ipaddresses WHERE ip = '$this->IpAddress' AND useragent = '$this->UserAgent'";

			$database->setQuery($sql);
			$rs = $database->query();

			if ($row = mysql_fetch_array($rs)) $visitid = $row['id'];

			$sql = "SELECT id FROM #__jstats_visits ".
				 "WHERE month =  MONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)) ".
				   "AND year  =  YEAR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)) ".
				   "AND ip_id =  '$visitid' ".
				   "AND time  >= DATE_ADD(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR), INTERVAL -".$this->onlinetime." MINUTE)";

			$database->setQuery($sql);
			$rs = $database->query();

			if ($row = mysql_fetch_array($rs))
			{
				$visitnumber = $row['id'];

				$sql = "UPDATE #__jstats_visits SET time = DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR), userid = '".$this->UserId."' WHERE id = '$visitnumber'";

				$database->setQuery($sql);
				$database->query();
			}
			else
			{
				$sql = "INSERT INTO #__jstats_visits (ip_id, hour, day, month, year, time, userid) ".
					 "VALUES ($visitid, HOUR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), DAYOFMONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), MONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), YEAR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR), '".$this->UserId."')";

				$database->setQuery($sql);
				$database->query();

				$visitnumber = mysql_insert_id();
			}

			return $visitnumber;
		}

		function PageRequest($visitid)
		{
			global $mainframe, $database;

			// get page title
			$pagetitle = mysql_escape_string($mainframe->getPageTitle());

			// trim page title if longer than 255 characters
			if (strlen($pagetitle) > 255) $pagetitle = substr($pagetitle, 0, 254);

			// if requested page is not empty
			if ($this->RequestedPage != '')
			{
				$page = mysql_escape_string($this->RequestedPage);

				if ($this->enable_i18n)
				{
					// remove lang setting from page URL to treat multi language versions of one page as the same
					if (strpos($page, "?lang=") !== false) $page = str_replace(substr($page, strpos($page, "?lang="), 8), "", $page);
					if (strpos($page, "&lang=") !== false) $page = str_replace(substr($page, strpos($page, "&lang="), 8), "", $page);
				}

				$sql = "SELECT page_id, page_title FROM #__jstats_pages WHERE page = '$page'";

				$database->setQuery($sql);
				$rs = $database->query();

				if (!$row = mysql_fetch_array($rs))
				{
					$sql = "INSERT INTO #__jstats_pages (page, page_title) VALUES ('$page', '$pagetitle')";

					$database->setQuery($sql);
					$database->query();

					$pageid = mysql_insert_id();
				}
				else
				{
					$pageid = $row['page_id'];

					if ($row['page_title'] == '')
					{
						$sql = "UPDATE #__jstats_pages SET page_title ='$pagetitle' WHERE page_id = '$pageid'";

						$database->setQuery($sql);
						$database->query();
					}
				}

				$sql = "INSERT INTO #__jstats_page_request (page_id, hour, day, month, year, ip_id) values ($pageid, HOUR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), DAYOFMONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), MONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), YEAR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), $visitid)";

				$database->setQuery($sql);
				$database->query();
			}

			$this->Regreferrer();
		}

		function Regreferrer()
		{
			global $database;

			// if referer is nothing then return
			if (!isset($_SERVER['HTTP_REFERER'])) return;

			$ref = $_SERVER['HTTP_REFERER'];

			if (trim($ref) != '')
			{
				if (isset($_SERVER['HTTP_HOST'])) $hst = $_SERVER['HTTP_HOST'];

				$ref = mysql_escape_string(trim($ref));
				$hst = mysql_escape_string(trim($hst));

				if (strpos($ref, $hst, 0) === false && substr($ref, 0, 7) == 'http://')
				{
					if (strpos($ref, '/', 7) !== false)
					{
						$pos = strpos($ref, '/', 7) - 7;
						$dom = substr($ref, 7, $pos);
					}
					else
					{
						$dom = substr($ref, 7);
					}

					if ((substr($dom, 0, 3) == "www") || (substr($dom, 0, 3) == "WWW"))
					{
						$dom = substr($dom, 4);
					}

					if ($this->regKeyWords($ref) === false)
					{
						$sql = "INSERT INTO #__jstats_referrer (referrer, domain, day, month, year) VALUES ('$ref', '$dom', DAYOFMONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), MONTH(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)), YEAR(DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR)))";

						$database->setQuery($sql);
						$database->query();
					}
				}
			}
		}

		function regKeyWords($url)
		{
			global $database;

			$sql = "SELECT * FROM #__jstats_search_engines";

			$database->setQuery($sql);
			$rs = $database->query();

			$kwrds = '';

			while ($row = mysql_fetch_array($rs))
			{
				if (strpos($url, addslashes($row['search']), 0) !== false)
				{
/*
					$ar = explode(",", $row['searchvar']);

					for ($i = 0; $i <= count($ar); $i++)
					{
						$qsp1 = strpos($url, $ar[$i], 0);

						if ($qsp1 !== false)
						{
							$qsp1 = ($qsp1 + strlen($ar[$i]));

							$qsp2 = strpos($url,'&',$qsp1);

							if ($qsp2 !== false) $kwrds = urldecode(substr($url, $qsp1, ($qsp2 - $qsp1)));
							else		     $kwrds = urldecode(substr($url, $qsp1));
						}
					}
*/

					$spattern = str_replace(",", "|", $row['searchvar']);
					$matches = null;

					if (preg_match("/\s*$spattern(.+?)(&|$)/i", $url, $matches))
					{
						if (array($matches))
						{
							if ($matches[1] != null) $kwrds = $database->Quote($matches[1]);
							else			 $kwrds = $database->Quote($matches[2]);
						}
					}

					$kwrds = urldecode($kwrds);

					break;
				}
			}

			if (trim($kwrds) != '')
			{
				$sql = "INSERT INTO #__jstats_keywords (kwdate, searchid, keywords) VALUES (DATE_ADD(NOW(), INTERVAL ".$this->hourdiff." HOUR), ".$row['searchid'].", '".mysql_escape_string($kwrds)."')";

				$database->setQuery($sql);
				$database->query();

				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>
