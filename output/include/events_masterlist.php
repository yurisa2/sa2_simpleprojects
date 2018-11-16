<?php
function DisplayMasterTableInfo_events($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "events";
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

	if($detailtable == "events_stakeholders")
	{
		$keysAssoc["event_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("event_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("events","event_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
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
	$xt->assign("event_attachments_mastervalue", "<span class='rnr-field-file'>".$viewControls->showDBValue("event_attachments", $data, $keylink)."</span>");
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

	$layout = GetPageLayout("events", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("events", "masterlist"));
}

?>