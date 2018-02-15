<?php
	/**
	* @version $Id: admin.joomlastats.html.php 156 2006-11-25 11:46:42Z RoBo $
	* @package com_joomlastats
	* @copyright Copyright (C) 2004-2006 JoomlaStats Team. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/
	
	// ensure this file is being included by a parent file
	defined('_VALID_MOS') or die ('Direct Access to this location is not allowed.');
	
	define('_JoomlaStats_V','2.1.5');
	
	class JoomlaStats_Engine
	{		
		var $d = null; 			// day
		var $m = null; 			// month
		var $y = null; 			// year
		var $dom = null; 		// domain
		var $vid = null; 		// visitors id
		var $updatemsg= null; 		// update message used for purge
		var $language = null;		// language setting
		var $langini = null;		// language setting ini file
		var $hourdiff = null;		// hourdiff local vs server
		var $onlinetime = null;		// time online in minutes before new visitor
		var $startoption = null;	// option for starting statistics
		var $purgetime = null;		// time for purge database
		var $enable_i18n = false;	// enable Joom!Fish i18n support
		var $enable_whois = false;	// enable Whois queries
		var $version = null;		// version of script
		var $MainFrame = null;		// mainframe object MOS
		var $task = null;		// task for JoomlaStats_Engine
		var $absolute_path = null;	// Joomla ajustment because the _config function is not
						// included in the mainframe class any more
		var $db = null;
		
		function JoomlaStats_Engine(&$mainframe, $task)
		{
			global $mosConfig_offset, $mosConfig_absolute_path, $mosConfig_db, $mosConfig_dbprefix, $database;

			$this->MainFrame = &$mainframe;
			
			$this->absolute_path = $mosConfig_absolute_path;
			$this->db = $mosConfig_db;
			
			$this->task = $task;

			$sql = "SELECT * FROM #__jstats_configuration";			
			$database->setQuery($sql);			
			$rs = mysql_query($database->_sql);
	
			$this->hourdiff = $mosConfig_offset;

			while($row = mysql_fetch_array($rs))
			{	
				if ($row['description'] == 'onlinetime')	{
					$this->onlinetime = $row['value'];
				}
				if ($row['description'] == 'startoption')	{
					$this->startoption = $row['value'];
				}
				if ($row['description'] == 'language')		{
					$this->langini = $row['value'];
				}
				if ($row['description'] == 'purgetime')		{
					$this->purgetime = $row['value'];
				}
				if ($row['description'] == 'enable_whois')	{
					$this->enable_whois = ($row['value'] === 'true') ? true : false;
				}
				if ($row['description'] == 'enable_i18n')	{
					$this->enable_i18n = ($row['value'] === 'true' ? true : false);
				}
				if ($row['description'] == 'version')		{
					$this->version = $row['value'];
				}
			}	
			mysql_free_result($rs);

			if (file_exists($this->absolute_path.'/administrator/components/com_joomlastats/language/'.$this->langini.'.ini.php'))
			{
				// include language support
				$this->language = parse_ini_file($this->absolute_path.'/administrator/components/com_joomlastats/language/'.$this->langini.'.ini.php',true);
			}
			else
			{
				// include default language en support
				$this->language = parse_ini_file($this->absolute_path.'/administrator/components/com_joomlastats/language/fr.ini.php',true);
			}	
			
			$this->SetDMY2Now();
					
			if (isset($_POST['dom']))	{
				$this->dom = $_POST['dom'];
			} else	{
				$this->dom = '%';
			}

			if (isset($_POST['vid']))	{
				$this->vid = $_POST['vid'];
			}	else	{
				$this->vid = '';
			}						
		}
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		
		function PercentBar($percent,$maxpercent)
		/*
		 *	Displays a percentage bar
 	 	 */	
		{	
			global $mosConfig_live_site, $option;
		
			$baron= "$mosConfig_live_site/administrator/components/$option/images/bar+.gif";
			$baroff="$mosConfig_live_site/administrator/components/$option/images/bar-.gif";
			$barmaxlength = 150;

			$barlength = (int) ($percent / $maxpercent * $barmaxlength);
			$barrest = ($barmaxlength-$barlength);

			$retval .= "<img border='0' src='$baron' width='$barlength' height='7'><img border='0' src='$baroff' width='$barrest' height='7'>";

			return $retval;
		} // PercentBar()

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		function SetDMY2Now()
		{	// Function to set $this->d; $this->m; $this->y values to now
			// calculate time diff from server time to local time
			$visittime = (time() + ($this->hourdiff * 3600));					
		
			if(!isset($_POST['d']))
			{
				$this->d = date('j',$visittime);
			}
			else
			{
				$this->d = $_POST['d'];
			}
		
			if(!isset($_POST['m']))
			{
				$this->m = date('n',$visittime);
			}
			else
			{
				$this->m = $_POST['m'];
			}
			
			if(!isset($_POST['y']))
			{
				$this->y = date('Y',$visittime);
			}
			else
			{
				$this->y = $_POST['y'];
			}			
		} // Set DMY2Now()
		
	
		
		function CreateDayCmb()
		/*
		 *  Create the Day Combo
		 */
		{
			for($i=1;$i <= 31;$i++)
			{
				if ($this->d != $i)
				{	
					echo "<option value=\"$i\">".$i."</option>\n";
				}
				else
				{
					echo "<option selected value=\"$i\">".$i."</option>\n";
				}
			}
			
			if ($this->d == 'total')
			{
				echo '<option selected value="total">-</option>';
			}
			// do not display '-' anymore. This is now done by checkbox.				
//			else
//			{	
//				echo '<option value="total">-</option>';
//			}
		}

		function CreateMonthCmb()
		{
			$a = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
			
			for($i=1;$i < 13;$i++)
			{
				if ($this->m != $i)
				{
					echo "<option value=\"$i\">".$a[$i]."</option>\n";
				}
				else
				{
					echo "<option selected value=\"$i\">".$a[$i]."</option>\n";
				}
			}
			
			if ($this->m == 'total')
			{
				echo '<option selected value="total">-</option>';
			}
			// do not display '-' anymore. This is now done by checkbox.				
//			else
//			{
//				echo '<option value="total">-</option>';
//			}

		}

		function CreateYearCmb()
		{
			for($i=2003;$i <= date('Y',time());$i++)
			{
				if ($this->y != $i)
				{
					echo "<option value=\"$i\">$i</option>\n";
				}
				else
				{
					echo "<option selected value=\"$i\">$i</option>\n";
				}
			}
			// have to create '-' option for year also...
		}

		function SetConfiguration()
		{
			global $database;
			
			$onlinetime = isset($_POST['onlinetime']) ? $_POST['onlinetime'] : '15';
			$startoption = isset($_POST['startoption']) ? $_POST['startoption'] : '002';
			$language = isset($_POST['language']) ? $_POST['language'] : 'fr';
			$timelimit = isset($_POST['timelimit']) ? $_POST['timelimit'] : '30';
			$enable_whois = isset($_POST['enable_whois']) ? $_POST['enable_whois'] : false;
			$enable_i18n = isset($_POST['enable_i18n']) ? $_POST['enable_i18n'] : false;
			
			$sql = "UPDATE #__jstats_configuration set value='$onlinetime' WHERE description='onlinetime'";
			$database->setQuery($sql);
			mysql_query($database->_sql);

			$sql = "UPDATE #__jstats_configuration set value='$startoption' WHERE description='startoption'";
			$database->setQuery($sql);
			mysql_query($database->_sql);

			$sql = "UPDATE #__jstats_configuration set value='$language' WHERE description='language'";
			$database->setQuery($sql);
			mysql_query($database->_sql);

			$sql = "UPDATE #__jstats_configuration set value='$timelimit' WHERE description='purgetime'";
			$database->setQuery($sql);
			mysql_query($database->_sql);

			$sql = "UPDATE #__jstats_configuration set value='".($enable_whois ? 'true' : 'false')."' WHERE description='enable_whois'";
			$database->setQuery($sql);
			mysql_query($database->_sql);

			$sql = "UPDATE #__jstats_configuration set value='".($enable_i18n ? 'true' : 'false')."' WHERE description='enable_i18n'";
			$database->setQuery($sql);
			mysql_query($database->_sql);

			//redirect to default stats		
			mosRedirect('index2.php?option=com_joomlastats&task=stats');
			
		}

		function getdbversion()
		{
			echo $this->version;
		}
		
		function getdbsize()
		{
			global $database;

			$sql = "SHOW TABLE STATUS FROM `".$this->db."` LIKE '".$this->MainFrame->getCfg('dbprefix')."jstats_%'";
			$database->setQuery($sql);
			$rs = $database->query();
			$total = 0;
					
			while ($row = @mysql_fetch_array($rs))
			{
				// echo $row['Data_length'] + $row['Index_length'] ."<br>";
				$total += $row['Data_length'] + $row['Index_length'];
			}
			@mysql_free_result($rs);
				
			echo round((($total/1024)/1024),1);			
		}
		
		function resetVar($opt)
		{	// $opt0: set dmy to 'total'; $opt1: set dmy to '%'
			if ($opt == 1)
			{
				if ($this->d == 'total'){$this->d = '%';}
				if ($this->m == 'total'){$this->m = '%';}
				if ($this->y == 'total'){$this->y = '%';}
			}
			else
			{
				if ($this->d == '%'){$this->d = 'total';}
				if ($this->m == '%'){$this->m = 'total';}
				if ($this->y == '%'){$this->y = 'total';}
			}			
		}
		
				
		function menu()
		{	// Display the menu lines
			$n = NULL;
			
			echo '<table width="100%" border="0" cellpadding="2" cellspacing="0">';
			echo '<tr>';
			echo '<td width="10">&nbsp;</td>';	// leave a little whitespace on the left
			while ( list( $id, $description ) = each( $this->language['menu'] ))
			{
				$n++;
				if (strlen($id) == 3)
				{ // we hit a menu item (not an empty line for example)
				  
				  if (($n!=1) && (($n-1) % 6 == 0))
				  {	// We just started a new line and we have some items left, so start a new line
				  	echo "<tr><td width='10'>&nbsp;</td>";	// start with same whitespace on the left
				  }				  
				  
				  echo '<td>';				  				  
					// echo "<a href=\"index2.php?option=com_joomlastats&task=$id&d=".$this->d."&m=".$this->m."&y=".$this->y."\">$description</a>";
					echo "<a href=\"javascript:submitbutton('".$id."')\">$description</a>";
					echo '</td>';

					if($n % 6 == 0)
					{	// CR
						echo "<td>&nbsp;</td>";									// leave a little whitespace on the right
						echo "</tr>";														// end the line						
					}
				}
			}		
			echo '</tr></table>';
		}
		
		function DisplayTitle()
		{	// display menu title (optional with $this->dom)
			if (strlen($this->task) == 3)
			{
				echo $this->language['menu'][$this->task];
//				if ($this->dom != '' && $this->dom != '%')
//				{
//					echo "&nbsp;&nbsp;&lt;&nbsp;$this->dom&nbsp;&gt;";
//				}
			}
			else
			{
				echo $this->language['extra'][$this->task];
				
//				if ($this->dom != '' && $this->dom != '%')
//				{
//					echo "&nbsp;&nbsp;&lt;&nbsp;$this->dom&nbsp;&gt;";
//				}
			}
			if ($this->dom != '' && $this->dom != '%')
			{
				echo "&nbsp;&nbsp;&lt;&nbsp;$this->dom&nbsp;&gt;";
			}
		} 

		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
				
		
		function ysummary()
		{
			global $database;
			
			$a = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
			
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t02'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t03'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t04'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t05'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t08'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t09'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t06'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t07'].'</th>';
			$retval .= '</tr>';				
		
			$tv = 0;	// total visitors
			$tub = 0;	// total unique bots
			$tb = 0;	// total bots
			$tp = 0;	// total pages
			$tr = 0;	// total referrers
							
			for ($i=1;$i<13;$i++)
			{
				// get visitors
				$this->resetVar(1);
				$sql  = "SELECT count(*) FROM `#__jstats_visits` LEFT JOIN `#__jstats_ipaddresses` ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
				$sql .= "WHERE #__jstats_ipaddresses.type=1 and #__jstats_visits.month=$i and #__jstats_visits.year=$this->y";
				$this->resetVar(0);
	
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);				
				$row = mysql_fetch_array($rs);
				$v = $row[0];
				
				if($v == null)
				{
					$v=0;
				}				
				
				$tv += $v;							
					
				mysql_free_result($rs);	// can this be moved up to free memory earlyer?
				

				// get Unique visitors
				$this->resetVar(1);
				$sql  = "SELECT count(*) FROM `#__jstats_visits` LEFT JOIN `#__jstats_ipaddresses` ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
				$sql .= "WHERE #__jstats_ipaddresses.type=1 and #__jstats_visits.month=$i and #__jstats_visits.year=$this->y ";
				$sql .= "group by #__jstats_visits.ip_id";
				$this->resetVar(0);

				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$uv = mysql_num_rows($rs);
								
				if($uv == null)
				{
					$uv = 0;
				}
								
				mysql_free_result($rs);	// can this be moved up to free memory earlyer?


				// get bots
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM `#__jstats_visits` LEFT JOIN `#__jstats_ipaddresses` ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) WHERE #__jstats_ipaddresses.type=2 and #__jstats_visits.month=$i and #__jstats_visits.year=$this->y";
				$this->resetVar(0);
	
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);				
				$row = mysql_fetch_array($rs);
				$b = $row[0];

				if($b == null)
				{
					$b=0;
				}

				$tb += $b;
								
				mysql_free_result($rs);
				

				// get Unique bots
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM `#__jstats_visits` LEFT JOIN `#__jstats_ipaddresses` ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) WHERE #__jstats_ipaddresses.type=2 and #__jstats_visits.month=$i and #__jstats_visits.year=$this->y group by #__jstats_ipaddresses.browser";
				$this->resetVar(0);
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);				
				$ub = mysql_num_rows($rs);
								
				if ($ub == null) { $ub=0; }
				$tub += $ub;
								
				mysql_free_result($rs);


				// get Pages
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM `#__jstats_page_request` WHERE month=$i and year=$this->y";
				$this->resetVar(0);

				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);				
				$p = $row[0];
								
				if ($p == null)	{ $p=0;	}
				//$tp += $p;
								
				mysql_free_result($rs);
				$row = NULL;

				
				// get purged Pages
				$this->resetVar(1);
				$sql = "SELECT sum(count) FROM `#__jstats_page_request_c` WHERE month=$i and year=$this->y";
				$this->resetVar(0);

				$database->setQuery($sql);
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);				
				$p += $row[0];
								
				if ($p == null)	{ $p=0;	}
				$tp += $p;
				
				mysql_free_result($rs);


				// get Referrers
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM `#__jstats_referrer` WHERE month=$i and year=$this->y";
				$this->resetVar(0);

				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);				
				$r = $row[0];
								
				if ($r == null)	{ $r=0;	}
				$tr += $r;
				
				mysql_free_result($rs);
			
			
				$retval .= "<tr>";
				$retval .= "<td align=\"center\">$a[$i]</td>";
				$retval .= "<td align=\"center\">$uv</td>";
				$retval .= "<td align=\"center\">$v</td>";
				$retval .= "<td align=\"center\">";
				
				if (($uv != 0)&&($v != 0))
				{
					$retval .= number_format(round(($v/$uv),1),1);
				}
				else
				{
					$retval .= "0.0";
				}
				
				$retval .="</td>";
				$retval .= "<td align=\"center\">$p</td>";
				$retval .= "<td align=\"center\">$r</td>";
				$retval .= "<td align=\"center\">$ub</td>";
				$retval .= "<td align=\"center\">$b</td>";
				$retval .= "</tr>";
			}
			
			// Get the values for the totals line

			// get Total Unique visitors for complete month
			$this->resetVar(1);
			$sql  = "SELECT count(*) FROM `#__jstats_visits` LEFT JOIN `#__jstats_ipaddresses` ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
			$sql .= "WHERE #__jstats_ipaddresses.type=1 and #__jstats_visits.year=$this->y ";
			$sql .= "group by #__jstats_visits.ip_id";
			$this->resetVar(0);
			$database->setQuery($sql);			
			$rs = mysql_query($database->_sql);
			$uv = mysql_num_rows($rs);
			if ($uv == null)	{ $uv = 0; }						
			mysql_free_result($rs);	// can this be moved up to free memory earlier?
			
			// Display the totals line		
					
			$retval .= "<tr>";
			$retval .= "<th align=\"center\">$this->y</th>";
			$retval .= "<th align=\"center\">$uv</th>";
			$retval .= "<th align=\"center\">$tv</th>";
			
			$retval .= "<th align=\"center\">";
			if (($uv != 0)&&($tv != 0))
				{
					$retval .= number_format(round(($tv/$uv),1),1);
				}
				else
				{
					$retval .= "0.0";
				}				
			$retval .= "</th>";
			
			$retval .= "<th align=\"center\">$tp</th>";
			$retval .= "<th align=\"center\">$tr</th>";
			$retval .= "<th align=\"center\">$tub</th>";
			$retval .= "<th align=\"center\">$tb</th>";
			$retval .= "</tr>";
						 
			$retval .= '</table><br>';
			
			return $retval;
		}
		

		function msummary()
		{
			global $database;
			
			$monthname = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
			
			
			if ($this->m == "%")			// user selected whole month ('-')
			{							
				$visittime = (time() + ($this->hourdiff * 3600));
				$this->m = date('n',$visittime);				
				
				$retval = "You haven't choosen a month, taking current month (".$monthname[$this->m].") to display data...<BR>";
			}
			else
			{
				$retval = "";	// to be able to .= the next retval
			}
				

			$dm = array(0,31,28 + date('L',mktime(0,0,0,$this->m,$this->d,$this->y)),31,30,31,30,31,31,30,31,30,31);
			
			$retval .= '<table class="adminlist" cellspacing="0" cellpadding="0" width="100%"><tr>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t01'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t03'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t04'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t05'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t08'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t09'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t06'].'</th>';
			$retval .= '<th align="center" nowrap>'.$this->language['tableheaders']['t07'].'</th>';
			$retval .= '</tr>';
				
			$tv = 0;	// total visitors
			$tb = 0;	// total bots
			$tp = 0;	// total pages
			$tr = 0;	// total referrers
						
			for ($i=1; $i<=$dm[$this->m]; $i++)
			{
				// get Unique visitors
				$this->resetVar(1);
				$sql  = "SELECT count(*) FROM #__jstats_visits LEFT JOIN #__jstats_ipaddresses ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
				$sql .= "WHERE #__jstats_ipaddresses.type=1 and #__jstats_visits.day=$i and #__jstats_visits.month=$this->m and #__jstats_visits.year=$this->y ";
				$sql .= "group by #__jstats_visits.ip_id";
				$this->resetVar(0);
				$database->setQuery($sql);
				$rs = mysql_query($database->_sql);
				$uv = mysql_num_rows($rs);
								
				if ($uv == null)
				{
					$uv = 0;
				}
				//$tuv += $uv;
				mysql_free_result($rs);
				

				// get visitors
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM #__jstats_visits LEFT JOIN #__jstats_ipaddresses ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) WHERE #__jstats_ipaddresses.type=1 and #__jstats_visits.day=$i and #__jstats_visits.month=$this->m and #__jstats_visits.year=$this->y";
				$this->resetVar(0);	
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);				
				$row = mysql_fetch_array($rs);
				$v = $row[0];
								
				if ($v == null)
				{
					$v=0;
				}				
				$tv += $v;
												
				mysql_free_result($rs);	// can this be moved up to free memory earlyer?
		

				// get bots
				$this->resetVar(1);
				$sql  = "SELECT count(*) FROM #__jstats_visits LEFT JOIN #__jstats_ipaddresses ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
				$sql .= "WHERE #__jstats_ipaddresses.type=2 and #__jstats_visits.day=$i and #__jstats_visits.month=$this->m and #__jstats_visits.year=$this->y";	
				$this->resetVar(0);

				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);				
				$b = $row[0];

				if ($b == null)
				{
					$b=0;
				}

				$tb += $b;
				
				mysql_free_result($rs);


				// get Unique bots
				$this->resetVar(1);
				$sql  = "SELECT count(*) FROM #__jstats_visits LEFT JOIN #__jstats_ipaddresses ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
				$sql .= "WHERE #__jstats_ipaddresses.type=2 and #__jstats_visits.day=$i and #__jstats_visits.month=$this->m and #__jstats_visits.year=$this->y group by #__jstats_ipaddresses.browser";
				$this->resetVar(0);

				$database->setQuery($sql);
				$rs = mysql_query($database->_sql);				
				$ub = mysql_num_rows($rs);
								
				if ($ub == null)
				{
					$ub=0;
				}

				mysql_free_result($rs);


				// get Pages
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM #__jstats_page_request WHERE day=$i and month=$this->m and year=$this->y";
				$this->resetVar(0);

				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);
				
				$p = $row[0];
								
				if ($p == null)
				{
					$p=0;
				}

				//$tp += $p;
				
				mysql_free_result($rs);
				$row = NULL;
				
				
				// get purged Pages
				$this->resetVar(1);
				$sql = "SELECT sum(count) FROM #__jstats_page_request_c WHERE day=$i and month=$this->m and year=$this->y";
				$this->resetVar(0);
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);
				
				$p += $row[0];
								
				if ($p == null)
				{
					$p=0;
				}

				$tp += $p;				
				mysql_free_result($rs);

				
				// get Referrers
				$this->resetVar(1);
				$sql = "SELECT count(*) FROM #__jstats_referrer WHERE day=$i and month=$this->m and year=$this->y";
				$this->resetVar(0);
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);
				$row = mysql_fetch_array($rs);				
				$r = $row[0];
								
				if ($r == null)	{ $r=0;	}

				$tr += $r;				
				mysql_free_result($rs);				
							
				if ((date("w",strtotime("$this->y-$this->m-$i")) == 6)||(date("w",strtotime("$this->y-$this->m-$i")) == 0))
				{	$cls='row0';
				} else {
					$cls='row1';
				}

				$retval .= "<tr class=\"$cls\">";
				$retval .= "<td align=\"center\">";
				
				if (strlen($i) == 1)
				{	$retval .= "0$i";
				} else {
					$retval .= $i;
				}
				
				// now we have all values, now draw the row (a day)
				$retval .="</td>";
				$retval .= "<td align='center'>$uv</td>";
				$retval .= "<td align='center'><a href=\"javascript:SelectDay($i);submitbutton('r03');\">$v</a></td>";
				
				$retval .= "<td align='center'>";
				if (($uv != 0)&&($v != 0)) {
					$retval .= number_format(round(($v/$uv),1),1);
				} else {
					$retval .= "0.0";
				}
				$retval .= "</td>";
				
				$retval .= "<td align='center'><a href=\"javascript:SelectDay($i);submitbutton('r06');\">$p</a></td>";				
				$retval .= "<td align='center'><a href=\"javascript:SelectDay($i);submitbutton('r10');\">$r</a></td>";
				$retval .= "<td align=\"center\">$ub</td>";							
				$retval .= "<td align='center'><a href=\"javascript:SelectDay($i);submitbutton('r09');\">$b</a></td>";				
				//$retval .= "<td align=\"center\">$b</td>";
				
				$retval .= "</tr>";
			}

			// Get the values for the totals line

			// get Total Unique visitors
			$this->resetVar(1);
			$sql  = "SELECT count(*) FROM #__jstats_visits LEFT JOIN #__jstats_ipaddresses ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
			$sql .= "WHERE #__jstats_ipaddresses.type=1 and #__jstats_visits.month=$this->m and #__jstats_visits.year=$this->y ";
			$sql .= "group by #__jstats_visits.ip_id";
			$this->resetVar(0);
			$database->setQuery($sql);
			$rs = mysql_query($database->_sql);
			$uv = mysql_num_rows($rs);
							
			if($uv == null)	{ $uv = "&nbsp;"; }
			mysql_free_result($rs);
			
			
			// get Total Unique bots
			$this->resetVar(1);
			$sql  = "SELECT count(*) FROM #__jstats_visits LEFT JOIN #__jstats_ipaddresses ON (#__jstats_visits.ip_id=#__jstats_ipaddresses.id) ";
			$sql .= "WHERE #__jstats_ipaddresses.type=2 and #__jstats_visits.month=$this->m and #__jstats_visits.year=$this->y ";
			$sql .= "GROUP BY #__jstats_ipaddresses.browser";
			$this->resetVar(0);
			$database->setQuery($sql);
			$rs = mysql_query($database->_sql);				
			$ub = mysql_num_rows($rs);
								
			if($ub == null)	{	$ub="&nbsp;";	}
			mysql_free_result($rs);


			// Display the totals line
			$retval .= "<tr>";
			$retval .= "<th align=\"center\">".$monthname[$this->m]."</th>";
			$retval .= "<th align=\"center\">$uv</th>";
			$retval .= "<th align=\"center\">$tv</th>";

			$retval .= "<th align=\"center\">";
			if (($uv != 0)&&($tv != 0)) {
				$retval .= number_format(round(($tv/$uv),1),1);
			} else {
				$retval .= "0.0";
			}
			$retval .= "</th>";
			$retval .= "<th align=\"center\">$tp</th>";
			$retval .= "<th align=\"center\">$tr</th>";
			$retval .= "<th align=\"center\">$ub</th>";
			$retval .= "<th align=\"center\">$tb</th>";
			$retval .= "</tr>";
		
			$retval .= '</table><br>';			
			return $retval;
		}
		
		
		function VisitInformation()
		{
			global $database;
			
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t10'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t11'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t29'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t12'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t30'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t08'].'</th>';
			$retval .= '<th align="left">&nbsp;</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t13'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t14'].'</th>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t15'].'</th>';
			$retval .= '</tr>';

			$this->resetVar(1);
