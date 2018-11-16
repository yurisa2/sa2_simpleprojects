<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprojects = array();
	$tdataprojects[".truncateText"] = true;
	$tdataprojects[".NumberOfChars"] = 80;
	$tdataprojects[".ShortName"] = "projects";
	$tdataprojects[".OwnerID"] = "";
	$tdataprojects[".OriginalTable"] = "projects";

//	field labels
$fieldLabelsprojects = array();
$fieldToolTipsprojects = array();
$pageTitlesprojects = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojects["English"] = array();
	$fieldToolTipsprojects["English"] = array();
	$pageTitlesprojects["English"] = array();
	$fieldLabelsprojects["English"]["project_id"] = "Project Id";
	$fieldToolTipsprojects["English"]["project_id"] = "";
	$fieldLabelsprojects["English"]["project_name"] = "Project Name";
	$fieldToolTipsprojects["English"]["project_name"] = "";
	$fieldLabelsprojects["English"]["project_owner"] = "Project Owner";
	$fieldToolTipsprojects["English"]["project_owner"] = "";
	$fieldLabelsprojects["English"]["project_obs"] = "Project Obs";
	$fieldToolTipsprojects["English"]["project_obs"] = "";
	$fieldLabelsprojects["English"]["project_start_date"] = "Project Start Date";
	$fieldToolTipsprojects["English"]["project_start_date"] = "";
	$fieldLabelsprojects["English"]["project_end_dat"] = "Project End Dat";
	$fieldToolTipsprojects["English"]["project_end_dat"] = "";
	$fieldLabelsprojects["English"]["project_attachments"] = "Project Attachments";
	$fieldToolTipsprojects["English"]["project_attachments"] = "";
	if (count($fieldToolTipsprojects["English"]))
		$tdataprojects[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprojects[""] = array();
	$fieldToolTipsprojects[""] = array();
	$pageTitlesprojects[""] = array();
	if (count($fieldToolTipsprojects[""]))
		$tdataprojects[".isUseToolTips"] = true;
}


	$tdataprojects[".NCSearch"] = true;



$tdataprojects[".shortTableName"] = "projects";
$tdataprojects[".nSecOptions"] = 0;
$tdataprojects[".recsPerRowList"] = 1;
$tdataprojects[".recsPerRowPrint"] = 1;
$tdataprojects[".mainTableOwnerID"] = "";
$tdataprojects[".moveNext"] = 1;
$tdataprojects[".entityType"] = 0;

$tdataprojects[".strOriginalTableName"] = "projects";





$tdataprojects[".showAddInPopup"] = false;

$tdataprojects[".showEditInPopup"] = false;

