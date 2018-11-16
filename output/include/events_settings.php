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
	if (count($fieldToolTipsevents["English"]))
		$tdataevents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevents[""] = array();
	$fieldToolTipsevents[""] = array();
	$pageTitlesevents[""] = array();
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



$tdataevents[".badgeColor"] = "daa520";


$tdataevents[".allSearchFields"] = array();
$tdataevents[".filterFields"] = array();
$tdataevents[".requiredSearchFields"] = array();

$tdataevents[".allSearchFields"][] = "event_subject";
	$tdataevents[".allSearchFields"][] = "event_body";
	$tdataevents[".allSearchFields"][] = "event_attachments";
	$tdataevents[".allSearchFields"][] = "event_add_date";
	$tdataevents[".allSearchFields"][] = "event_project";
	

$tdataevents[".googleLikeFields"] = array();
$tdataevents[".googleLikeFields"][] = "event_id";
$tdataevents[".googleLikeFields"][] = "event_subject";
$tdataevents[".googleLikeFields"][] = "event_body";
$tdataevents[".googleLikeFields"][] = "event_attachments";
$tdataevents[".googleLikeFields"][] = "event_add_date";
$tdataevents[".googleLikeFields"][] = "event_project";


$tdataevents[".advSearchFields"] = array();
$tdataevents[".advSearchFields"][] = "event_id";
$tdataevents[".advSearchFields"][] = "event_subject";
$tdataevents[".advSearchFields"][] = "event_body";
$tdataevents[".advSearchFields"][] = "event_attachments";
$tdataevents[".advSearchFields"][] = "event_add_date";
$tdataevents[".advSearchFields"][] = "event_project";

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

$tdataevents[".sqlHead"] = "SELECT event_id,  	event_subject,  	event_body,  	event_attachments,  	event_add_date,  	event_project";
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
$tdataevents[".listFields"][] = "event_subject";
$tdataevents[".listFields"][] = "event_body";
$tdataevents[".listFields"][] = "event_attachments";
$tdataevents[".listFields"][] = "event_add_date";
$tdataevents[".listFields"][] = "event_project";

$tdataevents[".hideMobileList"] = array();


$tdataevents[".viewFields"] = array();
$tdataevents[".viewFields"][] = "event_subject";
$tdataevents[".viewFields"][] = "event_body";
$tdataevents[".viewFields"][] = "event_attachments";
$tdataevents[".viewFields"][] = "event_add_date";
$tdataevents[".viewFields"][] = "event_project";

$tdataevents[".addFields"] = array();
$tdataevents[".addFields"][] = "event_subject";
$tdataevents[".addFields"][] = "event_body";
$tdataevents[".addFields"][] = "event_attachments";
$tdataevents[".addFields"][] = "event_add_date";
$tdataevents[".addFields"][] = "event_project";

$tdataevents[".masterListFields"] = array();
$tdataevents[".masterListFields"][] = "event_id";
$tdataevents[".masterListFields"][] = "event_subject";
$tdataevents[".masterListFields"][] = "event_body";
$tdataevents[".masterListFields"][] = "event_attachments";
$tdataevents[".masterListFields"][] = "event_add_date";
$tdataevents[".masterListFields"][] = "event_project";

$tdataevents[".inlineAddFields"] = array();

$tdataevents[".editFields"] = array();
$tdataevents[".editFields"][] = "event_subject";
$tdataevents[".editFields"][] = "event_body";
$tdataevents[".editFields"][] = "event_attachments";
$tdataevents[".editFields"][] = "event_add_date";
$tdataevents[".editFields"][] = "event_project";

$tdataevents[".inlineEditFields"] = array();

$tdataevents[".exportFields"] = array();
$tdataevents[".exportFields"][] = "event_subject";
$tdataevents[".exportFields"][] = "event_body";
$tdataevents[".exportFields"][] = "event_attachments";
$tdataevents[".exportFields"][] = "event_add_date";
$tdataevents[".exportFields"][] = "event_project";

$tdataevents[".importFields"] = array();
$tdataevents[".importFields"][] = "event_subject";
$tdataevents[".importFields"][] = "event_body";
$tdataevents[".importFields"][] = "event_attachments";
$tdataevents[".importFields"][] = "event_add_date";
$tdataevents[".importFields"][] = "event_project";

$tdataevents[".printFields"] = array();
$tdataevents[".printFields"][] = "event_subject";
$tdataevents[".printFields"][] = "event_body";
$tdataevents[".printFields"][] = "event_attachments";
$tdataevents[".printFields"][] = "event_add_date";
$tdataevents[".printFields"][] = "event_project";

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

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataevents["event_project"] = $fdata;


$tables_data["events"]=&$tdataevents;
$field_labels["events"] = &$fieldLabelsevents;
$fieldToolTips["events"] = &$fieldToolTipsevents;
$page_titles["events"] = &$pageTitlesevents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["events"] = array();

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
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "event_id,  	event_subject,  	event_body,  	event_attachments,  	event_add_date,  	event_project";
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
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "events";
$proto19["m_srcTableName"] = "events";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "event_id";
$proto19["m_columns"][] = "event_subject";
$proto19["m_columns"][] = "event_body";
$proto19["m_columns"][] = "event_attachments";
$proto19["m_columns"][] = "event_add_date";
$proto19["m_columns"][] = "event_project";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "events";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "events";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

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