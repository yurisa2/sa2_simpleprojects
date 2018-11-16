<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatasks = array();
	$tdatatasks[".truncateText"] = true;
	$tdatatasks[".NumberOfChars"] = 80;
	$tdatatasks[".ShortName"] = "tasks";
	$tdatatasks[".OwnerID"] = "";
	$tdatatasks[".OriginalTable"] = "tasks";

//	field labels
$fieldLabelstasks = array();
$fieldToolTipstasks = array();
$pageTitlestasks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstasks["English"] = array();
	$fieldToolTipstasks["English"] = array();
	$pageTitlestasks["English"] = array();
	$fieldLabelstasks["English"]["task_id"] = "Task Id";
	$fieldToolTipstasks["English"]["task_id"] = "";
	$fieldLabelstasks["English"]["task_subject"] = "Task Subject";
	$fieldToolTipstasks["English"]["task_subject"] = "";
	$fieldLabelstasks["English"]["task_body"] = "Task Body";
	$fieldToolTipstasks["English"]["task_body"] = "";
	$fieldLabelstasks["English"]["task_attachments"] = "Task Attachments";
	$fieldToolTipstasks["English"]["task_attachments"] = "";
	$fieldLabelstasks["English"]["task_start_date"] = "Task Start Date";
	$fieldToolTipstasks["English"]["task_start_date"] = "";
	$fieldLabelstasks["English"]["task_end_date"] = "Task End Date";
	$fieldToolTipstasks["English"]["task_end_date"] = "";
	$fieldLabelstasks["English"]["task_modify_date"] = "Task Modify Date";
	$fieldToolTipstasks["English"]["task_modify_date"] = "";
	$fieldLabelstasks["English"]["task_project"] = "Task Project";
	$fieldToolTipstasks["English"]["task_project"] = "";
	$fieldLabelstasks["English"]["task_obs"] = "Task Obs";
	$fieldToolTipstasks["English"]["task_obs"] = "";
	if (count($fieldToolTipstasks["English"]))
		$tdatatasks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstasks[""] = array();
	$fieldToolTipstasks[""] = array();
	$pageTitlestasks[""] = array();
	$fieldLabelstasks[""]["task_project"] = "Task Project";
	$fieldToolTipstasks[""]["task_project"] = "";
	$fieldLabelstasks[""]["task_obs"] = "Task Obs";
	$fieldToolTipstasks[""]["task_obs"] = "";
	if (count($fieldToolTipstasks[""]))
		$tdatatasks[".isUseToolTips"] = true;
}


	$tdatatasks[".NCSearch"] = true;



$tdatatasks[".shortTableName"] = "tasks";
$tdatatasks[".nSecOptions"] = 0;
$tdatatasks[".recsPerRowList"] = 1;
$tdatatasks[".recsPerRowPrint"] = 1;
$tdatatasks[".mainTableOwnerID"] = "";
$tdatatasks[".moveNext"] = 1;
$tdatatasks[".entityType"] = 0;

$tdatatasks[".strOriginalTableName"] = "tasks";





$tdatatasks[".showAddInPopup"] = false;

$tdatatasks[".showEditInPopup"] = false;

$tdatatasks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatasks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatasks[".fieldsForRegister"] = array();

$tdatatasks[".listAjax"] = false;

	$tdatatasks[".audit"] = true;

	$tdatatasks[".locking"] = false;

$tdatatasks[".edit"] = true;
$tdatatasks[".afterEditAction"] = 1;
$tdatatasks[".closePopupAfterEdit"] = 1;
$tdatatasks[".afterEditActionDetTable"] = "";

$tdatatasks[".add"] = true;
$tdatatasks[".afterAddAction"] = 1;
$tdatatasks[".closePopupAfterAdd"] = 1;
$tdatatasks[".afterAddActionDetTable"] = "";

$tdatatasks[".list"] = true;

$tdatatasks[".view"] = true;

$tdatatasks[".import"] = true;

$tdatatasks[".exportTo"] = true;

$tdatatasks[".printFriendly"] = true;

$tdatatasks[".delete"] = true;