$tdataprojects[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprojects[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprojects[".fieldsForRegister"] = array();

$tdataprojects[".listAjax"] = false;

	$tdataprojects[".audit"] = true;

	$tdataprojects[".locking"] = false;

$tdataprojects[".edit"] = true;
$tdataprojects[".afterEditAction"] = 1;
$tdataprojects[".closePopupAfterEdit"] = 1;
$tdataprojects[".afterEditActionDetTable"] = "";

$tdataprojects[".add"] = true;
$tdataprojects[".afterAddAction"] = 1;
$tdataprojects[".closePopupAfterAdd"] = 1;
$tdataprojects[".afterAddActionDetTable"] = "";

$tdataprojects[".list"] = true;

$tdataprojects[".view"] = true;

$tdataprojects[".import"] = true;

$tdataprojects[".exportTo"] = true;

$tdataprojects[".printFriendly"] = true;

$tdataprojects[".delete"] = true;

$tdataprojects[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataprojects[".searchSaving"] = false;
//

$tdataprojects[".showSearchPanel"] = true;
		$tdataprojects[".flexibleSearch"] = true;

if (isMobile())
	$tdataprojects[".isUseAjaxSuggest"] = false;
else
	$tdataprojects[".isUseAjaxSuggest"] = true;

$tdataprojects[".rowHighlite"] = true;



$tdataprojects[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojects[".isUseTimeForSearch"] = false;



$tdataprojects[".badgeColor"] = "CD853F";


$tdataprojects[".allSearchFields"] = array();
$tdataprojects[".filterFields"] = array();
$tdataprojects[".requiredSearchFields"] = array();

$tdataprojects[".allSearchFields"][] = "project_name";
	$tdataprojects[".allSearchFields"][] = "project_owner";
	$tdataprojects[".allSearchFields"][] = "project_obs";
	$tdataprojects[".allSearchFields"][] = "project_start_date";
	$tdataprojects[".allSearchFields"][] = "project_end_dat";
	$tdataprojects[".allSearchFields"][] = "project_attachments";
	

$tdataprojects[".googleLikeFields"] = array();
$tdataprojects[".googleLikeFields"][] = "project_id";
$tdataprojects[".googleLikeFields"][] = "project_name";
$tdataprojects[".googleLikeFields"][] = "project_owner";
$tdataprojects[".googleLikeFields"][] = "project_obs";
$tdataprojects[".googleLikeFields"][] = "project_start_date";
$tdataprojects[".googleLikeFields"][] = "project_end_dat";
$tdataprojects[".googleLikeFields"][] = "project_attachments";


$tdataprojects[".advSearchFields"] = array();
$tdataprojects[".advSearchFields"][] = "project_id";
$tdataprojects[".advSearchFields"][] = "project_name";
$tdataprojects[".advSearchFields"][] = "project_owner";
$tdataprojects[".advSearchFields"][] = "project_obs";
$tdataprojects[".advSearchFields"][] = "project_start_date";
$tdataprojects[".advSearchFields"][] = "project_end_dat";
$tdataprojects[".advSearchFields"][] = "project_attachments";

$tdataprojects[".tableType"] = "list";

$tdataprojects[".printerPageOrientation"] = 0;
$tdataprojects[".nPrinterPageScale"] = 100;

$tdataprojects[".nPrinterSplitRecords"] = 40;

$tdataprojects[".nPrinterPDFSplitRecords"] = 40;



$tdataprojects[".geocodingEnabled"] = false;





$tdataprojects[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataprojects[".pageSize"] = 20;

$tdataprojects[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprojects[".strOrderBy"] = $tstrOrderBy;

$tdataprojects[".orderindexes"] = array();

$tdataprojects[".sqlHead"] = "SELECT project_id,  project_name,  project_owner,  project_obs,  project_start_date,  project_end_dat,  project_attachments";
$tdataprojects[".sqlFrom"] = "FROM projects";
$tdataprojects[".sqlWhereExpr"] = "";
$tdataprojects[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojects[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojects[".arrGroupsPerPage"] = $arrGPP;

$tdataprojects[".highlightSearchResults"] = true;

$tableKeysprojects = array();
$tableKeysprojects[] = "project_id";
$tdataprojects[".Keys"] = $tableKeysprojects;

$tdataprojects[".listFields"] = array();
$tdataprojects[".listFields"][] = "project_name";
$tdataprojects[".listFields"][] = "project_owner";
$tdataprojects[".listFields"][] = "project_obs";
$tdataprojects[".listFields"][] = "project_start_date";
$tdataprojects[".listFields"][] = "project_end_dat";
$tdataprojects[".listFields"][] = "project_attachments";

$tdataprojects[".hideMobileList"] = array();


$tdataprojects[".viewFields"] = array();
$tdataprojects[".viewFields"][] = "project_name";
$tdataprojects[".viewFields"][] = "project_owner";
$tdataprojects[".viewFields"][] = "project_obs";
$tdataprojects[".viewFields"][] = "project_start_date";
$tdataprojects[".viewFields"][] = "project_end_dat";
$tdataprojects[".viewFields"][] = "project_attachments";

$tdataprojects[".addFields"] = array();
$tdataprojects[".addFields"][] = "project_name";
$tdataprojects[".addFields"][] = "project_owner";
$tdataprojects[".addFields"][] = "project_obs";
$tdataprojects[".addFields"][] = "project_start_date";
$tdataprojects[".addFields"][] = "project_end_dat";
$tdataprojects[".addFields"][] = "project_attachments";

$tdataprojects[".masterListFields"] = array();
$tdataprojects[".masterListFields"][] = "project_name";
$tdataprojects[".masterListFields"][] = "project_owner";
$tdataprojects[".masterListFields"][] = "project_obs";
$tdataprojects[".masterListFields"][] = "project_start_date";
$tdataprojects[".masterListFields"][] = "project_end_dat";
$tdataprojects[".masterListFields"][] = "project_attachments";

$tdataprojects[".inlineAddFields"] = array();

$tdataprojects[".editFields"] = array();
$tdataprojects[".editFields"][] = "project_name";
$tdataprojects[".editFields"][] = "project_owner";
$tdataprojects[".editFields"][] = "project_obs";
$tdataprojects[".editFields"][] = "project_start_date";
$tdataprojects[".editFields"][] = "project_end_dat";
$tdataprojects[".editFields"][] = "project_attachments";

$tdataprojects[".inlineEditFields"] = array();

$tdataprojects[".exportFields"] = array();
$tdataprojects[".exportFields"][] = "project_name";
$tdataprojects[".exportFields"][] = "project_owner";
$tdataprojects[".exportFields"][] = "project_obs";
$tdataprojects[".exportFields"][] = "project_start_date";
$tdataprojects[".exportFields"][] = "project_end_dat";
$tdataprojects[".exportFields"][] = "project_attachments";

$tdataprojects[".importFields"] = array();
$tdataprojects[".importFields"][] = "project_name";
$tdataprojects[".importFields"][] = "project_owner";
$tdataprojects[".importFields"][] = "project_obs";
$tdataprojects[".importFields"][] = "project_start_date";
$tdataprojects[".importFields"][] = "project_end_dat";
$tdataprojects[".importFields"][] = "project_attachments";

$tdataprojects[".printFields"] = array();
$tdataprojects[".printFields"][] = "project_name";
$tdataprojects[".printFields"][] = "project_owner";
$tdataprojects[".printFields"][] = "project_obs";
$tdataprojects[".printFields"][] = "project_start_date";
$tdataprojects[".printFields"][] = "project_end_dat";
$tdataprojects[".printFields"][] = "project_attachments";

//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "project_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_id";

	
	
			
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








	$tdataprojects["project_id"] = $fdata;
//	project_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "project_name";
	$fdata["GoodName"] = "project_name";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_name");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_name";

	
	
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




	$tdataprojects["project_name"] = $fdata;
//	project_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "project_owner";
	$fdata["GoodName"] = "project_owner";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_owner");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_owner";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_owner";

	
	
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




	$tdataprojects["project_owner"] = $fdata;
//	project_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "project_obs";
	$fdata["GoodName"] = "project_obs";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_obs");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_obs";

	
	
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




	$tdataprojects["project_obs"] = $fdata;
//	project_start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "project_start_date";
	$fdata["GoodName"] = "project_start_date";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_start_date");
	$fdata["FieldType"] = 7;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_start_date";

	
	
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




	$tdataprojects["project_start_date"] = $fdata;
//	project_end_dat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "project_end_dat";
	$fdata["GoodName"] = "project_end_dat";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_end_dat");
	$fdata["FieldType"] = 7;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_end_dat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_end_dat";

	
	
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




	$tdataprojects["project_end_dat"] = $fdata;
//	project_attachments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "project_attachments";
	$fdata["GoodName"] = "project_attachments";
	$fdata["ownerTable"] = "projects";
	$fdata["Label"] = GetFieldLabel("projects","project_attachments");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_attachments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_attachments";

	
	
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




	$tdataprojects["project_attachments"] = $fdata;


$tables_data["projects"]=&$tdataprojects;
$field_labels["projects"] = &$fieldLabelsprojects;
$fieldToolTips["projects"] = &$fieldToolTipsprojects;
$page_titles["projects"] = &$pageTitlesprojects;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["projects"] = array();
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
		
	$detailsTablesData["projects"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projects"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projects"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["projects"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projects"][$dIndex]["detailKeys"][]="project_id";
//	tasks
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tasks";
		$detailsParam["dOriginalTable"] = "tasks";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tasks";
	$detailsParam["dCaptionTable"] = GetTableCaption("tasks");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["projects"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projects"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projects"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["projects"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projects"][$dIndex]["detailKeys"][]="task_project";
//	events
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="events";
		$detailsParam["dOriginalTable"] = "events";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "events";
	$detailsParam["dCaptionTable"] = GetTableCaption("events");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["projects"][$dIndex] = $detailsParam;

	
		$detailsTablesData["projects"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["projects"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["projects"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["projects"][$dIndex]["detailKeys"][]="event_project";

// tables which are master tables for current table (detail)
$masterTablesData["projects"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_projects()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project_id,  project_name,  project_owner,  project_obs,  project_start_date,  project_end_dat,  project_attachments";
$proto0["m_strFrom"] = "FROM projects";
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
	"m_strName" => "project_id",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto6["m_sql"] = "project_id";
$proto6["m_srcTableName"] = "projects";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "project_name",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto8["m_sql"] = "project_name";
$proto8["m_srcTableName"] = "projects";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "project_owner",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto10["m_sql"] = "project_owner";
$proto10["m_srcTableName"] = "projects";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "project_obs",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto12["m_sql"] = "project_obs";
$proto12["m_srcTableName"] = "projects";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "project_start_date",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto14["m_sql"] = "project_start_date";
$proto14["m_srcTableName"] = "projects";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "project_end_dat",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto16["m_sql"] = "project_end_dat";
$proto16["m_srcTableName"] = "projects";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "project_attachments",
	"m_strTable" => "projects",
	"m_srcTableName" => "projects"
));

$proto18["m_sql"] = "project_attachments";
$proto18["m_srcTableName"] = "projects";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "projects";
$proto21["m_srcTableName"] = "projects";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "project_id";
$proto21["m_columns"][] = "project_name";
$proto21["m_columns"][] = "project_owner";
$proto21["m_columns"][] = "project_obs";
$proto21["m_columns"][] = "project_start_date";
$proto21["m_columns"][] = "project_end_dat";
$proto21["m_columns"][] = "project_attachments";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "projects";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "projects";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="projects";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projects = createSqlQuery_projects();


	
		;

							

$tdataprojects[".sqlquery"] = $queryData_projects;

$tableEvents["projects"] = new eventsBase;
$tdataprojects[".hasEvents"] = false;

?>