//			$sql = "SELECT #__jstats_ipaddresses.tld, #__jstats_topleveldomains.fullname, #__jstats_ipaddresses.nslookup, #__jstats_ipaddresses.system, #__jstats_ipaddresses.browser, #__jstats_visits.time,#__jstats_visits.id, #__jstats_ipaddresses.ip FROM #__jstats_ipaddresses LEFT JOIN #__jstats_topleveldomains ON (#__jstats_ipaddresses.tld = #__jstats_topleveldomains.tld) LEFT JOIN #__jstats_visits ON (#__jstats_ipaddresses.id = #__jstats_visits.ip_id) WHERE (#__jstats_ipaddresses.type != 2 and #__jstats_visits.day LIKE '$this->d' AND #__jstats_visits.month LIKE '$this->m' AND #__jstats_visits.year LIKE '$this->y') ORDER BY #__jstats_visits.time DESC";
			$sql  = "SELECT #__jstats_ipaddresses.tld, #__jstats_topleveldomains.fullname, #__jstats_ipaddresses.nslookup, #__jstats_visits.userid, #__jstats_ipaddresses.system, #__jstats_ipaddresses.browser, #__jstats_visits.time,#__jstats_visits.id, #__jstats_ipaddresses.ip ";
			$sql .= "FROM #__jstats_ipaddresses LEFT JOIN #__jstats_topleveldomains ON (#__jstats_ipaddresses.tld = #__jstats_topleveldomains.tld) LEFT JOIN #__jstats_visits ON (#__jstats_ipaddresses.id = #__jstats_visits.ip_id) ";
			$sql .= "WHERE (#__jstats_ipaddresses.type = 1 AND #__jstats_visits.day LIKE '$this->d' AND #__jstats_visits.month LIKE '$this->m' AND #__jstats_visits.year LIKE '$this->y') ";
			$sql .= "ORDER BY #__jstats_visits.time DESC";
			$this->resetVar(0);
	
			$database->setQuery($sql);
			$rs = mysql_query($database->_sql);
						
			while ($row = mysql_fetch_array($rs)) 
			{
				$vid = $row['id'];

				$sql = "SELECT count( * ) AS count FROM #__jstats_page_request WHERE #__jstats_page_request.ip_id = $vid";
				$database->setQuery($sql);
				$rsCount = mysql_query($database->_sql);
				
				$rowCount = mysql_fetch_array($rsCount);
				
				$retval .= '<tr>';
				$retval .= "<td align=\"left\" nowrap>&nbsp;$row[0]</td>";
				$retval .= "<td align=\"left\" nowrap>&nbsp;$row[1]</td>";
				$retval .= "<td align=\"left\" nowrap>&nbsp;{$row['ip']}</td>";
				$retval .= "<td align=\"left\">";
				if (strlen($row[2]) > 45) { $retval .=substr($row[2],1,45); } else { $retval .= $row[2]; }
				$retval .="</td>";
				// display username in stead of userid
				$database->SetQuery("SELECT name FROM #__users WHERE id=$row[3]");
				$name = $database->LoadResult();

				$retval .= "<td align=\"left\" nowrap>$name</td>";

				//$retval .= "<td align=\"left\" nowrap><a title=\"$rowCount[0]\" href=\"index2.php?option=com_joomlastats&task=r03a&d=$this->d&m=$this->m&y=$this->y&v=$vid\">$rowCount[0]</a></td>";
				//$retval .= "<td align=\"left\" nowrap><a title=\"pathinfo\" href=\"index2.php?option=com_joomlastats&task=r03b&d=$this->d&m=$this->m&y=$this->y&v=$vid\">chemin</a></td>";

				$retval .= "<td align=\"left\" nowrap><a title=\"$rowCount[0]\" href=\"javascript:document.adminForm.vid.value=$vid;submitbutton('r03a');\">$rowCount[0]</a></td>";
				$retval .= "<td align=\"left\" nowrap><a title=\"pathinfo\" href=\"javascript:document.adminForm.vid.value=$vid;submitbutton('r03b');\">pathinfo</a></td>";
				
				$retval .= "<td align=\"left\">&nbsp;$row[4]</td>";
				$retval .= "<td align=\"left\" nowrap>&nbsp;$row[5]</td>";
				$retval .= "<td align=\"left\" nowrap>".$row[6]."</td>";				
				$retval .= '</tr>';
				
				mysql_free_result($rsCount);
			}
			$this->resetVar(1);
			
			mysql_free_result($rs);								
			$retval .= '</table><br>';			
			return $retval;
		}


		function getVisitorsByTld()
		{
			global $database;
					
			$totalnmb = 0;
			$totalmax = 0;
			$totaltld = 0;

			$retval  = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="left"	width="2%">'.$this->language['tableheaders']['t17'].'</th>';
			$retval .= '<th align="left" 	width="3%">'.$this->language['tableheaders']['t19'].'</th>';
			$retval .= '<th align="center"	width="10%">'.$this->language['tableheaders']['t04'].'</th>';
			$retval .= '<th align="left"	width="20%">'.$this->language['tableheaders']['t18'].'</th>';			
			$retval .= '<th align="left"	width="65%">'.$this->language['tableheaders']['t11'].'</th>';
			$retval .= '</tr>';
			
			$this->resetVar(1);
			$sql = "SELECT count(*) AS numbers,#__jstats_ipaddresses.tld,#__jstats_topleveldomains.fullname FROM #__jstats_ipaddresses LEFT JOIN #__jstats_topleveldomains ON(#__jstats_ipaddresses.tld = #__jstats_topleveldomains.tld) LEFT JOIN #__jstats_visits ON(#__jstats_ipaddresses.id = #__jstats_visits.ip_id) WHERE ((#__jstats_visits.day LIKE '$this->d') AND (#__jstats_visits.month LIKE '$this->m') AND (#__jstats_visits.year LIKE '$this->y') AND (#__jstats_ipaddresses.type='1')) GROUP BY tld ORDER BY numbers DESC, #__jstats_topleveldomains.fullname ASC";
			$this->resetVar(0);
	
			$database->setQuery($sql);		
			$rs = mysql_query($database->_sql);			
			while ($row = mysql_fetch_array($rs)) 
			{
				$totalnmb += $row['numbers'];
				$totaltld++;
				if ($row['numbers']>$totalmax) $totalmax = $row['numbers'];
			}    		
			
			if ($totalnmb != 0)
			{
				$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
				mysql_data_seek($rs,0);
				
				while ($row = mysql_fetch_array($rs)) 
				{
					$retval .= '<tr>';
		
					if ($row[1] == '')
					{
						$retval .= "<td align=\"left\"><img src=\"../components/com_joomlastats/images/tld/unknown.png\"></td>";
					}
					else
					{
						$retval .= "<td align=\"left\"><img src=\"../components/com_joomlastats/images/tld/".$row[1].".png\"></td>";
					}
					$retval .= "<td align=\"left\" nowrap>&nbsp;$row[1]</td>";
					$retval .= "<td align=\"center\" nowrap>&nbsp;$row[0]</td>";
	
					//$retval .= "<td align=\"left\" nowrap>&nbsp;".round((($row[0]/$totalnmb)*100),1)."%</td>";
					$percent = round((($row[0]/$totalnmb)*100),1);
					$retval .= "<td align='left' nowrap>&nbsp;";
					$retval .= $this->PercentBar($percent,$totalmaxpercent);
					$retval .= "&nbsp;&nbsp;$percent"."%</td>";
					
					$retval .= "<td align=\"left\" nowrap>&nbsp;$row[2]</td>";
					$retval .= '</tr>';	
				}	
			} // end if $totalnmb != 0
			
			$retval .='<tr><th>&nbsp;</th>' .
					'<th>&nbsp;</th>' .
					'<th align="center">&nbsp;'.$totalnmb.'</th>' .										
					'<th>&nbsp;</th>';					
					//'<th>&nbsp;</th>';
			if ($totaltld != 0)
			{	$retval .= "<th align='left'>&nbsp;&nbsp;".$totaltld." different countries</th>";
			} else	{
				$retval .= "<th align='left'>&nbsp;No countries</th>";
			}
					
					
			$retval .= '<tr>';
			mysql_free_result($rs);
			$retval .= '</table><br>';
			return $retval;
		}

		function getPageHits()
		{
			global $database;

			$pc = 0;
			$totalnmb = 0;
			$totaldifferentpages = 0;
				
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th width="10%">'.$this->language['tableheaders']['t28'].'</th>';
			$retval .= '<th width="20%">'.$this->language['tableheaders']['t18'].'</th>';
			$retval .= '<th align="left" width="70%">'.$this->language['tableheaders']['t20'].'</th>';
			$retval .= '</tr>';
			
			$rettable = NULL;
			
			$sql = "SELECT page, page_id, page_title FROM #__jstats_pages";			
			$database->setQuery($sql);		
			$rs = mysql_query($database->_sql);
						
			while ($row = mysql_fetch_array($rs)) 
			{
				$this->resetVar(1);
				$sqla = "SELECT count(*) numbers " .
						"FROM #__jstats_page_request " .
						"WHERE ((#__jstats_page_request.page_id = $row[1]) AND (#__jstats_page_request.day LIKE '$this->d') AND (#__jstats_page_request.month LIKE '$this->m') AND (#__jstats_page_request.year LIKE '$this->y'))";
				$sqlb = "SELECT sum(count) " .
						"FROM #__jstats_page_request_c " .
						"WHERE ((#__jstats_page_request_c.day LIKE '$this->d') AND (#__jstats_page_request_c.month LIKE '$this->m') AND (#__jstats_page_request_c.year LIKE '$this->y') AND (#__jstats_page_request_c.page_id = $row[1]))";
				$this->resetVar(0);
							
				$database->setQuery($sqla);
				$rsa = mysql_query($database->_sql);
				$rowa = mysql_fetch_array($rsa);

				$database->setQuery($sqlb);
				$rsb = mysql_query($database->_sql);
				$rowb = mysql_fetch_array($rsb);
				
				if (($rowa[0] + $rowb[0]) > 0)
				{					
					$rettable[$row['page'].'#/#'.$row['page_title']] = ($rowa[0] + $rowb[0]);
				}
				
				mysql_free_result($rsa);
				mysql_free_result($rsb);			
			}    		
			mysql_free_result($rs);

			if ($rettable)
			{
				arsort ($rettable);
				reset ($rettable);				
				while (list ($key, $val) = each ($rettable))
				{
					$totalnmb+=$val;
					$totaldifferentpages++;
					if ($val>$totalmax) $totalmax = $val;
				}	
				reset ($rettable);
				
				if ($totalnmb>0)
				{
					$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);					
				}
				
				while (list ($key, $val) = each ($rettable))
				{
					$explodedkey = explode('#/#',$key);					
					
					$retval .= '<tr>';
					$retval .= "<td align=\"center\" nowrap>&nbsp;".$val."</td>";
					
					//$retval .= "<td align=\"center\" nowrap>&nbsp;".round((($val/$totalnmb)*100),1)."%</td>";
					$percent = round((($val/$totalnmb)*100),1);
// ??? How do I get fixed result not "1" but "1,0"   If i get this to work right align looks better.
					$retval .= "<td align='left' nowrap>&nbsp;";
					$retval .= $this->PercentBar($percent,$totalmaxpercent);
					$retval .= "&nbsp;&nbsp;$percent"."%</td>";
					
					if ($explodedkey[1])
					{
						$retval .= "<td align=\"left\" nowrap><a href=\"{$explodedkey[0]}\" target=\"_blank\">{$explodedkey[1]}</a></td>";
					}
					else
					{
						$retval .= "<td align=\"left\" nowrap><a href=\"{$explodedkey[0]}\" target=\"_blank\">{$explodedkey[0]}</a></td>";
					}
					$retval .= "</tr>\n";
				}									
			} // if $rettable
										
			$retval .='<tr>';
			$retval .='<th >&nbsp;'.$totalnmb.'</th>';
			$retval .='<th >&nbsp;</th>';
			$retval .="<th align='left'>&nbsp;".$totaldifferentpages." different pages</th>";
			$retval .='<tr>';
								
			$retval .= '</table><br>';
			
			return $retval;
		}

		function getSystems()
		{
			global $database;
			
			$totalnmb = 0;
			$totalmax = 0;
			$totalmaxpercent = 0;
			$totalsystems = 0;
		
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th width="10%">'.$this->language['tableheaders']['t28'].'</th>';
			$retval .= '<th width="20%">'.$this->language['tableheaders']['t18'].'</th>';
			$retval .= '<th align="left" width="70%">'.$this->language['tableheaders']['t13'].'</th>';			
			$retval .= '</tr>';
			
			$this->resetVar(1);
			$sql = "SELECT #__jstats_ipaddresses.system,count(*) numbers FROM #__jstats_ipaddresses,#__jstats_visits WHERE ((#__jstats_ipaddresses.id = #__jstats_visits.ip_id) AND (#__jstats_visits.day LIKE '$this->d') AND (#__jstats_visits.month LIKE '$this->m') AND (#__jstats_visits.year LIKE '$this->y') AND (#__jstats_ipaddresses.type = 1)) GROUP BY #__jstats_ipaddresses.system ORDER BY numbers DESC, #__jstats_ipaddresses.system ASC";
			$this->resetVar(0);	
			$database->setQuery($sql);		
			$rs = mysql_query($database->_sql);			
			while ($row = mysql_fetch_array($rs)) 
			{	
				$totalsystems++;
				$totalnmb += $row[1];
				if ($row[1]>$totalmax) $totalmax = $row[1];
			}    		

			if ($totalnmb != 0)
			{
				$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
				mysql_data_seek($rs,0);
	
				while ($row = mysql_fetch_array($rs)) 
				{
					$retval .= "<tr>";
				  	$retval .= "<td align=\"center\" nowrap>&nbsp;$row[1]</td>";
				  	
				  	$percent = round((($row[1]/$totalnmb)*100),1);				  	
				  	$retval .= "<td align='left' nowrap>&nbsp;";
					$retval .= $this->PercentBar($percent,$totalmaxpercent);
					$retval .= "&nbsp;&nbsp;$percent"."%</td>";				  	
				  						
					//$retval .= "<td align=\"center\" nowrap>&nbsp;".$percent ."%</td>";
					
					$retval .= "<td align=\"left\" nowrap>&nbsp;$row[0]</td>";	
					$retval .= "</tr>\n";
				} 
			} // if $totalnmb != 0
						
			// TotalLine
			$retval .='<tr><th >&nbsp;'.$totalnmb.'</th>' .
					'<th >&nbsp;</th>';
			if ($totalsystems != 0)
			{	$retval .= "<th align='left'>&nbsp;&nbsp;".$totalsystems." different operating systems</th>";
			} else	{
				$retval .= "<th align='left'>&nbsp;No operating systems</th>";
			}

			mysql_free_result($rs);			
			$retval .= '</table><br>';			
			return $retval;
		} // getSystems()

		function getBrowsers()
		{
			global $database;
		
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th width="10%">'.$this->language['tableheaders']['t28'].'</th>';
			$retval .= '<th width="20%">'.$this->language['tableheaders']['t18'].'</th>';
			$retval .= '<th align="left" width="70%">'.$this->language['tableheaders']['t21'].'</th>';
			$retval .= '</tr>';
			
			$totalbrowsers = 0;
			$totalnmb = 0;
			$totalmax = 0;
			
			$this->resetVar(1);
			$sql = "SELECT #__jstats_ipaddresses.browser,count(*) numbers FROM #__jstats_ipaddresses,#__jstats_visits WHERE ((#__jstats_visits.ip_id = #__jstats_ipaddresses.id) AND (#__jstats_ipaddresses.type =1) AND (#__jstats_visits.day LIKE '$this->d') AND (#__jstats_visits.month LIKE '$this->m') AND (#__jstats_visits.year LIKE '$this->y')) GROUP BY #__jstats_ipaddresses.browser ORDER BY numbers DESC, #__jstats_ipaddresses.browser ASC";
			$this->resetVar(0);
	
			$database->setQuery($sql);		
			$rs = mysql_query($database->_sql);
			while ($row = mysql_fetch_array($rs)) 
			{
				$totalbrowsers++;
				$totalnmb += $row[1];
				if ($row[1]>$totalmax) $totalmax = $row[1];
			}    		

			if ($totalnmb != 0)
			{
				$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
				mysql_data_seek($rs,0);
	
				while ($row = mysql_fetch_array($rs)) 
				{
					$retval .= "<tr>";
					$retval .= "<td align='center' nowrap>&nbsp;$row[1]</td>";

					$percent = round((($row[1]/$totalnmb)*100),1);
//??? How do I get fixed result not "1" but "1,0"   If i get this to work right align looks better.
					$retval .= "<td align='left' nowrap>&nbsp;";
					$retval .= $this->PercentBar($percent,$totalmaxpercent);
					$retval .= "&nbsp;&nbsp;$percent"."%</td>";

					$retval .= "<td align='left' nowrap>&nbsp;$row[0]</td>";
					$retval .= "</tr>";
				} 		
			} 
			mysql_free_result($rs);
			
			// Summary Bar
			$retval .= "<tr><th align='center'>&nbsp;".$totalnmb."</th>";
			$retval .= "<th>&nbsp;</th>";
			if ($totalbrowsers != 0)
			{	$retval .= "<th align='left'>&nbsp;&nbsp;".$totalbrowsers." different browsers</th>";
			} else	{
				$retval .= "<th align='left'>&nbsp;No browsers</th>";
			}
			$retval .= "</tr>";
					
			$retval .= '</table><br>';
			//$retval .= '<center>[&nbsp;<a href="javascript:history.back(1)">Back</a>&nbsp;]</center>';
			
			return $retval;
		} // getBrowsers()

		function getBots()
		{
			global $database;
			// $this->$dom is used as transfer variable for browser (is name of Bot)
			// $this->$vid is used as transfer variable for ip_id

			$do_bots = 0;		// 0: not doing bot; 				1: do bots 	(overview of all Bots)
			$totalnmb = 0;		// total number of records
			$totalbots = 0;		// total nuber of different bots
			$totalmax = 0;
			
			if ($this->dom == '')
			{	// If function not called before, then start with overview bots/spiders table
				$this->dom='%'; $do_bots=1;
			} 
			if ($this->vid == '')
			{	$this->vid='%';
			} else {
				$do_detailed = 1;
			}
						
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
				
			if ($do_bots)	// The first screen, list all bots
			{
				$retval .= '<th width="10%">'.$this->language['tableheaders']['t28'].'</th>';
				$retval .= '<th width="20%">'.$this->language['tableheaders']['t18'].'</th>';
				$retval .= '<th align="left" width="70%">'.$this->language['tableheaders']['t22'].'</th>';
				$retval .= '</tr>';	
			
				$this->resetVar(1);
				$sql  = "SELECT #__jstats_ipaddresses.browser,count(*) numbers ";
				$sql .= "FROM #__jstats_ipaddresses,#__jstats_visits ";
				$sql .= "WHERE ((#__jstats_visits.ip_id = #__jstats_ipaddresses.id) AND (#__jstats_ipaddresses.browser !='') ";	// selecting right&filled table
				$sql .= "AND (#__jstats_ipaddresses.type =2) "; // only Bots
				$sql .= "AND (#__jstats_visits.day LIKE '$this->d') AND (#__jstats_visits.month LIKE '$this->m') AND (#__jstats_visits.year LIKE '$this->y')) ";	// only within selected range
				$sql .= "GROUP BY #__jstats_ipaddresses.browser ";	
				$sql .= "ORDER BY numbers DESC, #__jstats_ipaddresses.browser ASC";	
				$this->resetVar(0);
	
				$database->setQuery($sql);		
				$rs = mysql_query($database->_sql);
				while ($row = mysql_fetch_array($rs)) 
				{
					$totalnmb += $row[1];
					$totalbots++;
					if ($row[1]>$totalmax) $totalmax = $row[1];
				}    		
				
				if ($totalnmb != 0)
				{	// walk the records if we have some
					$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
				
					mysql_data_seek($rs,0);		
					while ($row = mysql_fetch_array($rs)) 
					{
						$retval .= "<tr>";
						$retval .= "<td align='center' nowrap>&nbsp;$row[1]</td>";
						
						//$retval .= "<td align='center' nowrap>&nbsp;".round((($row[1]/$totalnmb)*100),1)."%</td>";
						$percent = round((($row[1]/$totalnmb)*100),1);
						$retval .= "<td align='left' nowrap>&nbsp;";
						$retval .= $this->PercentBar($percent,$totalmaxpercent);
						$retval .= "&nbsp;&nbsp;$percent"."%</td>";
					
						$retval .= "<td align='left'   nowrap>&nbsp;<a title='bot/spider' href=\"javascript:document.adminForm.dom.value='".$row[0]."';submitbutton('r09');\">$row[0]</a></td>";
						$retval .= "</tr>\n";
					}
				} // if $totalnmb !=0
				mysql_free_result($rs);
				
				$retval .='<tr><th >&nbsp;'.$totalnmb.'</th>' .
						'<th >&nbsp;</th>';
						//'<th >&nbsp;</th><tr>';
				if ($totalbots != 0)
				{	$retval .= "<th align='left'>&nbsp;&nbsp;".$totalbots." different bots/spiders</th>";
				} else	{
					$retval .= "<th align='left'>&nbsp;No bots/spiders</th>";
				}
				$retval .= '<tr></table><br>';
			}
			else
			{	// not doing overview bots -> The second screen, list all visits from selected bot
				$retval .= '<th width= "10%" align="left">'.$this->language['tableheaders']['t10'].'</th>';
				$retval .= '<th width= "10%" align="left">'.$this->language['tableheaders']['t11'].'</th>';
				$retval .= '<th width= "10%" align="left">'.$this->language['tableheaders']['t16'].'</th>';
				$retval .= '<th width= "10%" align="left">'.$this->language['tableheaders']['t08'].'</th>';
				$retval .= '<th width="100%" align="left">'.$this->language['tableheaders']['t15'].'</th>';
				$retval .= '</tr>';
				
				$this->resetVar(1);
				$sql  = "SELECT #__jstats_ipaddresses.tld, #__jstats_topleveldomains.fullname, #__jstats_ipaddresses.browser, #__jstats_visits.time, #__jstats_visits.id ";
				$sql .= "FROM #__jstats_ipaddresses ";
				$sql .= "LEFT JOIN #__jstats_topleveldomains ON (#__jstats_ipaddresses.tld = #__jstats_topleveldomains.tld) LEFT JOIN #__jstats_visits ";
				$sql .= "ON (#__jstats_visits.ip_id = #__jstats_ipaddresses.id) ";
				$sql .= "WHERE (#__jstats_ipaddresses.browser LIKE '$this->dom' AND #__jstats_ipaddresses.type = 2 AND #__jstats_visits.day LIKE '$this->d' AND #__jstats_visits.month LIKE '$this->m' AND #__jstats_visits.year LIKE '$this->y') ";
				$sql .= "ORDER BY #__jstats_visits.time DESC";
				$this->resetVar(0);
		
				$database->setQuery($sql);			
				$rs = mysql_query($database->_sql);	
				while ($row = mysql_fetch_array($rs)) 
				{	
					$vid = $row['id'];

					$sql = "SELECT count( * ) AS count FROM #__jstats_page_request WHERE #__jstats_page_request.ip_id = $vid";
					$database->setQuery($sql);
					$rsCount = mysql_query($database->_sql);
					
					$rowCount = mysql_fetch_array($rsCount);
					
					$retval .= '<tr>';
					$retval .= "<td align=\"left\" nowrap>&nbsp;$row[0]</td>";
					$retval .= "<td align=\"left\" nowrap>&nbsp;$row[1]</td>";
					$retval .= "<td align=\"left\" nowrap>&nbsp;$row[2]</td>";
					//$retval .= "<td align=\"left\" nowrap><a href=\"index2.php?option=com_joomlastats&task=r09a&d=$this->d&m=$this->m&y=$this->y&v=$vid\">$rowCount[0]</a></td>";
					$retval .= "<td align=\"left\" nowrap>";
					$retval .= "<a title='pathinfo' href=\"javascript:document.adminForm.dom.value='$this->dom';javascript:document.adminForm.vid.value=$vid;submitbutton('r09a');\">$rowCount[0]</a>";
					$retval .= "</td>";
					
					$retval .= "<td align=\"left\" nowrap>".$row[3]."</td>";				
					$retval .= '</tr>';
			
					mysql_free_result($rsCount);				
				}    					
				mysql_free_result($rs);
					
				$retval .= '</table><br>';			
				
				$retval .= "<center>[&nbsp;<a href=\"javascript:submitbutton('r09');\">Back</a>&nbsp;]</center>";
			} // $do_bots				
			
			return $retval;
		} // getBots()

		function getReferrers()
		{
			global $database;
		
			$totalnmb = 0;
			$doreffererdomain = 0;
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';			
				
			if ($this->dom == '')
			{
				$doreffererdomain=1;
				$this->dom='%';
			}
						
			$this->resetVar(1);
			if ($doreffererdomain)
			{
				$sql  = "SELECT domain, count(*) counter FROM #__jstats_referrer ";
				$sql .= "WHERE day LIKE '$this->d' AND month LIKE '$this->m' AND year LIKE '$this->y' AND domain LIKE '$this->dom' ";
				$sql .= "group by domain order by counter DESC, domain ASC";
			}
			else
			{
				$sql  = "SELECT referrer, count(*) counter FROM #__jstats_referrer ";
				$sql .= "WHERE day LIKE '$this->d' AND month LIKE '$this->m' AND year LIKE '$this->y' AND domain LIKE '$this->dom' ";
				$sql .= "group by referrer order by counter DESC, referrer ASC";			
			}
			$this->resetVar(0);
			
			$database->setQuery($sql);
			$rs = mysql_query($database->_sql);

			if ($doreffererdomain)
			{	// do refferer domain
				$retval .= '<th width="5%" nowrap>'.$this->language['tableheaders']['t28'].'</th>';
				$retval .= '<th width="10%" colspan="2">'.$this->language['tableheaders']['t18'].'</th>';
				$retval .= '<th align="left" width="100%">'.$this->language['tableheaders']['t23'].'</th>';
				$retval .= '</tr>';

				$totalmax = 0;
				while ($row = mysql_fetch_array($rs)) 
				{
					$totalnmb += $row[1];
					if ($row[1]>$totalmax)	$totalmax = $row[1];
					$totalrefferers++;
				}    		
				
				if ($totalnmb != 0)
				{
					$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
					
					mysql_data_seek($rs,0);	
					$this->resetVar(0);					
					while ($row = mysql_fetch_array($rs)) 
					{
						$percent = round((($row[1]/$totalnmb)*100),1);
						//$retval .= "<tr><td align=\"center\" nowrap>&nbsp;$row[1]</td><td align=\"center\" nowrap>&nbsp;".round((($row[1]/$totalnmb)*100),1)."%</td><td nowrap>&nbsp;<a href=\"index2.php?option=com_joomlastats&task=r10&dom=$row[0]&d=$this->d&m=$this->m&y=$this->y\">$row[0]</a></td></tr>\n";
						$retval .= "<tr><td align=\"center\" nowrap>&nbsp;$row[1]</td>";
						$retval .= "<td align=\"center\" nowrap>".$this->PercentBar($percent,$totalmaxpercent)."</td>";
						$retval .= "<td align=\"center\" nowrap>".$percent."%</td>";
						$retval .= "<td nowrap>&nbsp;<a href=\"javascript:document.adminForm.dom.value='$row[0]';submitbutton('r10');\">$row[0]</a></td></tr>\n";	
					}
					$this->resetVar(1);
				} 			
				$retval .= '<tr><th>&nbsp;'.$totalnmb.'</th>';
				$retval .= "<th>&nbsp;</th>";
				$retval .= "<th>&nbsp;</th>";
				if ($totalrefferers>0)
				{	$retval .= "<th align='left'><a href=\"javascript:document.adminForm.dom.value='%';submitbutton('r10');\">All (".$totalrefferers.") Referrer Domains</a></th><tr>";
				} else {
					$retval .= "<th align='left'>No Referrer Domains</th><tr>";
				}
				
			}
			else
			{	// do referrer page
				$retval .= '<th width="5%" nowrap>'.$this->language['tableheaders']['t28'].'</th>';
				$retval .= '<th width="10%" colspan="2">'.$this->language['tableheaders']['t18'].'</th>';
				$retval .= '<th align="left" width="100%">'.$this->language['tableheaders']['t24'].'</th>';
				$retval .= '</tr>';

				$totalmax = 0;
				$totalrefferers = 0;
				while ($row = mysql_fetch_array($rs)) 
				{
					$totalnmb += $row[1];
					if ($row[1]>$totalmax) $totalmax = $row[1];
					$totalrefferers++;
				}    		
				$totalmaxpercent = round((($totalmax/$totalnmb)*100),1); 
				
				if ($totalnmb!=0)
				{
					mysql_data_seek($rs,0);	
					while ($row = mysql_fetch_array($rs)) 
					{
						$percent = round((($row[1]/$totalnmb)*100),1);
						$retval .=	"<tr>" .
									"<td align=\"center\" nowrap>&nbsp;$row[1]</td>" .
									"<td align=\"center\" nowrap>".$this->PercentBar($percent,$totalmaxpercent)."</td>" .
									"<td align=\"center\" nowrap>".$percent."%</td>" .
									"<td width=\"100%\" nowrap><a href=\"$row[0]\">$row[0]</a></td>" .
									"</tr>\n";
					} 
				} 			
				
				// TotalLine	
				$retval .='<tr><th >&nbsp;'.$totalnmb.'</th>' .
						'<th >&nbsp;</th>' .
						'<th >&nbsp;</th>';
				$retval .= "<th align='left'>".$totalrefferers." different refferers</th><tr>";
			}	
			mysql_free_result($rs);			
			$retval .= '</table><br>';

			if (!$doreffererdomain)
			{
				$retval .= '<center>[&nbsp;<a href="javascript:document.adminForm.dom.value=\'\';submitbutton(\'r10\');">Back</a>&nbsp;]</center>';
			}			

			return $retval;
		} // getReferrers()

		function getNotIdentified()
		{
			global $database;
			
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="left" width="10%">'.$this->language['tableheaders']['t19'].'</th>';
			$retval .= '<th align="left" width="10%">'.$this->language['tableheaders']['t11'].'</th>';
			$retval .= '<th align="left" width="10%">'.$this->language['tableheaders']['t27'].'</th>';
			$retval .= '<th align="left" width="100%">'.$this->language['tableheaders']['t15'].'</th>';
			$retval .= '</tr>';
					
			$this->resetVar(1);
			$sql = "SELECT #__jstats_ipaddresses.tld, #__jstats_topleveldomains.fullname, #__jstats_ipaddresses.useragent, #__jstats_visits.time FROM #__jstats_ipaddresses, #__jstats_topleveldomains, #__jstats_visits WHERE (( #__jstats_ipaddresses.tld = #__jstats_topleveldomains.tld ) AND ( #__jstats_visits.ip_id = #__jstats_ipaddresses.id ) AND ( #__jstats_ipaddresses.type = 0) AND (#__jstats_visits.day LIKE '$this->d') AND (#__jstats_visits.month LIKE '$this->m') AND (#__jstats_visits.year LIKE '$this->y')) ORDER BY #__jstats_visits.time DESC";
			$this->resetVar(0);

			$database->setQuery($sql);
		
			$rs = mysql_query($database->_sql);

			while ($row = mysql_fetch_array($rs)) 
			{
				$retval .= '<tr>';
				$retval .= "<td nowrap>&nbsp;$row[0]</td>";
				$retval .= "<td nowrap>&nbsp;$row[1]</td>";
				$retval .= "<td nowrap>&nbsp;$row[2]</td>";
//				$retval .= "<td nowrap>". date("d-m-Y H:i:s" ,$row[3])."</td>";				
				$retval .= "<td nowrap>".$row[3]."</td>";				
				$retval .= '</tr>';
			}    		
			
			mysql_free_result($rs);
			
			$retval .= '</table><br>';
			
			return $retval;
		}

		function getUnknown()
		{
			global $database;
			
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="left" width="10%">'.$this->language['tableheaders']['t19'].'</th>';
			$retval .= '<th align="left" width="10%">'.$this->language['tableheaders']['t11'].'</th>';
			$retval .= '<th align="left" width="10%">'.$this->language['tableheaders']['t27'].'</th>';
			$retval .= '<th align="left" width="100%">'.$this->language['tableheaders']['t15'].'</th>';
			$retval .= '</tr>';
					
			$this->resetVar(1);
			$sql = "SELECT #__jstats_ipaddresses.tld, #__jstats_topleveldomains.fullname, #__jstats_ipaddresses.useragent, #__jstats_visits.time FROM #__jstats_ipaddresses, #__jstats_topleveldomains, #__jstats_visits WHERE ((#__jstats_ipaddresses.tld = #__jstats_topleveldomains.tld) AND (#__jstats_visits.ip_id = #__jstats_ipaddresses.id) AND (#__jstats_ipaddresses.browser LIKE 'Unknown%') AND (#__jstats_visits.day LIKE '$this->d') AND (#__jstats_visits.month LIKE '$this->m') AND (#__jstats_visits.year LIKE '$this->y')) ORDER BY #__jstats_visits.time DESC";
			$this->resetVar(0);
	
			$database->setQuery($sql);
		
			$rs = mysql_query($database->_sql);

			while ($row = mysql_fetch_array($rs)) 
			{
				$retval .= '<tr>';
				$retval .= "<td  nowrap>&nbsp;$row[0]</td>";
				$retval .= "<td  nowrap>&nbsp;$row[1]</td>";
				$retval .= "<td  nowrap>&nbsp;$row[2]</td>";
//				$retval .= "<td nowrap>". date("d-m-Y H:i:s" ,$row[3])."</td>";				
				$retval .= "<td nowrap>".$row[3]."</td>";				
				$retval .= '</tr>';
			}    		
			
			mysql_free_result($rs);
			
			$retval .= '</table><br>';
			
			return $retval;
		}

