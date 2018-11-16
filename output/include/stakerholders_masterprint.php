<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_stakerholders($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "stakerholders";
	$xt->eventsObject = getEventObject($tName);

	$pageType = PAGE_PRINT;

	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = PRINT_MASTER;
	$mParams["pageType"] = $pageType;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, $pageType);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, $pageType, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "projects_stakeholders" )
	{
		$keysAssoc["stakeholder_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("stakeholder_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("stakeholder_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("stakeholder_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("stakerholders","stakeholder_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "tasks_stakeholders" )
	{
		$keysAssoc["stakeholder_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("stakeholder_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("stakeholder_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("stakeholder_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("stakerholders","stakeholder_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "events_stakeholders" )
	{
		$keysAssoc["stakeholder_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("stakeholder_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("stakeholder_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("stakeholder_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("stakerholders","stakeholder_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["stakeholder_id"]));
	
	$xt->assign("stakeholder_name_mastervalue", $viewControls->showDBValue("stakeholder_name", $data, $keylink));
	$format = $settings->getViewFormat("stakeholder_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("stakeholder_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("stakeholder_name_class", $class); // add class for field header as field value
	$xt->assign("stakeholder_email_mastervalue", $viewControls->showDBValue("stakeholder_email", $data, $keylink));
	$format = $settings->getViewFormat("stakeholder_email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("stakeholder_email")))
		$class = ' rnr-field-number';
		
	$xt->assign("stakeholder_email_class", $class); // add class for field header as field value
	$xt->assign("stakeholder_obs_mastervalue", $viewControls->showDBValue("stakeholder_obs", $data, $keylink));
	$format = $settings->getViewFormat("stakeholder_obs");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("stakeholder_obs")))
		$class = ' rnr-field-number';
		
	$xt->assign("stakeholder_obs_class", $class); // add class for field header as field value
	$xt->assign("stakeholder_attach_mastervalue", $viewControls->showDBValue("stakeholder_attach", $data, $keylink));
	$format = $settings->getViewFormat("stakeholder_attach");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("stakeholder_attach")))
		$class = ' rnr-field-number';
		
	$xt->assign("stakeholder_attach_class", $class); // add class for field header as field value

	$layout = GetPageLayout("stakerholders", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("stakerholders", "masterprint"));
}

?>