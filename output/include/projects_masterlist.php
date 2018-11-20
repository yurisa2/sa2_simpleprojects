<?php
function DisplayMasterTableInfo_projects($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "projects";
	$xt->eventsObject = getEventObject($tName);
	
	include_once(getabspath('classes/listpage.php'));
	include_once(getabspath('classes/listpage_simple.php'));
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "projects_stakeholders")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("projects","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "tasks")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("projects","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "events")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("projects","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
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
	$xt->assign("project_attachments_mastervalue", "<span class='rnr-field-file'>".$viewControls->showDBValue("project_attachments", $data, $keylink)."</span>");
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
	$xt->assign("project_timestamp_mastervalue", $viewControls->showDBValue("project_timestamp", $data, $keylink));
	$format = $settings->getViewFormat("project_timestamp");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_timestamp")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_timestamp_class", $class); // add class for field header as field value

	$layout = GetPageLayout("projects", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("projects", "masterlist"));
}

?>