//////////////////////////////////////////////////////////////////////////////////////

		function moreVisitInfo()
		/*
		 *	Displays pages with counts
		 *  input: $this->vid	: id
		 *         $this->dom : name (optional)
		 */
		{		
			global $database, $task;
			
			$totalnmb = 0;
		
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="left">'.$this->language['tableheaders']['t28'].'</th>';
			$retval .= '<th align="left" width="100%">'.$this->language['tableheaders']['t20'].'</th>';
			$retval .= '</tr>';
			
			$this->resetVar(1);
			$sql  = "SELECT count( * ) AS count, #__jstats_pages.page, #__jstats_pages.page_title ";
			$sql .= "FROM #__jstats_page_request LEFT JOIN #__jstats_pages ";
			$sql .= "ON #__jstats_pages.page_id = #__jstats_page_request.page_id ";
			$sql .= "WHERE #__jstats_page_request.ip_id = $this->vid GROUP BY #__jstats_pages.page";			
			$this->resetVar(0);
			
			//debug info
			//echo "[[vid[[".$this->vid."]]]]\n";
			//echo "[[dom[[".$this->dom."]]]]\n";			
			
			$database->setQuery($sql);
			//echo $database->getQuery();					
			$rs = mysql_query($database->_sql);
			
			if ($rs)
			{
				while ($row = mysql_fetch_array($rs)) 
				{
					if ($row['page_title'] == '')
					{
						$retval .= "<tr><td nowrap>&nbsp;".$row['count']."</td>";
						$retval .= "<td nowrap><a href=\"{$row['page']}\" target=\"_blank\">{$row['page']}</a></td></tr>\n";
					}
					else
					{
						$retval .= "<tr><td nowrap>&nbsp;".$row['count']."</td>";
						$retval .= "<td nowrap><a href=\"{$row['page']}\" target=\"_blank\">{$row['page_title']}</a></td></tr>\n";
					}
				} //while
			}						
			mysql_free_result($rs);
			
			$retval .='<tr><th >&nbsp;</th><th >&nbsp;</th><tr>';
			$retval .= '</table><br>';
			
			if ($task == 'r09a')	{
				//$retval .= '<center>[&nbsp;<a href="javascript:submitbutton(\'r09\');">Back</a>&nbsp;]</center>';
				$retval .= "<center>[&nbsp;<a href=\"javascript:document.adminForm.dom.value='$this->dom';javascript:document.adminForm.vid.value=$this->vid;submitbutton('r09');\">Back</a>&nbsp;]</center>";
			}	else	{
				$retval .= '<center>[&nbsp;<a href="javascript:submitbutton(\'r03\');">Back</a>&nbsp;]</center>';				
			}
			
			return $retval;			
		}
		
		function morePathInfo()
		{
			global $database;
			
			$totalnmb = 0;
		
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			$retval .= '<th align="left" width="100%">'.$this->language['tableheaders']['t20'].'</th>';
			$retval .= '</tr>';
			
			$this->resetVar(1);
			$sql = "SELECT #__jstats_pages.page, #__jstats_pages.page_title FROM #__jstats_page_request LEFT JOIN #__jstats_pages ON #__jstats_pages.page_id = #__jstats_page_request.page_id WHERE #__jstats_page_request.ip_id = $this->vid";
			$this->resetVar(0);
			
			$database->setQuery($sql);
		
			$rs = mysql_query($database->_sql);

			if ($rs)
			{
				while ($row = mysql_fetch_array($rs)) 
				{
					if($row['page_title'] == '')
					{
						$retval .= "<tr><td nowrap><a href=\"{$row['page']}\" target=\"_blank\">{$row['page']}</a></td></tr>\n";
					}
					else
					{
						$retval .= "<tr><td nowrap><a href=\"{$row['page']}\" target=\"_blank\">{$row['page_title']}</a></td></tr>\n";
					}
				} //while
			}						

			$retval .='<tr><th>&nbsp;</th><tr>';

			mysql_free_result($rs);
					
			$retval .= '</table><br>';
			$retval .= '<center>[&nbsp;<a href="javascript:submitbutton(\'r03\');">Back</a>&nbsp;]</center>';
			
			return $retval;
			
		}

		function getSearches()
		{
			global $database;

			$totalnmb = 0;
			$totalmax = 0;
			$do_search_engines = 0;
			$totalsearches = 0;
			$retval = '<table class="adminlist" cellspacing="0" width="100%"><tr>';
			
			if ($this->dom == '')
			{	// If function not called before, then start with search engines table
				$this->dom='%'; $do_search_engines=1;
			}
			
			$this->resetVar(1);
			if ($do_search_engines)
			{	// List of Search Engines
				$sql  = "SELECT description, count(*) AS count FROM #__jstats_keywords LEFT JOIN #__jstats_search_engines ";
				$sql .= "ON ( #__jstats_keywords.searchid = #__jstats_search_engines.searchid ) ";
				$sql .= "WHERE YEAR(kwdate) LIKE '$this->y' AND MONTH(kwdate) LIKE '$this->m' AND DAYOFMONTH(kwdate) LIKE '$this->d' ";
				$sql .= "GROUP BY description ORDER BY count DESC";
			}
			else
			{	// List of Search Keyphrases
				$sql  = "SELECT keywords, count(*) AS count FROM #__jstats_keywords LEFT JOIN #__jstats_search_engines ";
				$sql .= "ON ( #__jstats_keywords.searchid = #__jstats_search_engines.searchid ) ";
				$sql .= "WHERE YEAR(kwdate) LIKE '$this->y' AND MONTH(kwdate) LIKE '$this->m' AND DAYOFMONTH(kwdate) LIKE '$this->d' ";
				$sql .= "AND description LIKE '$this->dom' ";
				$sql .= "GROUP BY keywords ORDER BY count DESC";
			}
			$this->resetVar(0);
			
			$database->setQuery($sql);
			$rs = mysql_query($database->_sql);

			if ($do_search_engines)
			{	// List of Search Engines
				$retval .= "\r\n\t\t<th width=\"10%\" nowrap>".$this->language['tableheaders']['t28']."</th>";
				$retval .= "\r\n\t\t<th width=\"10%\">".$this->language['tableheaders']['t18']."</th>";
				$retval .= "\r\n\t\t<th align=\"left\" width=\"100%\">".$this->language['tableheaders']['t25']."</th>";
				$retval .= "\r\n\t\t</tr>";

				while ($row = mysql_fetch_array($rs)) 
				{
					$totalnmb += $row['count'];
					if ($row[1]>$totalmax) $totalmax = $row[1];
					$totalsearches++;
				}    		
				
				if ($totalnmb != 0)
				{
					mysql_data_seek($rs,0);	
					$this->resetVar(0);
					$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
					
					while ($row = mysql_fetch_array($rs)) 
					{
						$percent = round((($row[1]/$totalnmb)*100),1);
						$retval .= "\r\n\t<tr>\r\n";
						$retval .= "\t\t<td align=\"center\" nowrap>&nbsp;$row[1]</td>\r\n";
						$retval .= "\t\t<td align=\"center\" nowrap>&nbsp;".$percent."%&nbsp;";
						$retval .= $this->PercentBar($percent,$totalmaxpercent);
						$retval .= "</td>\r\n";
						$retval .= "\t\t<td align=\"left\"   nowrap>&nbsp;<a href=\"javascript:document.adminForm.dom.value='$row[0]';submitbutton('r14');\">$row[0]</a></td>\r\n\t</tr>\n";
						//$retval.="\t\t<td align=\"left\"   nowrap>&nbsp;<a href=\"index2.php?option=com_joomlastats&task=r14&dom=$row[0]&d=$this->d&m=$this->m&y=$this->y\">$row[0]</a></td>";
						$retval .= "\r\n\t</tr>\n";
					}		

					$this->resetVar(1);
				} // if $totalnmb !=0		
				
				// TotalLine		
				$retval .= "<tr><th>&nbsp;".$totalnmb."</th><th>&nbsp;</th>";
				if ($totalsearches>0)
				{	$retval .= "<th align='left'><a href=\"javascript:document.adminForm.dom.value='%';submitbutton('r14');\">All (".$totalsearches.") Search Engines</a></th><tr>";					
				} else {
					$retval .= "<th align='left'>No Search Engines</th><tr>";
				}
				
				$retval .= '</table><br>';
			}
			else
			{	// List of Search Keyphrases
				$retval .= "\r\n\t\t<th width=\"10%\" nowrap>".$this->language['tableheaders']['t28']."</th>";
				$retval .= "\r\n\t\t<th width=\"10%\">".$this->language['tableheaders']['t18']."</th>";
				$retval .= "\r\n\t\t<th align=\"left\" width=\"100%\">".$this->language['tableheaders']['t26']."</th>";
				$retval .= "\r\n\t</tr>";

				while ($row = mysql_fetch_array($rs)) 
				{
					$totalnmb += $row[1];
					if ($row[1]>$totalmax) $totalmax = $row[1];
					$totalsearches++;
				}    		
				
				if ($totalnmb !=0)
				{
					mysql_data_seek($rs,0);
					$totalmaxpercent = round((($totalmax/$totalnmb)*100),1);
	
					while ($row = mysql_fetch_array($rs)) 
					{
						$percent = round((($row[1]/$totalnmb)*100),1);
						$retval .= "<tr>";
						$retval .= "\t\t<td align=\"center\" nowrap>&nbsp;$row[1]</td>\r\n";
						$retval .= "\t\t<td align=\"center\" nowrap>&nbsp;".$percent."%&nbsp;";
						$retval .= $this->PercentBar($percent,$totalmaxpercent);
						$retval .= "</td>\r\n";
						$retval .= "<td width=\"100%\" align=\"left\" nowrap>".wordwrap($row[0],100,"<br>")."</td>";
						$retval .= "</tr>\n";
					} 		
				} // if $totalnmb !=0
				
				// TotalLine
				$retval .='<tr><th>&nbsp;'.$totalnmb.'</th>' .
						'<th>&nbsp;</th>' .
						'<th align="left">'.$totalsearches.' different search keyphrases</th><tr>';
				$retval .= '</table><br>';
				$retval .= '<center>[&nbsp;<a href="javascript:submitbutton(\'r14\');">Back</a>&nbsp;]</center>';				
			}			
			mysql_free_result($rs);
			
		//$retval .= '</table><br>';
		//$retval .= '<center>[&nbsp;<a href="javascript:history.back(1)">Back</a>&nbsp;]</center>';
			
			return $retval;
		} // getSearches()
		
		function GetConfiguration()
		{
			?>
				<table class="adminform" width="100%" border="0" cellspacing="5" cellpadding="0">
				  <tr> 
					<td nowrap>Online time </td>
					<td><select name="onlinetime">
					<?php
						echo $this->onlinetime != 10 ? '<option value="10">10</option>' : '<option selected value="10">10</option>';
						echo $this->onlinetime != 15 ? '<option value="15">15</option>' : '<option selected value="15">15</option>';
						echo $this->onlinetime != 20 ? '<option value="20">20</option>' : '<option selected value="20">20</option>';
						echo $this->onlinetime != 25 ? '<option value="25">25</option>' : '<option selected value="25">25</option>';
						echo $this->onlinetime != 30 ? '<option value="30">30</option>' : '<option selected value="30">30</option>';
					?>
					  </select></td>
					<td width="100%">Si le visiteur revient dans x minutes, il sera considéré comme le même visiteur. Dans le cas contraire celui-ci sera comptabilisé comme un nouveau visiteur.
					  </td>
				  </tr>
				  <tr> 
					<td nowrap>Options de Demarrage</td>
					<td><select name="startoption">
<?php
						echo $this->startoption != 'r01' ? '<option value="r01">Classement par Année</option>' : '<option selected value="r01">Afficher les Stats par Année</option>';
						echo $this->startoption != 'r02' ? '<option value="r02Classement par Mois</option>' : '<option selected value="r02">Afficher les Stats par Mois</option>';
						echo $this->startoption != 'r03' ? '<option value="r03">Visiteurs</option>' : '<option selected value="r03">Visiteurs</option>';
//						echo $this->startoption != 'r04' ? '<option value="r04">Bots</option>' : '<option selected value="r04">Bots</option>';
						echo $this->startoption != 'r05' ? '<option value="r05">Visteurs par Pays</option>' : '<option selected value="r05">Visteurs par Pays</option>';
						echo $this->startoption != 'r06' ? '<option value="r06">Hits Pages</option>' : '<option selected value="r06">Hits Pages</option>';
						echo $this->startoption != 'r07' ? '<option value="r07">Systèmes Exploitation</option>' : '<option selected value="r07">Systèmes Exploitation</option>';
						echo $this->startoption != 'r08' ? '<option value="r08">Navigateurs</option>' : '<option selected value="r08">Navigateurs</option>';
						echo $this->startoption != 'r09' ? '<option value="r09">Bots/Spiders</option>' : '<option selected value="r09">Bots/Spiders</option>';
						echo $this->startoption != 'r10' ? '<option value="r10">Liens Accès</option>' : '<option selected value="r10">Liens Accès</option>';
						echo $this->startoption != 'r14' ? '<option value="r14">Moteurs de Recherche</option>' : '<option selected value="r14">Moteurs de Recherche</option>';
						echo $this->startoption != 'r11' ? '<option value="r11">Visiteurs non identifiés</option>' : '<option selected value="r11">Visiteurs non identifiés</option>';
						echo $this->startoption != 'r12' ? '<option value="r12">Bots/Spiders inconnus</option>' : '<option selected value="r12">Bots/Spiders inconnus</option>';
					?>
					  </select></td>
					<td>Start option for JoomlaStats</td>
				  </tr>
				  <tr> 
					<td nowrap>Language</td>
					<td><select name="language">
					<?php
					$langdir = $this->absolute_path.'/administrator/components/com_joomlastats/language/';
					// Open a known directory, and proceed to read its contents
					if (is_dir($langdir))
					{
					   if ($dh = opendir($langdir))
					   {
						   while (($file = readdir($dh)) !== false)
						   {
						   		if(($file != '.') && ($file != '..'))
								{
									echo substr($file,0,2) != $this->langini ? '<option value="'.substr($file,0,2).'">'.substr($file,0,2).'</option>' : '<option selected value="'.substr($file,0,2).'">'.substr($file,0,2).'</option>';
								}
						   }
						   closedir($dh);
					   }
					}
					?>
					</select></td>
					<td>Languages Disponibles</td>
				  </tr>
				  <tr> 
					<td nowrap>Limite de Temps</td>
					<td><input type="text" name="timelimit" value="<?php echo $this->purgetime; ?>"></td>
					<td>Limite de Temps pour le processus d'archivage</td>
				  </tr>
				  <tr> 
					<td nowrap>Whois support</td>
					<td><input type="checkbox" name="enable_whois" <?php echo ($this->enable_whois ? 'checked="checked"' : ''); ?>></td>
					<td>Effectuer une requete Whois si un visiteur ne peut être identifié ou rattaché à un pays par la fonction nslookup</td>
				  </tr>
				  <tr> 
					<td nowrap>I18n support</td>
					<td><input type="checkbox" name="enable_i18n" <?php echo ($this->enable_i18n ? 'checked="checked"' : ''); ?>></td>
					<td>Considérer les traductions multiples d'une page comme même page ( traductions de Joom!Fish )</td>
				  </tr>
				  <tr> 
					<td></td>
					<td><input type="button" name="purge_database" value="Effacer les données" onclick="if (confirm('Voulez-vous vraiment effacer toutes les statistiques collectées?')) submitbutton('purgedb');"></td>
					<td>Effacer la base de données maintenant (effacer tous les statistiques)</td>
				  </tr>
				</table>
		<?php
		}

		function PurgeDatabase()
		{
			global $database;

			$sql = "DELETE FROM #__jstats_ipaddresses";
			$database->setQuery($sql);
			$database->query();

			$sql = "DELETE FROM #__jstats_iptocountry";
			$database->setQuery($sql);
			$database->query();

			$sql = "DELETE FROM #__jstats_keywords";
			$database->setQuery($sql);
			$database->query();

			$sql = "DELETE FROM #__jstats_page_request";
			$database->setQuery($sql);
			$database->query();

			$sql = "DELETE FROM #__jstats_page_request_c";
			$database->setQuery($sql);
			$database->query();		

			$sql = "DELETE FROM #__jstats_pages";
			$database->setQuery($sql);
			$database->query();

			$sql = "DELETE FROM #__jstats_referrer";
			$database->setQuery($sql);
			$database->query();

			$sql = "DELETE FROM #__jstats_visits";
			$database->setQuery($sql);
			$database->query();
		}

		function GetInformation()
		{
			?>
		<form name="adminForm" method="post" action="index2.php">
		<input type="hidden" name="option" value="com_joomlastats">
		<input type="hidden" name="task" value="<?PHP echo $this->task; ?>">
		<input type="hidden" name="act" value="" />
		<input type="hidden" name="boxchecked" value="0">
		</form>		
			
				<table cellspacing="0" cellpadding="4" border="0" width="100%">
					<tbody>
					  <tr> 
						<td valign="top" class="sectionname">
					<span class="sectionname"><img align="middle" height="67" width="70" src="../components/com_joomlastats/images/joomlastats.png">JoomlaStats information</span></td>
				  </tr>
				<tr>
				<td>
				<p>Merci d'utiliser le Composant JoomlaStats.<br>
				</p>				
        <p><br>
		<br>
          Nous souhaitons que vous apprécierez JoomlaStats. Nous vous souhaitons de nombreuses visites !<br>
          www.JoomlaStats.org <br>
          <br><b><u>IMPORTANT :</b></u> N'oubliez pas d'inclure le code suivant dans le ou les différents templates de votre site, afin que le composant fonctionne correctement :<br><br>
          		<pre>
&lt;?PHP
if(file_exists($mosConfig_absolute_path."/components/com_joomlastats/joomlastats.inc.php")) 
{
	require_once($mosConfig_absolute_path."/components/com_joomlastats/joomlastats.inc.php");
}
?&gt;
          		</pre>
          <br>
			  </td>
					</tr>
					<tr> 
						<td class="small" valign="top">&nbsp;&nbsp;Version : <?PHP echo _JoomlaStats_V; ?></td>
					</tr>
					  <tr> 
						<td class="smallgrey" valign="top"> <div align="center"> <span class="smalldark"> 
							JoomlaStats.org ©2003 - 2006 All rights reserved. <br>
							<a href="http://www.JoomlaStats.org">JoomlaStats</a> est un composant gratuit et libre d'utilisation 
							sous license GNU/GPL.  <br>
							</span></div></td>
					  </tr>
					</tbody>
				  </table>
  		<?php
		}

		function GetSummariseInfo()
		{
			?>
		<form name="adminForm" method="post" action="index2.php">
		<input type="hidden" name="option" value="com_joomlastats">
		<input type="hidden" name="task" value="<?PHP echo $this->task; ?>">
		<input type="hidden" name="act" value="" />
		<input type="hidden" name="boxchecked" value="0">
		</form>		
				<table cellspacing="0" cellpadding="4" border="0" width="100%">
					<tbody>
					  <tr> 
						<td valign="top" class="sectionname">
					<span class="sectionname"><img align="middle" height="67" width="70" src="../components/com_joomlastats/images/joomlastats.png">JoomlaStats Archivage</span></td>
				  </tr>
				<tr>
				
     <td> Le processus d'archivage groupera les statistiques des "vieux" visiteurs par
        <ul>
			<li>Page</li>
          	<li>Heure</li>
          	<li>Jour</li>
          	<li>Mois</li>
          	<li>Année</li>
        </ul>
		<p><strong>Ce processus affecte seulement la possibilité de voir qui a visité telle ou telle page.</strong></p>
        <p>Une fois ce processus lancé, vous ne pourrez plus avoir de détail sur les pages visitées. 
          (url dans la section visiteurs de JoomlaStats).<br>
          <br>
          Ce processus va optimiser la taille des tables de JoomlaStats et réduire leur taille. </p></td>
					</tr>
					<tr> 
						<td class="small" valign="top">&nbsp;&nbsp;Version : <?PHP echo _JoomlaStats_V; ?></td>
					  </tr>
					  <tr> 
						<td class="smallgrey" valign="top"> <div align="center"> <span class="smalldark"> 
							JoomlaStats.org ©2003 - 2006 All rights reserved. <br>
							<a href="http://www.JoomlaStats.org">JoomlaStats</a> est un composant gratuit et libre d'utilisation 
							sous license GNU/GPL. <br>
							</span></div></td>
					  </tr>
					</tbody>
				  </table>  		<?php
		}

		function GetUnInstallInfo()
		{
			?>
				<form name="adminForm" method="post" action="index2.php">
				<input type="hidden" name="option" value="com_joomlastats">
				<input type="hidden" name="task" value="<?PHP echo $this->task; ?>">
				<input type="hidden" name="act" value="" />
				<input type="hidden" name="boxchecked" value="0">
				</form>			
				<table cellspacing="0" cellpadding="4" border="0" width="100%">
					<tbody>
					  <tr> 
						<td valign="top" class="sectionname">
					<span class="sectionname"><img align="middle" height="67" width="70" src="../components/com_joomlastats/images/joomlastats.png">JoomlaStats uninstall information</span></td>
				  </tr>
				<tr>
				
      <td valign="top"> Si vous souhaitez complètement desinstaller le composant JoomlaStats  
        cliquez sur le bouton "Desinstaller" dans la barre d'outil.<br>
          toutes les tables JoomlaStats contenues dans Joomla seront définitivement supprimées.<br><br>
          Pensez ensuite à suivre la procédure habituelle de désinstallation classique des composants de Joomla dans la Rubrique Composants.
        <br><br><br>
          Si vous souhaitez effectuez une mise à jour de JoomlaStats, vous devez d'abord désinstaller complètement le composant JoomlaStats 
          avant de lancer la procédure d'installation du nouveau composant ( mise à jour ).
				</td>
					</tr>
					<tr> 
						<td class="small" valign="top">&nbsp;&nbsp;Version : <?PHP echo _JoomlaStats_V; ?></td>
					  </tr>
					  <tr> 
						<td class="smallgrey" valign="top"> <div align="center"> <span class="smalldark"> 
							JoomlaStats.org ©2003 - 2006 All rights reserved. <br>
							<a href="http://www.JoomlaStats.org">JoomlaStats</a> is Free 
							Software released under the GNU/GPL License. <br>
							</span></div></td>
					  </tr>
					</tbody>
				  </table>
  		<?php
		}

		function DoSummariseTask()
		{
			global $database;
			
			$start = time();	
			$sql = 'SELECT page_id,hour,day,month,year,count(*) as count from #__jstats_page_request group by page_id,hour,day,month,year';			
			$database->setQuery($sql);		
			$rs = mysql_query($database->_sql);
			
			// if php is not in safe mode than set max execution time
			if (!ini_get('safe_mode'))
			{
				set_time_limit($this->purgetime);
			}
			
			while ($row = mysql_fetch_array($rs)) 
			{
				$sql = "update #__jstats_page_request_c set count=count + ".$row['count']." where page_id=".$row['page_id']." and hour=".$row['hour']." and day=".$row['day']." and month=".$row['month']." and year=".$row['year'];
				$database->setQuery($sql);
				mysql_query($database->_sql);
				
				if (mysql_affected_rows() < 1)
				{
					$sql = "INSERT INTO #__jstats_page_request_c (page_id,hour,day,month,year,count) values (".$row['page_id'].",".$row['hour'].",".$row['day'].",".$row['month'].",".$row['year'].",".$row['count'].")";
					$database->setQuery($sql);
					mysql_query($database->_sql);
				}
			
				$sql = "DELETE FROM #__jstats_page_request where page_id=".$row['page_id']." and hour=".$row['hour']." and day=".$row['day']." and month=".$row['month']." and year=".$row['year'];
				$database->setQuery($sql);
				mysql_query($database->_sql);
	
				$end = time();
				
				if (($end - $start) > (($this->purgetime)-1))
				{
					$this->updatemsg = "Maximum execution time of ".$this->purgetime." seconds exceeded,<br>purge JoomlaStats again untill this message does not apear<br>";
				}				
			}
		
			$sql = "OPTIMIZE TABLE #__jstats_page_request";
			$database->setQuery($sql);
			mysql_query($database->_sql);
		
			if (($end - $start) < $this->purgetime)
			{
				$this->updatemsg = "Purge result OK";
			}
			
			mosRedirect( "index2.php?option=com_joomlastats&task=stats" );
					
		}

		function DoUnInstallTask()
		{
			global $database;

			$sql = "DROP TABLE `#__jstats_bots`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_browsers`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_configuration`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_ipaddresses`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_iptocountry`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_keywords`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_page_request`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_page_request_c`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_pages`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_referrer`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_search_engines`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_systems`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_topleveldomains`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
	
			$sql = "DROP TABLE `#__jstats_visits`";
			$database->setQuery($sql);
			mysql_query($database->_sql);
			
		}
		
		
		function JoomlaStatsHeader()
		{
			$this->resetVar(0);
			
			//debug info
			//echo "debug: [vid[".$this->vid."]]\n";
			//echo "[dom[".$this->dom."]]\n";			
			//echo "[d[".$this->d."]]\n";
			
			?>	
			<script LANGUAGE="JavaScript">
			<!-- Beginning of JavaScript
				function SelectDay(Value) 
				{	
					for (index=0; index<document.adminForm.d.length; index++)	<!-- walk the list -->
					{
						if (document.adminForm.d[index].value == Value)			<!-- if the day is the day we want to select -->
						{
							document.adminForm.d.selectedIndex = index;			<!-- then mark it selected -->
						}
					}
				}
				
				function UpdateD()
				{
					if (document.adminForm.cb_d.checked)
					{
						document.adminForm.d.disabled = true;						
					}
					else
					{
					 	document.adminForm.d.disabled = false;					 	
					}
				}
				
				function LastChecks()
				{
					if (document.adminForm.cb_d.checked && !document.adminForm.cb_d.disabled)
					{
						if (document.adminForm.d.options[document.adminForm.d.length-1] != 'total')
						{
							document.adminForm.d.options[document.adminForm.d.length] = new Option('-','total');														
						}
						document.adminForm.d.selectedIndex = document.adminForm.d.length-1;
						document.adminForm.d.disabled = false;					
					}
				}
			// End of JavaScript -->
			</script>
			
			
			<form name="adminForm" method="post" action="index2.php">
			
			<input type="hidden" name="option" value="com_joomlastats">
			<input type="hidden" name="task" value="<?PHP echo $this->task; ?>">
			<input type="hidden" name="act" value="" />
			<input type="hidden" name="vid" value="" />
			<input type="hidden" name="dom" value="" />
			<input type="hidden" name="boxchecked" value="0">
			<table border="0" align="center" cellspacing="0" width="100%">
			  <tr>
				<td>
					<table class="adminlist" border="0" cellspacing="0" width="100%">
					<!-- 1st row: Logo + date selection --> 
					<tr>	
						<td width="100%">
						<span class="sectionname"><img align="absbottom" height="67" width="70" src="../components/com_joomlastats/images/joomlastats.png">
						<big>&nbsp;JoomlaStats</big>
						<?php
							if	($this->task == 'getconf')	 echo ' configuration';
							else if ($this->task == 'purgedb')	 echo ' database cleaned!';
							else if ($this->task == 'uninstalltask') echo ' tables deleted!';
						?>
						</span>
						</td>
						<td>
						<?php
							if (($this->task != 'getconf') && ($this->task != 'purgedb') && ($this->task != 'uninstalltask') && ($this->task != 'tldlookup'))
							{
						 ?>
								<table border="0" cellspacing="0" cellpadding="0" width="300">
								  <tr> 
								  <td>
								  	<BR>Choisissez entre Mois/Année:
									</td>
									<td>		
										<select name="d">
											<?php
												//<!-- combo day here -->
												$this->CreateDayCmb();
											?>
										</select> 										
										<?php
										if ($this->d == 'total')	{
											echo "<INPUT TYPE='checkbox' NAME='cb_d' CHECKED DISABLED>";
										}	else	{
											echo "<INPUT TYPE='checkbox' NAME='cb_d' VALUE='total' onChange='UpdateD()'>";
										}
										?>																				
									</td>
									<td> <select name="m">
										<!-- combo month here -->
										<?php $this->CreateMonthCmb(); ?>
									  </select>
									  <?php
										if ($this->m != 'total') {
											echo "<INPUT TYPE='checkbox' NAME='m' VALUE='total'>";
										}	else	{
											echo "<INPUT TYPE='checkbox' DISABLED CHECKED>";
										}
										?>										
									</td>
									<td> <select name="y">
										<!-- combo year here -->
										<?php $this->CreateYearCmb(); ?>
									  </select> 
										<?php
										if ($this->y != 'total')
										{	// function to select all years is not yet implemented.
											echo "<INPUT TYPE='checkbox' NAME='y' VALUE='total' DISABLED>";
										}	else	{
											echo "<INPUT TYPE='checkbox' DISABLED CHECKED>";
										}
										?>										
									</td>
									<td> 
										<input type="submit" name="Submit" value="Go" onClick="LastChecks();">
										<!-- hidden value for display stats -->										
									  </td>
								  </tr>
								</table>
						<?php
							}
							else
							{
								echo '&nbsp;';
							}
						?>			
						</td>
					</tr>
			<?php
			if (($this->task != 'getconf') && ($this->task != 'purgedb') && ($this->task != 'uninstalltask') && ($this->task != 'tldlookup'))
			{
			?>

					<!-- 2nd row: info line --> 
					<tr class="row0"><td><font color="#000000">version:<b> 
				  <?php $this->getdbversion(); ?>
				  </b></font>&nbsp;||&nbsp;<font color="#000000">Taille:<b> 
				  <?php $this->getdbsize(); ?>
				  MB </b></font>&nbsp;||&nbsp;&copy; 2003 - 2006 JoomlaStats.org
				  </td>
				  <td nowrap align="right">
				  	<?php echo 'Version traduite par:: '.$this->language['translation']['by']; ?>
				  	&nbsp;&nbsp;</td>
				  </tr>
				  
				  <!-- 3rd row: menu --> 
					<tr><td colspan="2"><?php $this->menu(); ?></td></tr>        
				</table>
				<table class="adminlist" border="0" cellspacing="0" width="100%">
				  <tr> 
					<th> 
						
					  <!-- 4rd row: title of report here -->
					  <?php $this->DisplayTitle(); ?>
					</th>
				  </tr>
				</table>
			<?php
				$this->resetVar(1);
			}
			else
			{
				echo '</table>';
			}
		}
				
		function JoomlaStatsfooter()
		{
			?>
			  </td>
			  </tr>
			</table>
			</form>
		<?php
		}
		
		
		function listIpAddresses(&$rows, $pageNav, $search, $option) 
		{
		?>
		<form name="adminForm" method="post" action="index2.php">
		<input type="hidden" name="option" value="com_joomlastats">
		<input type="hidden" name="task" value="<?PHP echo $this->task; ?>">
		<input type="hidden" name="act" value="" />
		<input type="hidden" name="boxchecked" value="0">
		<table cellpadding="4" cellspacing="0" border="0" width="100%">
			<tr>
			<td width="100%" class="sectionname"><img src="../components/com_joomlastats/images/joomlastats.png" width="70" height="67" align="middle">Gestionnaire d'exclusion JoomlaStats</td> 
			<td nowrap="nowrap">Afficher #</td>
			<td> <?php echo $pageNav->writeLimitBox(); ?> </td>
			<td>Search:</td>
			<td><input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onChange="document.adminForm.submit();" />
			</td>
			</tr>
		</table>
		<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
			<tr>
			<th width="2%" class="title">#</td>
			<th width="3%" class="title"> <input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count($rows); ?>);" /> </th>
			<th width="20%" class="title">Adresse IP</th>
			<th width="40%" class="title">nslookup</th>
			<th width="15%" class="title">OS</th>
			<th width="15%" class="title">navigateur</th>
			<th width="5%" class="title">exclus</th>
			</tr>
			<?php
			$k = 0;
			for ($i=0, $n=count($rows); $i < $n; $i++)
			{	
				$row =& $rows[$i];
				$img = $row->exclude ? 'tick.png' : 'publish_x.png';
				$task = $row->exclude ? 'unexclude' : 'exclude';
				?>
			<tr class="<?php echo "row$k"; ?>">
			  <td><?php echo $i+1+$pageNav->limitstart;?></td>
			  <td><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->id; ?>" onClick="isChecked(this.checked);" /></td>
			  <td><?php echo $row->ip; ?></td>
			  <td><?php echo $row->nslookup; ?></td>
			  <td><?php echo $row->system; ?></td>
			  <td><?php echo $row->browser; ?></td>
			  <td width="10%"><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a></td>
			</tr>
				<?php
				$k = 1 - $k;
			}
			?>
			<tr>
			  <th align="center" colspan="9"> <?php echo $pageNav->writePagesLinks(); ?></th>
			</tr>
			<tr>
			  <td align="center" colspan="9"> <?php echo $pageNav->writePagesCounter(); ?></td>
			</tr>
		</table>
		</form>		
		<?php 
		}	
	}
?>
