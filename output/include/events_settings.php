<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevents = array();
	$tdataevents[".truncateText"] = true;
	$tdataevents[".NumberOfChars"] = 80;
	$tdataevents[".ShortName"] = "events";
	$tdataevents[".OwnerID"] = "";
	$tdataevents[".OriginalTable"] = "events";

//	field labels
$fieldLabelsevents = array();
$fieldToolTipsevents = array();
$pageTitlesevents = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevents["English"] = array();
	$fieldToolTipsevents["English"] = array();
	$pageTitlesevents["English"] = array();
	$fieldLabelsevents["English"]["event_id"] = "Event Id";
	$fieldToolTipsevents["English"]["event_id"] = "";
	$fieldLabelsevents["English"]["event_subject"] = "Event Subject";
	$fieldToolTipsevents["English"]["event_subject"] = "";
	$fieldLabelsevents["English"]["event_body"] = "Event Body";
	$fieldToolTipsevents["English"]["event_body"] = "";
	$fieldLabelsevents["English"]["event_attachments"] = "Event Attachments";
	$fieldToolTipsevents["English"]["event_attachments"] = "";
	$fieldLabelsevents["English"]["event_add_date"] = "Event Add Date";
	$fieldToolTipsevents["English"]["event_add_date"] = "";
	$fieldLabelsevents["English"]["event_project"] = "Event Project";
	$fieldToolTipsevents["English"]["event_project"] = "";
	$fieldLabelsevents["English"]["event_task"] = "Event Task";
	$fieldToolTipsevents["English"]["event_task"] = "";
	$fieldLabelsevents["English"]["event_timestamp"] = "Event Timestamp";
	$fieldToolTipsevents["English"]["event_timestamp"] = "";
	if (count($fieldToolTipsevents["English"]))
		$tdataevents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevents[""] = array();
	$fieldToolTipsevents[""] = array();
	$pageTitlesevents[""] = array();
	$fieldLabelsevents[""]["event_task"] = "Event Task";
	$fieldToolTipsevents[""]["event_task"] = "";
	$fieldLabelsevents[""]["event_timestamp"] = "Event Timestamp";
	$fieldToolTipsevents[""]["event_timestamp"] = "";
	if (count($fieldToolTipsevents[""]))
		$tdataevents[".isUseToolTips"] = true;
}


	$tdataevents[".NCSearch"] = true;



$tdataevents[".shortTableName"] = "events";
$tdataevents[".nSecOptions"] = 0;
$tdataevents[".recsPerRowList"] = 1;
$tdataevents[".recsPerRowPrint"] = 1;
$tdataevents[".mainTableOwnerID"] = "";
$tdataevents[".moveNext"] = 1;
$tdataevents[".entityType"] = 0;

$tdataevents[".strOriginalTableName"] = "events";





$tdataevents[".showAddInPopup"] = false;

$tdataevents[".showEditInPopup"] = false;

