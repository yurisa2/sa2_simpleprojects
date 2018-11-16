<?php
function DisplayMasterTableInfo_tasks($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "tasks";
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

	if($detailtable == "tasks_stakeholders")
	{
		$keysAssoc["task_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("task_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("tasks","task_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
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
	$xt->assign("task_attachments_mastervalue", "<span class='rnr-field-file'>".$viewControls->showDBValue("task_attachments", $data, $keylink)."</span>");
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

	$layout = GetPageLayout("tasks", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("tasks", "masterlist"));
}

?>