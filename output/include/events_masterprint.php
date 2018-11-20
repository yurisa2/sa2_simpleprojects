<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_events($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "events";
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

	if( $detailtable == "events_stakeholders" )
	{
		$keysAssoc["event_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("event_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("event_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("event_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("events","event_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["event_id"]));
	
	$xt->assign("event_id_mastervalue", $viewControls->showDBValue("event_id", $data, $keylink));
	$format = $settings->getViewFormat("event_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_id_class", $class); // add class for field header as field value
	$xt->assign("event_subject_mastervalue", $viewControls->showDBValue("event_subject", $data, $keylink));
	$format = $settings->getViewFormat("event_subject");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_subject")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_subject_class", $class); // add class for field header as field value
	$xt->assign("event_body_mastervalue", $viewControls->showDBValue("event_body", $data, $keylink));
	$format = $settings->getViewFormat("event_body");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_body")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_body_class", $class); // add class for field header as field value
	$xt->assign("event_attachments_mastervalue", $viewControls->showDBValue("event_attachments", $data, $keylink));
	$format = $settings->getViewFormat("event_attachments");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_attachments")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_attachments_class", $class); // add class for field header as field value
	$xt->assign("event_add_date_mastervalue", $viewControls->showDBValue("event_add_date", $data, $keylink));
	$format = $settings->getViewFormat("event_add_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_add_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_add_date_class", $class); // add class for field header as field value
	$xt->assign("event_project_mastervalue", $viewControls->showDBValue("event_project", $data, $keylink));
	$format = $settings->getViewFormat("event_project");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_project")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_project_class", $class); // add class for field header as field value
	$xt->assign("event_task_mastervalue", $viewControls->showDBValue("event_task", $data, $keylink));
	$format = $settings->getViewFormat("event_task");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_task")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_task_class", $class); // add class for field header as field value
	$xt->assign("event_timestamp_mastervalue", $viewControls->showDBValue("event_timestamp", $data, $keylink));
	$format = $settings->getViewFormat("event_timestamp");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("event_timestamp")))
		$class = ' rnr-field-number';
		
	$xt->assign("event_timestamp_class", $class); // add class for field header as field value

	$layout = GetPageLayout("events", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("events", "masterprint"));
}

?>