$tdatatasks[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatasks[".searchSaving"] = false;
//

$tdatatasks[".showSearchPanel"] = true;
		$tdatatasks[".flexibleSearch"] = true;

if (isMobile())
	$tdatatasks[".isUseAjaxSuggest"] = false;
else
	$tdatatasks[".isUseAjaxSuggest"] = true;

$tdatatasks[".rowHighlite"] = true;



$tdatatasks[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasks[".isUseTimeForSearch"] = false;



$tdatatasks[".badgeColor"] = "8fbc8b";


$tdatatasks[".allSearchFields"] = array();
$tdatatasks[".filterFields"] = array();
$tdatatasks[".requiredSearchFields"] = array();

$tdatatasks[".allSearchFields"][] = "task_project";
	$tdatatasks[".allSearchFields"][] = "task_modify_date";
	$tdatatasks[".allSearchFields"][] = "task_subject";
	$tdatatasks[".allSearchFields"][] = "task_body";
	$tdatatasks[".allSearchFields"][] = "task_attachments";
	$tdatatasks[".allSearchFields"][] = "task_start_date";
	$tdatatasks[".allSearchFields"][] = "task_end_date";
	$tdatatasks[".allSearchFields"][] = "task_obs";
	

$tdatatasks[".googleLikeFields"] = array();
$tdatatasks[".googleLikeFields"][] = "task_id";
$tdatatasks[".googleLikeFields"][] = "task_subject";
$tdatatasks[".googleLikeFields"][] = "task_body";
$tdatatasks[".googleLikeFields"][] = "task_attachments";
$tdatatasks[".googleLikeFields"][] = "task_start_date";
$tdatatasks[".googleLikeFields"][] = "task_end_date";
$tdatatasks[".googleLikeFields"][] = "task_modify_date";
$tdatatasks[".googleLikeFields"][] = "task_project";
$tdatatasks[".googleLikeFields"][] = "task_obs";


$tdatatasks[".advSearchFields"] = array();
$tdatatasks[".advSearchFields"][] = "task_id";
$tdatatasks[".advSearchFields"][] = "task_project";
$tdatatasks[".advSearchFields"][] = "task_modify_date";
$tdatatasks[".advSearchFields"][] = "task_subject";
$tdatatasks[".advSearchFields"][] = "task_body";
$tdatatasks[".advSearchFields"][] = "task_attachments";
$tdatatasks[".advSearchFields"][] = "task_start_date";
$tdatatasks[".advSearchFields"][] = "task_end_date";
$tdatatasks[".advSearchFields"][] = "task_obs";

$tdatatasks[".tableType"] = "list";

$tdatatasks[".printerPageOrientation"] = 0;
$tdatatasks[".nPrinterPageScale"] = 100;

$tdatatasks[".nPrinterSplitRecords"] = 40;

$tdatatasks[".nPrinterPDFSplitRecords"] = 40;



$tdatatasks[".geocodingEnabled"] = false;





$tdatatasks[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatasks[".pageSize"] = 20;

$tdatatasks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatasks[".strOrderBy"] = $tstrOrderBy;

$tdatatasks[".orderindexes"] = array();

$tdatatasks[".sqlHead"] = "SELECT task_id,  task_subject,  task_body,  task_attachments,  task_start_date,  task_end_date,  task_modify_date,  task_project,  task_obs";
$tdatatasks[".sqlFrom"] = "FROM tasks";
$tdatatasks[".sqlWhereExpr"] = "";
$tdatatasks[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasks[".arrGroupsPerPage"] = $arrGPP;

$tdatatasks[".highlightSearchResults"] = true;

$tableKeystasks = array();
$tableKeystasks[] = "task_id";
$tdatatasks[".Keys"] = $tableKeystasks;

$tdatatasks[".listFields"] = array();
$tdatatasks[".listFields"][] = "task_project";
$tdatatasks[".listFields"][] = "task_modify_date";
$tdatatasks[".listFields"][] = "task_subject";
$tdatatasks[".listFields"][] = "task_body";
$tdatatasks[".listFields"][] = "task_attachments";
$tdatatasks[".listFields"][] = "task_start_date";
$tdatatasks[".listFields"][] = "task_end_date";
$tdatatasks[".listFields"][] = "task_obs";

$tdatatasks[".hideMobileList"] = array();


$tdatatasks[".viewFields"] = array();
$tdatatasks[".viewFields"][] = "task_project";
$tdatatasks[".viewFields"][] = "task_modify_date";
$tdatatasks[".viewFields"][] = "task_subject";
$tdatatasks[".viewFields"][] = "task_body";
$tdatatasks[".viewFields"][] = "task_attachments";
$tdatatasks[".viewFields"][] = "task_start_date";
$tdatatasks[".viewFields"][] = "task_end_date";
$tdatatasks[".viewFields"][] = "task_obs";

$tdatatasks[".addFields"] = array();
$tdatatasks[".addFields"][] = "task_project";
$tdatatasks[".addFields"][] = "task_modify_date";
$tdatatasks[".addFields"][] = "task_subject";
$tdatatasks[".addFields"][] = "task_body";
$tdatatasks[".addFields"][] = "task_attachments";
$tdatatasks[".addFields"][] = "task_start_date";
$tdatatasks[".addFields"][] = "task_end_date";
$tdatatasks[".addFields"][] = "task_obs";

$tdatatasks[".masterListFields"] = array();
$tdatatasks[".masterListFields"][] = "task_project";
$tdatatasks[".masterListFields"][] = "task_modify_date";
$tdatatasks[".masterListFields"][] = "task_subject";
$tdatatasks[".masterListFields"][] = "task_body";
$tdatatasks[".masterListFields"][] = "task_attachments";
$tdatatasks[".masterListFields"][] = "task_start_date";
$tdatatasks[".masterListFields"][] = "task_end_date";
$tdatatasks[".masterListFields"][] = "task_obs";

$tdatatasks[".inlineAddFields"] = array();

$tdatatasks[".editFields"] = array();
$tdatatasks[".editFields"][] = "task_project";
$tdatatasks[".editFields"][] = "task_modify_date";
$tdatatasks[".editFields"][] = "task_subject";
$tdatatasks[".editFields"][] = "task_body";
$tdatatasks[".editFields"][] = "task_attachments";
$tdatatasks[".editFields"][] = "task_start_date";
$tdatatasks[".editFields"][] = "task_end_date";
$tdatatasks[".editFields"][] = "task_obs";

$tdatatasks[".inlineEditFields"] = array();

$tdatatasks[".exportFields"] = array();
$tdatatasks[".exportFields"][] = "task_project";
$tdatatasks[".exportFields"][] = "task_modify_date";
$tdatatasks[".exportFields"][] = "task_subject";
$tdatatasks[".exportFields"][] = "task_body";
$tdatatasks[".exportFields"][] = "task_attachments";
$tdatatasks[".exportFields"][] = "task_start_date";
$tdatatasks[".exportFields"][] = "task_end_date";
$tdatatasks[".exportFields"][] = "task_obs";

$tdatatasks[".importFields"] = array();
$tdatatasks[".importFields"][] = "task_subject";
$tdatatasks[".importFields"][] = "task_body";
$tdatatasks[".importFields"][] = "task_attachments";
$tdatatasks[".importFields"][] = "task_start_date";
$tdatatasks[".importFields"][] = "task_end_date";
$tdatatasks[".importFields"][] = "task_modify_date";
$tdatatasks[".importFields"][] = "task_project";
$tdatatasks[".importFields"][] = "task_obs";

$tdatatasks[".printFields"] = array();
$tdatatasks[".printFields"][] = "task_project";
$tdatatasks[".printFields"][] = "task_modify_date";
$tdatatasks[".printFields"][] = "task_subject";
$tdatatasks[".printFields"][] = "task_body";
$tdatatasks[".printFields"][] = "task_attachments";
$tdatatasks[".printFields"][] = "task_start_date";
$tdatatasks[".printFields"][] = "task_end_date";
$tdatatasks[".printFields"][] = "task_obs";

//	task_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "task_id";
	$fdata["GoodName"] = "task_id";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "task_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_id";

	
	
			
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








	$tdatatasks["task_id"] = $fdata;
//	task_subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "task_subject";
	$fdata["GoodName"] = "task_subject";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_subject");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_subject";

	
	
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




	$tdatatasks["task_subject"] = $fdata;
//	task_body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "task_body";
	$fdata["GoodName"] = "task_body";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_body");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_body";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_body";

	
	
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




	$tdatatasks["task_body"] = $fdata;
//	task_attachments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "task_attachments";
	$fdata["GoodName"] = "task_attachments";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_attachments");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_attachments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_attachments";

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




	$tdatatasks["task_attachments"] = $fdata;
//	task_start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "task_start_date";
	$fdata["GoodName"] = "task_start_date";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_start_date");
	$fdata["FieldType"] = 7;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_start_date";

	
	
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




	$tdatatasks["task_start_date"] = $fdata;
//	task_end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "task_end_date";
	$fdata["GoodName"] = "task_end_date";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_end_date");
	$fdata["FieldType"] = 7;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_end_date";

	
	
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




	$tdatatasks["task_end_date"] = $fdata;
//	task_modify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "task_modify_date";
	$fdata["GoodName"] = "task_modify_date";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_modify_date");
	$fdata["FieldType"] = 135;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_modify_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_modify_date";

	
	
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




	$tdatatasks["task_modify_date"] = $fdata;
//	task_project
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "task_project";
	$fdata["GoodName"] = "task_project";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_project");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_project";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_project";

	
	
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdatatasks["task_project"] = $fdata;
//	task_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "task_obs";
	$fdata["GoodName"] = "task_obs";
	$fdata["ownerTable"] = "tasks";
	$fdata["Label"] = GetFieldLabel("tasks","task_obs");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_obs";

	
	
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




	$tdatatasks["task_obs"] = $fdata;


$tables_data["tasks"]=&$tdatatasks;
$field_labels["tasks"] = &$fieldLabelstasks;
$fieldToolTips["tasks"] = &$fieldToolTipstasks;
$page_titles["tasks"] = &$pageTitlestasks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tasks"] = array();
//	tasks_stakeholders
	
	

		$dIndex = 0;
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
		
	$detailsTablesData["tasks"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tasks"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tasks"][$dIndex]["masterKeys"][]="task_id";

				$detailsTablesData["tasks"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tasks"][$dIndex]["detailKeys"][]="task_id";

// tables which are master tables for current table (detail)
$masterTablesData["tasks"] = array();


	
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
					$masterTablesData["tasks"][0] = $masterParams;
				$masterTablesData["tasks"][0]["masterKeys"] = array();
	$masterTablesData["tasks"][0]["masterKeys"][]="project_id";
				$masterTablesData["tasks"][0]["detailKeys"] = array();
	$masterTablesData["tasks"][0]["detailKeys"][]="task_project";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tasks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "task_id,  task_subject,  task_body,  task_attachments,  task_start_date,  task_end_date,  task_modify_date,  task_project,  task_obs";
$proto0["m_strFrom"] = "FROM tasks";
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
	"m_strName" => "task_id",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto6["m_sql"] = "task_id";
$proto6["m_srcTableName"] = "tasks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "task_subject",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto8["m_sql"] = "task_subject";
$proto8["m_srcTableName"] = "tasks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "task_body",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto10["m_sql"] = "task_body";
$proto10["m_srcTableName"] = "tasks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "task_attachments",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto12["m_sql"] = "task_attachments";
$proto12["m_srcTableName"] = "tasks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "task_start_date",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto14["m_sql"] = "task_start_date";
$proto14["m_srcTableName"] = "tasks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "task_end_date",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto16["m_sql"] = "task_end_date";
$proto16["m_srcTableName"] = "tasks";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "task_modify_date",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto18["m_sql"] = "task_modify_date";
$proto18["m_srcTableName"] = "tasks";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "task_project",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto20["m_sql"] = "task_project";
$proto20["m_srcTableName"] = "tasks";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "task_obs",
	"m_strTable" => "tasks",
	"m_srcTableName" => "tasks"
));

$proto22["m_sql"] = "task_obs";
$proto22["m_srcTableName"] = "tasks";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tasks";
$proto25["m_srcTableName"] = "tasks";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "task_id";
$proto25["m_columns"][] = "task_subject";
$proto25["m_columns"][] = "task_body";
$proto25["m_columns"][] = "task_attachments";
$proto25["m_columns"][] = "task_start_date";
$proto25["m_columns"][] = "task_end_date";
$proto25["m_columns"][] = "task_modify_date";
$proto25["m_columns"][] = "task_project";
$proto25["m_columns"][] = "task_obs";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tasks";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tasks";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tasks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasks = createSqlQuery_tasks();


	
		;

									

$tdatatasks[".sqlquery"] = $queryData_tasks;

$tableEvents["tasks"] = new eventsBase;
$tdatatasks[".hasEvents"] = false;

?>