<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/tasks_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "yeti";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["tasks_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "projects")
{
	$where = "";
		$formattedValue = make_db_value("task_project",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("task_project") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("task_project") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["task_id"]));
	
	
	//	task_subject - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_subject", $data, $keylink);
			$row["task_subject_value"] = $value;
			$format = $pSet->getViewFormat("task_subject");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_subject")))
				$class = ' rnr-field-number';
			$row["task_subject_class"] = $class;
	//	task_body - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_body", $data, $keylink);
			$row["task_body_value"] = $value;
			$format = $pSet->getViewFormat("task_body");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_body")))
				$class = ' rnr-field-number';
			$row["task_body_class"] = $class;
	//	task_attachments - Document Download
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_attachments", $data, $keylink);
			$row["task_attachments_value"] = $value;
			$format = $pSet->getViewFormat("task_attachments");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_attachments")))
				$class = ' rnr-field-number';
			$row["task_attachments_class"] = $class;
	//	task_start_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_start_date", $data, $keylink);
			$row["task_start_date_value"] = $value;
			$format = $pSet->getViewFormat("task_start_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_start_date")))
				$class = ' rnr-field-number';
			$row["task_start_date_class"] = $class;
	//	task_end_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_end_date", $data, $keylink);
			$row["task_end_date_value"] = $value;
			$format = $pSet->getViewFormat("task_end_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_end_date")))
				$class = ' rnr-field-number';
			$row["task_end_date_class"] = $class;
	//	task_modify_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_modify_date", $data, $keylink);
			$row["task_modify_date_value"] = $value;
			$format = $pSet->getViewFormat("task_modify_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_modify_date")))
				$class = ' rnr-field-number';
			$row["task_modify_date_class"] = $class;
	//	task_project - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_project", $data, $keylink);
			$row["task_project_value"] = $value;
			$format = $pSet->getViewFormat("task_project");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_project")))
				$class = ' rnr-field-number';
			$row["task_project_class"] = $class;
	//	task_obs - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_obs", $data, $keylink);
			$row["task_obs_value"] = $value;
			$format = $pSet->getViewFormat("task_obs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_obs")))
				$class = ' rnr-field-number';
			$row["task_obs_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("tasks", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>