<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_tasks($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "tasks";
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

	if( $detailtable == "tasks_stakeholders" )
	{
		$keysAssoc["task_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("task_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("task_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("task_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("tasks","task_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["task_id"]));
	
	$xt->assign("task_subject_mastervalue", $viewControls->showDBValue("task_subject", $data, $keylink));
	$format = $settings->getViewFormat("task_subject");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_subject")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_subject_class", $class); // add class for field header as field value
	$xt->assign("task_body_mastervalue", $viewControls->showDBValue("task_body", $data, $keylink));
	$format = $settings->getViewFormat("task_body");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_body")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_body_class", $class); // add class for field header as field value
	$xt->assign("task_attachments_mastervalue", $viewControls->showDBValue("task_attachments", $data, $keylink));
	$format = $settings->getViewFormat("task_attachments");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_attachments")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_attachments_class", $class); // add class for field header as field value
	$xt->assign("task_start_date_mastervalue", $viewControls->showDBValue("task_start_date", $data, $keylink));
	$format = $settings->getViewFormat("task_start_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_start_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_start_date_class", $class); // add class for field header as field value
	$xt->assign("task_end_date_mastervalue", $viewControls->showDBValue("task_end_date", $data, $keylink));
	$format = $settings->getViewFormat("task_end_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_end_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_end_date_class", $class); // add class for field header as field value
	$xt->assign("task_modify_date_mastervalue", $viewControls->showDBValue("task_modify_date", $data, $keylink));
	$format = $settings->getViewFormat("task_modify_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_modify_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_modify_date_class", $class); // add class for field header as field value
	$xt->assign("task_project_mastervalue", $viewControls->showDBValue("task_project", $data, $keylink));
	$format = $settings->getViewFormat("task_project");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_project")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_project_class", $class); // add class for field header as field value
	$xt->assign("task_obs_mastervalue", $viewControls->showDBValue("task_obs", $data, $keylink));
	$format = $settings->getViewFormat("task_obs");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("task_obs")))
		$class = ' rnr-field-number';
		
	$xt->assign("task_obs_class", $class); // add class for field header as field value

	$layout = GetPageLayout("tasks", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("tasks", "masterprint"));
}

?>