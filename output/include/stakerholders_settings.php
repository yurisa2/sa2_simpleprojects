<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastakerholders = array();
	$tdatastakerholders[".truncateText"] = true;
	$tdatastakerholders[".NumberOfChars"] = 80;
	$tdatastakerholders[".ShortName"] = "stakerholders";
	$tdatastakerholders[".OwnerID"] = "";
	$tdatastakerholders[".OriginalTable"] = "stakerholders";

//	field labels
$fieldLabelsstakerholders = array();
$fieldToolTipsstakerholders = array();
$pageTitlesstakerholders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstakerholders["English"] = array();
	$fieldToolTipsstakerholders["English"] = array();
	$pageTitlesstakerholders["English"] = array();
	$fieldLabelsstakerholders["English"]["stakeholder_id"] = "Stakeholder";
	$fieldToolTipsstakerholders["English"]["stakeholder_id"] = "";
	$fieldLabelsstakerholders["English"]["stakeholder_name"] = "Name";
	$fieldToolTipsstakerholders["English"]["stakeholder_name"] = "";
	$fieldLabelsstakerholders["English"]["stakeholder_email"] = "Email";
	$fieldToolTipsstakerholders["English"]["stakeholder_email"] = "";
	$fieldLabelsstakerholders["English"]["stakeholder_obs"] = "Obs";
	$fieldToolTipsstakerholders["English"]["stakeholder_obs"] = "";
	$fieldLabelsstakerholders["English"]["stakeholder_attach"] = "Attachments";
	$fieldToolTipsstakerholders["English"]["stakeholder_attach"] = "";
	if (count($fieldToolTipsstakerholders["English"]))
		$tdatastakerholders[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstakerholders[""] = array();
	$fieldToolTipsstakerholders[""] = array();
	$pageTitlesstakerholders[""] = array();
	if (count($fieldToolTipsstakerholders[""]))
		$tdatastakerholders[".isUseToolTips"] = true;
}


	$tdatastakerholders[".NCSearch"] = true;



$tdatastakerholders[".shortTableName"] = "stakerholders";
$tdatastakerholders[".nSecOptions"] = 0;
$tdatastakerholders[".recsPerRowList"] = 1;
$tdatastakerholders[".recsPerRowPrint"] = 1;
$tdatastakerholders[".mainTableOwnerID"] = "";
$tdatastakerholders[".moveNext"] = 1;
$tdatastakerholders[".entityType"] = 0;

$tdatastakerholders[".strOriginalTableName"] = "stakerholders";





$tdatastakerholders[".showAddInPopup"] = false;

$tdatastakerholders[".showEditInPopup"] = false;

$tdatastakerholders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastakerholders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastakerholders[".fieldsForRegister"] = array();

$tdatastakerholders[".listAjax"] = false;

	$tdatastakerholders[".audit"] = true;

	$tdatastakerholders[".locking"] = false;

$tdatastakerholders[".edit"] = true;
$tdatastakerholders[".afterEditAction"] = 1;
$tdatastakerholders[".closePopupAfterEdit"] = 1;
$tdatastakerholders[".afterEditActionDetTable"] = "";

$tdatastakerholders[".add"] = true;
$tdatastakerholders[".afterAddAction"] = 1;
$tdatastakerholders[".closePopupAfterAdd"] = 1;
$tdatastakerholders[".afterAddActionDetTable"] = "";

$tdatastakerholders[".list"] = true;

$tdatastakerholders[".view"] = true;

$tdatastakerholders[".import"] = true;

$tdatastakerholders[".exportTo"] = true;

$tdatastakerholders[".printFriendly"] = true;

$tdatastakerholders[".delete"] = true;

