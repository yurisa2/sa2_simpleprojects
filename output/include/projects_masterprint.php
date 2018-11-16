<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_projects($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "projects";
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
		$keysAssoc["project_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("project_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("project_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("projects","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "tasks" )
	{
		$keysAssoc["project_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("project_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("project_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("projects","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "events" )
	{
		$keysAssoc["project_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("project_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("project_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("projects","project_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["project_id"]));
	
	$xt->assign("project_name_mastervalue", $viewControls->showDBValue("project_name", $data, $keylink));
	$format = $settings->getViewFormat("project_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_name_class", $class); // add class for field header as field value
	$xt->assign("project_owner_mastervalue", $viewControls->showDBValue("project_owner", $data, $keylink));
	$format = $settings->getViewFormat("project_owner");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_owner")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_owner_class", $class); // add class for field header as field value
	$xt->assign("project_obs_mastervalue", $viewControls->showDBValue("project_obs", $data, $keylink));
	$format = $settings->getViewFormat("project_obs");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_obs")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_obs_class", $class); // add class for field header as field value
	$xt->assign("project_start_date_mastervalue", $viewControls->showDBValue("project_start_date", $data, $keylink));
	$format = $settings->getViewFormat("project_start_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_start_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_start_date_class", $class); // add class for field header as field value
	$xt->assign("project_end_dat_mastervalue", $viewControls->showDBValue("project_end_dat", $data, $keylink));
	$format = $settings->getViewFormat("project_end_dat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_end_dat")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_end_dat_class", $class); // add class for field header as field value
	$xt->assign("project_attachments_mastervalue", $viewControls->showDBValue("project_attachments", $data, $keylink));
	$format = $settings->getViewFormat("project_attachments");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_attachments")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_attachments_class", $class); // add class for field header as field value

	$layout = GetPageLayout("projects", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("projects", "masterprint"));
}

?>