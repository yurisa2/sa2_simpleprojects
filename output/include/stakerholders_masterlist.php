<?php
function DisplayMasterTableInfo_stakerholders($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "stakerholders";
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
		$keysAssoc["stakeholder_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("stakeholder_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("stakerholders","stakeholder_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "tasks_stakeholders")
	{
		$keysAssoc["stakeholder_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("stakeholder_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("stakerholders","stakeholder_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "events_stakeholders")
	{
		$keysAssoc["stakeholder_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("stakeholder_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("stakerholders","stakeholder_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
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
	$xt->assign("stakeholder_attach_mastervalue", "<span class='rnr-field-file'>".$viewControls->showDBValue("stakeholder_attach", $data, $keylink)."</span>");
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

	$layout = GetPageLayout("stakerholders", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("stakerholders", "masterlist"));
}

?>