$tdatastakerholders[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatastakerholders[".searchSaving"] = false;
//

$tdatastakerholders[".showSearchPanel"] = true;
		$tdatastakerholders[".flexibleSearch"] = true;

if (isMobile())
	$tdatastakerholders[".isUseAjaxSuggest"] = false;
else
	$tdatastakerholders[".isUseAjaxSuggest"] = true;

$tdatastakerholders[".rowHighlite"] = true;



$tdatastakerholders[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastakerholders[".isUseTimeForSearch"] = false;



$tdatastakerholders[".badgeColor"] = "4169E1";


$tdatastakerholders[".allSearchFields"] = array();
$tdatastakerholders[".filterFields"] = array();
$tdatastakerholders[".requiredSearchFields"] = array();

$tdatastakerholders[".allSearchFields"][] = "stakeholder_name";
	$tdatastakerholders[".allSearchFields"][] = "stakeholder_email";
	$tdatastakerholders[".allSearchFields"][] = "stakeholder_obs";
	$tdatastakerholders[".allSearchFields"][] = "stakeholder_attach";
	

$tdatastakerholders[".googleLikeFields"] = array();
$tdatastakerholders[".googleLikeFields"][] = "stakeholder_id";
$tdatastakerholders[".googleLikeFields"][] = "stakeholder_name";
$tdatastakerholders[".googleLikeFields"][] = "stakeholder_email";
$tdatastakerholders[".googleLikeFields"][] = "stakeholder_obs";
$tdatastakerholders[".googleLikeFields"][] = "stakeholder_attach";


$tdatastakerholders[".advSearchFields"] = array();
$tdatastakerholders[".advSearchFields"][] = "stakeholder_id";
$tdatastakerholders[".advSearchFields"][] = "stakeholder_name";
$tdatastakerholders[".advSearchFields"][] = "stakeholder_email";
$tdatastakerholders[".advSearchFields"][] = "stakeholder_obs";
$tdatastakerholders[".advSearchFields"][] = "stakeholder_attach";

$tdatastakerholders[".tableType"] = "list";

$tdatastakerholders[".printerPageOrientation"] = 0;
$tdatastakerholders[".nPrinterPageScale"] = 100;

$tdatastakerholders[".nPrinterSplitRecords"] = 40;

$tdatastakerholders[".nPrinterPDFSplitRecords"] = 40;



$tdatastakerholders[".geocodingEnabled"] = false;





$tdatastakerholders[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastakerholders[".pageSize"] = 20;

$tdatastakerholders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastakerholders[".strOrderBy"] = $tstrOrderBy;

$tdatastakerholders[".orderindexes"] = array();

$tdatastakerholders[".sqlHead"] = "SELECT stakeholder_id,  	stakeholder_name,  	stakeholder_email,  	stakeholder_obs,  	stakeholder_attach";
$tdatastakerholders[".sqlFrom"] = "FROM stakerholders";
$tdatastakerholders[".sqlWhereExpr"] = "";
$tdatastakerholders[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastakerholders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastakerholders[".arrGroupsPerPage"] = $arrGPP;

$tdatastakerholders[".highlightSearchResults"] = true;

$tableKeysstakerholders = array();
$tableKeysstakerholders[] = "stakeholder_id";
$tdatastakerholders[".Keys"] = $tableKeysstakerholders;

$tdatastakerholders[".listFields"] = array();
$tdatastakerholders[".listFields"][] = "stakeholder_name";
$tdatastakerholders[".listFields"][] = "stakeholder_email";
$tdatastakerholders[".listFields"][] = "stakeholder_obs";
$tdatastakerholders[".listFields"][] = "stakeholder_attach";

$tdatastakerholders[".hideMobileList"] = array();


$tdatastakerholders[".viewFields"] = array();
$tdatastakerholders[".viewFields"][] = "stakeholder_name";
$tdatastakerholders[".viewFields"][] = "stakeholder_email";
$tdatastakerholders[".viewFields"][] = "stakeholder_obs";
$tdatastakerholders[".viewFields"][] = "stakeholder_attach";

$tdatastakerholders[".addFields"] = array();
$tdatastakerholders[".addFields"][] = "stakeholder_name";
$tdatastakerholders[".addFields"][] = "stakeholder_email";
$tdatastakerholders[".addFields"][] = "stakeholder_obs";
$tdatastakerholders[".addFields"][] = "stakeholder_attach";

$tdatastakerholders[".masterListFields"] = array();
$tdatastakerholders[".masterListFields"][] = "stakeholder_name";
$tdatastakerholders[".masterListFields"][] = "stakeholder_email";
$tdatastakerholders[".masterListFields"][] = "stakeholder_obs";
$tdatastakerholders[".masterListFields"][] = "stakeholder_attach";

$tdatastakerholders[".inlineAddFields"] = array();

$tdatastakerholders[".editFields"] = array();
$tdatastakerholders[".editFields"][] = "stakeholder_name";
$tdatastakerholders[".editFields"][] = "stakeholder_email";
$tdatastakerholders[".editFields"][] = "stakeholder_obs";
$tdatastakerholders[".editFields"][] = "stakeholder_attach";

$tdatastakerholders[".inlineEditFields"] = array();

$tdatastakerholders[".exportFields"] = array();
$tdatastakerholders[".exportFields"][] = "stakeholder_name";
$tdatastakerholders[".exportFields"][] = "stakeholder_email";
$tdatastakerholders[".exportFields"][] = "stakeholder_obs";
$tdatastakerholders[".exportFields"][] = "stakeholder_attach";

$tdatastakerholders[".importFields"] = array();
$tdatastakerholders[".importFields"][] = "stakeholder_name";
$tdatastakerholders[".importFields"][] = "stakeholder_email";
$tdatastakerholders[".importFields"][] = "stakeholder_obs";
$tdatastakerholders[".importFields"][] = "stakeholder_attach";

$tdatastakerholders[".printFields"] = array();
$tdatastakerholders[".printFields"][] = "stakeholder_name";
$tdatastakerholders[".printFields"][] = "stakeholder_email";
$tdatastakerholders[".printFields"][] = "stakeholder_obs";
$tdatastakerholders[".printFields"][] = "stakeholder_attach";

//	stakeholder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stakeholder_id";
	$fdata["GoodName"] = "stakeholder_id";
	$fdata["ownerTable"] = "stakerholders";
	$fdata["Label"] = GetFieldLabel("stakerholders","stakeholder_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "stakeholder_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stakeholder_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastakerholders["stakeholder_id"] = $fdata;
//	stakeholder_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stakeholder_name";
	$fdata["GoodName"] = "stakeholder_name";
	$fdata["ownerTable"] = "stakerholders";
	$fdata["Label"] = GetFieldLabel("stakerholders","stakeholder_name");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stakeholder_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stakeholder_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatastakerholders["stakeholder_name"] = $fdata;
//	stakeholder_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stakeholder_email";
	$fdata["GoodName"] = "stakeholder_email";
	$fdata["ownerTable"] = "stakerholders";
	$fdata["Label"] = GetFieldLabel("stakerholders","stakeholder_email");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stakeholder_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stakeholder_email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatastakerholders["stakeholder_email"] = $fdata;
//	stakeholder_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stakeholder_obs";
	$fdata["GoodName"] = "stakeholder_obs";
	$fdata["ownerTable"] = "stakerholders";
	$fdata["Label"] = GetFieldLabel("stakerholders","stakeholder_obs");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stakeholder_obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stakeholder_obs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatastakerholders["stakeholder_obs"] = $fdata;
//	stakeholder_attach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stakeholder_attach";
	$fdata["GoodName"] = "stakeholder_attach";
	$fdata["ownerTable"] = "stakerholders";
	$fdata["Label"] = GetFieldLabel("stakerholders","stakeholder_attach");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stakeholder_attach";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stakeholder_attach";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatastakerholders["stakeholder_attach"] = $fdata;


$tables_data["stakerholders"]=&$tdatastakerholders;
$field_labels["stakerholders"] = &$fieldLabelsstakerholders;
$fieldToolTips["stakerholders"] = &$fieldToolTipsstakerholders;
$page_titles["stakerholders"] = &$pageTitlesstakerholders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["stakerholders"] = array();
//	projects_stakeholders
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="projects_stakeholders";
		$detailsParam["dOriginalTable"] = "projects_stakeholders";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "projects_stakeholders";
	$detailsParam["dCaptionTable"] = GetTableCaption("projects_stakeholders");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["stakerholders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["stakerholders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["stakerholders"][$dIndex]["masterKeys"][]="stakeholder_id";

				$detailsTablesData["stakerholders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["stakerholders"][$dIndex]["detailKeys"][]="stakeholder_id";
//	tasks_stakeholders
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tasks_stakeholders";
		$detailsParam["dOriginalTable"] = "tasks_stakeholders";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tasks_stakeholders";
	$detailsParam["dCaptionTable"] = GetTableCaption("tasks_stakeholders");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["stakerholders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["stakerholders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["stakerholders"][$dIndex]["masterKeys"][]="stakeholder_id";

				$detailsTablesData["stakerholders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["stakerholders"][$dIndex]["detailKeys"][]="stakeholder_id";
//	events_stakeholders
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="events_stakeholders";
		$detailsParam["dOriginalTable"] = "events_stakeholders";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "events_stakeholders";
	$detailsParam["dCaptionTable"] = GetTableCaption("events_stakeholders");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["stakerholders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["stakerholders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["stakerholders"][$dIndex]["masterKeys"][]="stakeholder_id";

				$detailsTablesData["stakerholders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["stakerholders"][$dIndex]["detailKeys"][]="stakeholder_id";

// tables which are master tables for current table (detail)
$masterTablesData["stakerholders"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_stakerholders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stakeholder_id,  	stakeholder_name,  	stakeholder_email,  	stakeholder_obs,  	stakeholder_attach";
$proto0["m_strFrom"] = "FROM stakerholders";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_id",
	"m_strTable" => "stakerholders",
	"m_srcTableName" => "stakerholders"
));

$proto6["m_sql"] = "stakeholder_id";
$proto6["m_srcTableName"] = "stakerholders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_name",
	"m_strTable" => "stakerholders",
	"m_srcTableName" => "stakerholders"
));

$proto8["m_sql"] = "stakeholder_name";
$proto8["m_srcTableName"] = "stakerholders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_email",
	"m_strTable" => "stakerholders",
	"m_srcTableName" => "stakerholders"
));

$proto10["m_sql"] = "stakeholder_email";
$proto10["m_srcTableName"] = "stakerholders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_obs",
	"m_strTable" => "stakerholders",
	"m_srcTableName" => "stakerholders"
));

$proto12["m_sql"] = "stakeholder_obs";
$proto12["m_srcTableName"] = "stakerholders";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_attach",
	"m_strTable" => "stakerholders",
	"m_srcTableName" => "stakerholders"
));

$proto14["m_sql"] = "stakeholder_attach";
$proto14["m_srcTableName"] = "stakerholders";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "stakerholders";
$proto17["m_srcTableName"] = "stakerholders";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "stakeholder_id";
$proto17["m_columns"][] = "stakeholder_name";
$proto17["m_columns"][] = "stakeholder_email";
$proto17["m_columns"][] = "stakeholder_obs";
$proto17["m_columns"][] = "stakeholder_attach";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "stakerholders";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "stakerholders";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="stakerholders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_stakerholders = createSqlQuery_stakerholders();


	
		;

					

$tdatastakerholders[".sqlquery"] = $queryData_stakerholders;

$tableEvents["stakerholders"] = new eventsBase;
$tdatastakerholders[".hasEvents"] = false;

?>