$tdataevents[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevents[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevents[".fieldsForRegister"] = array();

$tdataevents[".listAjax"] = false;

	$tdataevents[".audit"] = true;

	$tdataevents[".locking"] = false;

$tdataevents[".edit"] = true;
$tdataevents[".afterEditAction"] = 1;
$tdataevents[".closePopupAfterEdit"] = 1;
$tdataevents[".afterEditActionDetTable"] = "";

$tdataevents[".add"] = true;
$tdataevents[".afterAddAction"] = 1;
$tdataevents[".closePopupAfterAdd"] = 1;
$tdataevents[".afterAddActionDetTable"] = "";

$tdataevents[".list"] = true;

$tdataevents[".view"] = true;

$tdataevents[".import"] = true;

$tdataevents[".exportTo"] = true;

$tdataevents[".printFriendly"] = true;

$tdataevents[".delete"] = true;

$tdataevents[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataevents[".searchSaving"] = false;
//

$tdataevents[".showSearchPanel"] = true;
		$tdataevents[".flexibleSearch"] = true;

if (isMobile())
	$tdataevents[".isUseAjaxSuggest"] = false;
else
	$tdataevents[".isUseAjaxSuggest"] = true;

$tdataevents[".rowHighlite"] = true;



$tdataevents[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevents[".isUseTimeForSearch"] = false;



$tdataevents[".badgeColor"] = "DAA520";


$tdataevents[".allSearchFields"] = array();
$tdataevents[".filterFields"] = array();
$tdataevents[".requiredSearchFields"] = array();

$tdataevents[".allSearchFields"][] = "event_task";
	$tdataevents[".allSearchFields"][] = "event_timestamp";
	$tdataevents[".allSearchFields"][] = "event_project";
	$tdataevents[".allSearchFields"][] = "event_add_date";
	$tdataevents[".allSearchFields"][] = "event_subject";
	$tdataevents[".allSearchFields"][] = "event_body";
	$tdataevents[".allSearchFields"][] = "event_attachments";
	

$tdataevents[".googleLikeFields"] = array();
$tdataevents[".googleLikeFields"][] = "event_id";
$tdataevents[".googleLikeFields"][] = "event_subject";
$tdataevents[".googleLikeFields"][] = "event_body";
$tdataevents[".googleLikeFields"][] = "event_attachments";
$tdataevents[".googleLikeFields"][] = "event_add_date";
$tdataevents[".googleLikeFields"][] = "event_project";
$tdataevents[".googleLikeFields"][] = "event_task";
$tdataevents[".googleLikeFields"][] = "event_timestamp";


$tdataevents[".advSearchFields"] = array();
$tdataevents[".advSearchFields"][] = "event_task";
$tdataevents[".advSearchFields"][] = "event_timestamp";
$tdataevents[".advSearchFields"][] = "event_project";
$tdataevents[".advSearchFields"][] = "event_id";
$tdataevents[".advSearchFields"][] = "event_add_date";
$tdataevents[".advSearchFields"][] = "event_subject";
$tdataevents[".advSearchFields"][] = "event_body";
$tdataevents[".advSearchFields"][] = "event_attachments";

$tdataevents[".tableType"] = "list";

$tdataevents[".printerPageOrientation"] = 0;
$tdataevents[".nPrinterPageScale"] = 100;

$tdataevents[".nPrinterSplitRecords"] = 40;

$tdataevents[".nPrinterPDFSplitRecords"] = 40;



$tdataevents[".geocodingEnabled"] = false;





$tdataevents[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevents[".pageSize"] = 20;

$tdataevents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevents[".strOrderBy"] = $tstrOrderBy;

$tdataevents[".orderindexes"] = array();

$tdataevents[".sqlHead"] = "SELECT event_id,  	event_subject,  	event_body,  	event_attachments,  	event_add_date,  	event_project,  	event_task,  	event_timestamp";
$tdataevents[".sqlFrom"] = "FROM events";
$tdataevents[".sqlWhereExpr"] = "";
$tdataevents[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevents[".arrGroupsPerPage"] = $arrGPP;

$tdataevents[".highlightSearchResults"] = true;

$tableKeysevents = array();
$tableKeysevents[] = "event_id";
$tdataevents[".Keys"] = $tableKeysevents;

$tdataevents[".listFields"] = array();
$tdataevents[".listFields"][] = "event_task";
$tdataevents[".listFields"][] = "event_timestamp";
$tdataevents[".listFields"][] = "event_project";
$tdataevents[".listFields"][] = "event_add_date";
$tdataevents[".listFields"][] = "event_subject";
$tdataevents[".listFields"][] = "event_body";
$tdataevents[".listFields"][] = "event_attachments";

$tdataevents[".hideMobileList"] = array();


$tdataevents[".viewFields"] = array();
$tdataevents[".viewFields"][] = "event_task";
$tdataevents[".viewFields"][] = "event_timestamp";
$tdataevents[".viewFields"][] = "event_project";
$tdataevents[".viewFields"][] = "event_add_date";
$tdataevents[".viewFields"][] = "event_subject";
$tdataevents[".viewFields"][] = "event_body";
$tdataevents[".viewFields"][] = "event_attachments";

$tdataevents[".addFields"] = array();
$tdataevents[".addFields"][] = "event_task";
$tdataevents[".addFields"][] = "event_timestamp";
$tdataevents[".addFields"][] = "event_project";
$tdataevents[".addFields"][] = "event_add_date";
$tdataevents[".addFields"][] = "event_subject";
$tdataevents[".addFields"][] = "event_body";
$tdataevents[".addFields"][] = "event_attachments";

$tdataevents[".masterListFields"] = array();
$tdataevents[".masterListFields"][] = "event_task";
$tdataevents[".masterListFields"][] = "event_timestamp";
$tdataevents[".masterListFields"][] = "event_project";
$tdataevents[".masterListFields"][] = "event_id";
$tdataevents[".masterListFields"][] = "event_add_date";
$tdataevents[".masterListFields"][] = "event_subject";
$tdataevents[".masterListFields"][] = "event_body";
$tdataevents[".masterListFields"][] = "event_attachments";

$tdataevents[".inlineAddFields"] = array();
$tdataevents[".inlineAddFields"][] = "event_timestamp";

$tdataevents[".editFields"] = array();
$tdataevents[".editFields"][] = "event_task";
$tdataevents[".editFields"][] = "event_timestamp";
$tdataevents[".editFields"][] = "event_project";
$tdataevents[".editFields"][] = "event_add_date";
$tdataevents[".editFields"][] = "event_subject";
$tdataevents[".editFields"][] = "event_body";
$tdataevents[".editFields"][] = "event_attachments";

$tdataevents[".inlineEditFields"] = array();
$tdataevents[".inlineEditFields"][] = "event_timestamp";

$tdataevents[".exportFields"] = array();
$tdataevents[".exportFields"][] = "event_task";
$tdataevents[".exportFields"][] = "event_timestamp";
$tdataevents[".exportFields"][] = "event_project";
$tdataevents[".exportFields"][] = "event_add_date";
$tdataevents[".exportFields"][] = "event_subject";
$tdataevents[".exportFields"][] = "event_body";
$tdataevents[".exportFields"][] = "event_attachments";

$tdataevents[".importFields"] = array();
$tdataevents[".importFields"][] = "event_subject";
$tdataevents[".importFields"][] = "event_body";
$tdataevents[".importFields"][] = "event_attachments";
$tdataevents[".importFields"][] = "event_add_date";
$tdataevents[".importFields"][] = "event_project";
$tdataevents[".importFields"][] = "event_task";
$tdataevents[".importFields"][] = "event_timestamp";

$tdataevents[".printFields"] = array();
$tdataevents[".printFields"][] = "event_task";
$tdataevents[".printFields"][] = "event_timestamp";
$tdataevents[".printFields"][] = "event_project";
$tdataevents[".printFields"][] = "event_add_date";
$tdataevents[".printFields"][] = "event_subject";
$tdataevents[".printFields"][] = "event_body";
$tdataevents[".printFields"][] = "event_attachments";

//	event_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "event_id";
	$fdata["GoodName"] = "event_id";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "event_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_id";

	
	
			
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








	$tdataevents["event_id"] = $fdata;
//	event_subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "event_subject";
	$fdata["GoodName"] = "event_subject";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_subject");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_subject";

	
	
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




	$tdataevents["event_subject"] = $fdata;
//	event_body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "event_body";
	$fdata["GoodName"] = "event_body";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_body");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_body";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_body";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataevents["event_body"] = $fdata;
//	event_attachments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "event_attachments";
	$fdata["GoodName"] = "event_attachments";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_attachments");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_attachments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_attachments";

		$fdata["DeleteAssociatedFile"] = true;

	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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




	$tdataevents["event_attachments"] = $fdata;
//	event_add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "event_add_date";
	$fdata["GoodName"] = "event_add_date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_add_date");
	$fdata["FieldType"] = 135;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_add_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataevents["event_add_date"] = $fdata;
//	event_project
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "event_project";
	$fdata["GoodName"] = "event_project";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_project");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_project";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_project";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "projects";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "project_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "project_name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
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




	$tdataevents["event_project"] = $fdata;
//	event_task
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "event_task";
	$fdata["GoodName"] = "event_task";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_task");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_task";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_task";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tasks";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "task_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "task_subject";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
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




	$tdataevents["event_task"] = $fdata;
//	event_timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "event_timestamp";
	$fdata["GoodName"] = "event_timestamp";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","event_timestamp");
	$fdata["FieldType"] = 135;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_timestamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_timestamp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataevents["event_timestamp"] = $fdata;


$tables_data["events"]=&$tdataevents;
$field_labels["events"] = &$fieldLabelsevents;
$fieldToolTips["events"] = &$fieldToolTipsevents;
$page_titles["events"] = &$pageTitlesevents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["events"] = array();
//	events_stakeholders
	
	

		$dIndex = 0;
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
		
	$detailsTablesData["events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["events"][$dIndex]["masterKeys"][]="event_id";

				$detailsTablesData["events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["events"][$dIndex]["detailKeys"][]="event_id";

// tables which are master tables for current table (detail)
$masterTablesData["events"] = array();


	
				$strOriginalDetailsTable="projects";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projects";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projects";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["events"][0] = $masterParams;
				$masterTablesData["events"][0]["masterKeys"] = array();
	$masterTablesData["events"][0]["masterKeys"][]="project_id";
				$masterTablesData["events"][0]["detailKeys"] = array();
	$masterTablesData["events"][0]["detailKeys"][]="event_project";
		
	
				$strOriginalDetailsTable="tasks";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tasks";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tasks";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["events"][1] = $masterParams;
				$masterTablesData["events"][1]["masterKeys"] = array();
	$masterTablesData["events"][1]["masterKeys"][]="task_id";
				$masterTablesData["events"][1]["detailKeys"] = array();
	$masterTablesData["events"][1]["detailKeys"][]="event_task";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "event_id,  	event_subject,  	event_body,  	event_attachments,  	event_add_date,  	event_project,  	event_task,  	event_timestamp";
$proto0["m_strFrom"] = "FROM events";
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
	"m_strName" => "event_id",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto6["m_sql"] = "event_id";
$proto6["m_srcTableName"] = "events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "event_subject",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto8["m_sql"] = "event_subject";
$proto8["m_srcTableName"] = "events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "event_body",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto10["m_sql"] = "event_body";
$proto10["m_srcTableName"] = "events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "event_attachments",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto12["m_sql"] = "event_attachments";
$proto12["m_srcTableName"] = "events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "event_add_date",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto14["m_sql"] = "event_add_date";
$proto14["m_srcTableName"] = "events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "event_project",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto16["m_sql"] = "event_project";
$proto16["m_srcTableName"] = "events";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "event_task",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto18["m_sql"] = "event_task";
$proto18["m_srcTableName"] = "events";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "event_timestamp",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto20["m_sql"] = "event_timestamp";
$proto20["m_srcTableName"] = "events";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "events";
$proto23["m_srcTableName"] = "events";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "event_id";
$proto23["m_columns"][] = "event_subject";
$proto23["m_columns"][] = "event_body";
$proto23["m_columns"][] = "event_attachments";
$proto23["m_columns"][] = "event_add_date";
$proto23["m_columns"][] = "event_project";
$proto23["m_columns"][] = "event_task";
$proto23["m_columns"][] = "event_timestamp";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "events";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "events";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_events = createSqlQuery_events();


	
		;

								

$tdataevents[".sqlquery"] = $queryData_events;

$tableEvents["events"] = new eventsBase;
$tdataevents[".hasEvents"] = false;

?>