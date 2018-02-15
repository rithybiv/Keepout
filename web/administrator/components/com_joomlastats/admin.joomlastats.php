<?PHP

	/**
	* @version $Id: admin.joomlastats.php 150 2006-11-17 22:56:45Z enzo1982 $
	* @package JoomlaStats
	* @copyright Copyright (C) 2004-2006 PJH Diender. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/
	
	//ensure this file is being included by a parent file
	defined('_VALID_MOS') or die ('Direct Access to this location is not allowed.');

	require_once($mainframe->getPath('admin_html'));

	$task = trim( mosGetParam( $_REQUEST, 'task', 'stats' ) );
	$cid = mosGetParam( $_REQUEST, 'cid', array( 0 ) );
	
	if (!is_array( $cid )) 
	{
		$cid = array ( 0 );
	}

	// create JoomlaStats engine for reporting
	$JoomlaStatsEngine = new JoomlaStats_Engine($mainframe,$task);

	if ($task == 'stats')
	{
		$JoomlaStatsEngine->task = $JoomlaStatsEngine->startoption;
		$task = $JoomlaStatsEngine->startoption;
	}
		
	switch ($task)
	{
		case "r01":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->ysummary();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r02":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->msummary();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r03":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->VisitInformation();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r05":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getVisitorsByTld();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r06":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getPageHits();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r07":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getSystems();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r08":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getBrowsers();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r09":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getBots();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r09a":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->moreVisitInfo();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r10":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getReferrers();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r11":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getNotIdentified();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r12":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getUnknown();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r14":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->getSearches();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r03a":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->moreVisitInfo();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "r03b":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->morePathInfo();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;		
		case "summinfo":
			echo $JoomlaStatsEngine->GetSummariseInfo();
			break;
		case "summtask":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->DoSummariseTask();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "uninstall":
			echo $JoomlaStatsEngine->GetUnInstallInfo();
			break;
		case "uninstalltask":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->DoUnInstallTask();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "getconf":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->GetConfiguration();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "purgedb":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			$JoomlaStatsEngine->PurgeDatabase();
			echo $JoomlaStatsEngine->GetConfiguration();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "saveconf":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->SetConfiguration();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		case "info":
			echo $JoomlaStatsEngine->GetInformation();
			break;
		case "exclude":
			excludeIpAddress( $cid, 1, $option);
			break;
		case "unexclude":
			excludeIpAddress( $cid, 0, $option);
			break;
		case "viewip":
			showIpAddresses($option);
			break;
		case "tldlookup":
			$JoomlaStatsEngine->JoomlaStatsHeader();
			processTldLookUp($option);
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
		default:
			$JoomlaStatsEngine->JoomlaStatsHeader();
			echo $JoomlaStatsEngine->ysummary();
			$JoomlaStatsEngine->JoomlaStatsfooter();
			break;
	}	

	function showIpAddresses($option)
	{
		global $database, $mainframe, $my, $acl, $JoomlaStatsEngine;
	
		$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', 10 );
		$limitstart = $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 );
		$search = $mainframe->getUserStateFromRequest( "search{$option}", 'search', '' );
		$search = $database->getEscaped( trim( strtolower( $search ) ) );
	
		$where = array();
		if (isset( $search ) && $search!= "") {
			$where[] = "(ip LIKE '%$search%' OR nslookup LIKE '%$search%' OR browser LIKE '%$search%' OR system LIKE '%$search%')";
		}
	
		$database->setQuery( "SELECT COUNT(*) "
			. "FROM #__jstats_ipaddresses "
			. (count( $where ) ? "WHERE " . implode( ' AND ', $where ) : "")
		);
	
		$total = $database->loadResult();	
		echo $database->getErrorMsg();
	
		require_once("includes/pageNavigation.php");	
		$pageNav = new mosPageNav( $total, $limitstart, $limit  );
	
		$database->setQuery( "SELECT id, ip, nslookup, system, browser, exclude "
			."FROM #__jstats_ipaddresses "
			. (count( $where ) ? "\nWHERE " . implode( ' AND ', $where ) : "")
			. " ORDER BY exclude DESC, ip DESC"
			. " LIMIT $pageNav->limitstart, $pageNav->limit"
		);
	
		$rows = $database->loadObjectList();
		if ($database->getErrorNum())
		{
			echo $database->stderr();
			return false;
		}
	
		$JoomlaStatsEngine->listIpAddresses($rows, $pageNav, $search, $option);
	}
	
	function excludeIpAddress($cid=null, $block=1, $option)
	/*
	 *	$cid =		 
	 *  $block =	 0: unexclude	1: exclude 
	 *  $option =	 
	 */
	{
		global $database, $my;
	
		if (count($cid) < 1)
		{
			$action = $block ? 'exclude' : 'unexclude';
			echo "<script> alert('Select an item to $action'); window.history.go(-1);</script>\n";
			exit;
		}
	
		$cids = implode( ',', $cid );
	
		$database->setQuery( "UPDATE #__jstats_ipaddresses SET exclude='$block' "
			. " WHERE id IN ($cids)" );
		if (!$database->query())
		{
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
			exit();
		}
	
		mosRedirect( "index2.php?option=$option&task=viewip" );
	}	

	function processTldLookUp( $option ) {
		global $database, $my, $mainframe;
	
		$database->setQuery( "SELECT ip, id "
			."\nFROM #__jstats_ipaddresses "
			."\nWHERE ip=nslookup"
			." AND tld <> 'unknown'"
		);
	
		$rows = $database->loadObjectList();
		if ($database->getErrorNum()) {
			echo $database->stderr();
			return false;
		}

		if(count($rows) > 0) 
		{
			if(count($rows) > 25)
			{
				$n = 25;	
			}
			else
			{
				$n = count($rows);
			}
			
			echo "<div style=\"color: #FF0000;\">processing ". count($rows) . " to go...........</div><br><br>";
			echo "<script>redirect = true;</script>";
			for($i=0; $i < $n;$i++)
			{
				$row = &$rows[$i];
				$nslp = strtolower(@gethostbyaddr($row->ip));

				$arr = explode(".",$nslp);
				$tld = end($arr);

				if (!ereg('([a-zA-Z])',$tld))
				{
					$tld = "unknown";	
				}
	
				$database->setQuery( "UPDATE #__jstats_ipaddresses SET"
				. " tld=".$database->Quote($tld).", nslookup=".$database->Quote($nslp)
				. " WHERE id = " . $row->id
				);
				if (!$database->query()) {
					echo "<script> alert('".$database->getErrorMsg()."');</script>\n";
					exit();
				}
				echo "<div>$row->ip&nbsp;&nbsp;-->&nbsp;&nbsp;$tld&nbsp;&nbsp;-->&nbsp;&nbsp;$nslp</div>";
			}
			
			if($n != 25)
			{
				$database->setQuery( "UPDATE #__jstats_ipaddresses SET tld='' "
				. " WHERE tld = 'unknown'"
				);
				if (!$database->query()) {
					echo "<script> alert('".$database->getErrorMsg()."');</script>\n";
					exit();
				}
				echo "<script>redirect = false;</script>";
				echo "<script>alert('tldlookup finisched!');document.location.href='index2.php?option=com_joomlastats';</script>\n";
			}			
		}

		
		echo "<script>function urlredirect(redirect){if(redirect == true){document.location.href='index2.php?option=com_joomlastats&task=tldlookup';}}</script>\n";
		echo "<script>setTimeout('urlredirect(redirect)',2000);</script>\n";
				
	}	
?>