<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprojects_stakeholders = array();
	$tdataprojects_stakeholders[".truncateText"] = true;
	$tdataprojects_stakeholders[".NumberOfChars"] = 80;
	$tdataprojects_stakeholders[".ShortName"] = "projects_stakeholders";
	$tdataprojects_stakeholders[".OwnerID"] = "";
	$tdataprojects_stakeholders[".OriginalTable"] = "projects_stakeholders";

//	field labels
$fieldLabelsprojects_stakeholders = array();
$fieldToolTipsprojects_stakeholders = array();
$pageTitlesprojects_stakeholders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprojects_stakeholders["English"] = array();
	$fieldToolTipsprojects_stakeholders["English"] = array();
	$pageTitlesprojects_stakeholders["English"] = array();
	$fieldLabelsprojects_stakeholders["English"]["id_link"] = "Id Link";
	$fieldToolTipsprojects_stakeholders["English"]["id_link"] = "";
	$fieldLabelsprojects_stakeholders["English"]["project_id"] = "Project";
	$fieldToolTipsprojects_stakeholders["English"]["project_id"] = "";
	$fieldLabelsprojects_stakeholders["English"]["stakeholder_id"] = "Stakeholder";
	$fieldToolTipsprojects_stakeholders["English"]["stakeholder_id"] = "";
	if (count($fieldToolTipsprojects_stakeholders["English"]))
		$tdataprojects_stakeholders[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprojects_stakeholders[""] = array();
	$fieldToolTipsprojects_stakeholders[""] = array();
	$pageTitlesprojects_stakeholders[""] = array();
	if (count($fieldToolTipsprojects_stakeholders[""]))
		$tdataprojects_stakeholders[".isUseToolTips"] = true;
}


	$tdataprojects_stakeholders[".NCSearch"] = true;



$tdataprojects_stakeholders[".shortTableName"] = "projects_stakeholders";
$tdataprojects_stakeholders[".nSecOptions"] = 0;
$tdataprojects_stakeholders[".recsPerRowList"] = 1;
$tdataprojects_stakeholders[".recsPerRowPrint"] = 1;
$tdataprojects_stakeholders[".mainTableOwnerID"] = "";
$tdataprojects_stakeholders[".moveNext"] = 1;
$tdataprojects_stakeholders[".entityType"] = 0;

$tdataprojects_stakeholders[".strOriginalTableName"] = "projects_stakeholders";





$tdataprojects_stakeholders[".showAddInPopup"] = false;

$tdataprojects_stakeholders[".showEditInPopup"] = false;

$tdataprojects_stakeholders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprojects_stakeholders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprojects_stakeholders[".fieldsForRegister"] = array();

$tdataprojects_stakeholders[".listAjax"] = false;

	$tdataprojects_stakeholders[".audit"] = true;

	$tdataprojects_stakeholders[".locking"] = false;



$tdataprojects_stakeholders[".list"] = true;

$tdataprojects_stakeholders[".inlineEdit"] = true;
$tdataprojects_stakeholders[".inlineAdd"] = true;
$tdataprojects_stakeholders[".view"] = true;

$tdataprojects_stakeholders[".import"] = true;

$tdataprojects_stakeholders[".exportTo"] = true;

$tdataprojects_stakeholders[".printFriendly"] = true;

$tdataprojects_stakeholders[".delete"] = true;

$tdataprojects_stakeholders[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataprojects_stakeholders[".searchSaving"] = false;
//

$tdataprojects_stakeholders[".showSearchPanel"] = true;
		$tdataprojects_stakeholders[".flexibleSearch"] = true;

if (isMobile())
	$tdataprojects_stakeholders[".isUseAjaxSuggest"] = false;
else
	$tdataprojects_stakeholders[".isUseAjaxSuggest"] = true;

$tdataprojects_stakeholders[".rowHighlite"] = true;



$tdataprojects_stakeholders[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojects_stakeholders[".isUseTimeForSearch"] = false;



$tdataprojects_stakeholders[".badgeColor"] = "778899";


$tdataprojects_stakeholders[".allSearchFields"] = array();
$tdataprojects_stakeholders[".filterFields"] = array();
$tdataprojects_stakeholders[".requiredSearchFields"] = array();

$tdataprojects_stakeholders[".allSearchFields"][] = "project_id";
	$tdataprojects_stakeholders[".allSearchFields"][] = "stakeholder_id";
	

$tdataprojects_stakeholders[".googleLikeFields"] = array();
$tdataprojects_stakeholders[".googleLikeFields"][] = "id_link";
$tdataprojects_stakeholders[".googleLikeFields"][] = "project_id";
$tdataprojects_stakeholders[".googleLikeFields"][] = "stakeholder_id";


$tdataprojects_stakeholders[".advSearchFields"] = array();
$tdataprojects_stakeholders[".advSearchFields"][] = "id_link";
$tdataprojects_stakeholders[".advSearchFields"][] = "project_id";
$tdataprojects_stakeholders[".advSearchFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".tableType"] = "list";

$tdataprojects_stakeholders[".printerPageOrientation"] = 0;
$tdataprojects_stakeholders[".nPrinterPageScale"] = 100;

$tdataprojects_stakeholders[".nPrinterSplitRecords"] = 40;

$tdataprojects_stakeholders[".nPrinterPDFSplitRecords"] = 40;



$tdataprojects_stakeholders[".geocodingEnabled"] = false;





$tdataprojects_stakeholders[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataprojects_stakeholders[".pageSize"] = 20;

$tdataprojects_stakeholders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprojects_stakeholders[".strOrderBy"] = $tstrOrderBy;

$tdataprojects_stakeholders[".orderindexes"] = array();

$tdataprojects_stakeholders[".sqlHead"] = "SELECT id_link,  	project_id,  	stakeholder_id";
$tdataprojects_stakeholders[".sqlFrom"] = "FROM projects_stakeholders";
$tdataprojects_stakeholders[".sqlWhereExpr"] = "";
$tdataprojects_stakeholders[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojects_stakeholders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojects_stakeholders[".arrGroupsPerPage"] = $arrGPP;

$tdataprojects_stakeholders[".highlightSearchResults"] = true;

$tableKeysprojects_stakeholders = array();
$tableKeysprojects_stakeholders[] = "id_link";
$tdataprojects_stakeholders[".Keys"] = $tableKeysprojects_stakeholders;

$tdataprojects_stakeholders[".listFields"] = array();
$tdataprojects_stakeholders[".listFields"][] = "project_id";
$tdataprojects_stakeholders[".listFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".hideMobileList"] = array();


$tdataprojects_stakeholders[".viewFields"] = array();
$tdataprojects_stakeholders[".viewFields"][] = "project_id";
$tdataprojects_stakeholders[".viewFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".addFields"] = array();

$tdataprojects_stakeholders[".masterListFields"] = array();
$tdataprojects_stakeholders[".masterListFields"][] = "id_link";
$tdataprojects_stakeholders[".masterListFields"][] = "project_id";
$tdataprojects_stakeholders[".masterListFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".inlineAddFields"] = array();
$tdataprojects_stakeholders[".inlineAddFields"][] = "project_id";
$tdataprojects_stakeholders[".inlineAddFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".editFields"] = array();

$tdataprojects_stakeholders[".inlineEditFields"] = array();
$tdataprojects_stakeholders[".inlineEditFields"][] = "project_id";
$tdataprojects_stakeholders[".inlineEditFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".exportFields"] = array();
$tdataprojects_stakeholders[".exportFields"][] = "project_id";
$tdataprojects_stakeholders[".exportFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".importFields"] = array();
$tdataprojects_stakeholders[".importFields"][] = "project_id";
$tdataprojects_stakeholders[".importFields"][] = "stakeholder_id";

$tdataprojects_stakeholders[".printFields"] = array();
$tdataprojects_stakeholders[".printFields"][] = "project_id";
$tdataprojects_stakeholders[".printFields"][] = "stakeholder_id";

//	id_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_link";
	$fdata["GoodName"] = "id_link";
	$fdata["ownerTable"] = "projects_stakeholders";
	$fdata["Label"] = GetFieldLabel("projects_stakeholders","id_link");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id_link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_link";

	
	
			
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








	$tdataprojects_stakeholders["id_link"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "projects_stakeholders";
	$fdata["Label"] = GetFieldLabel("projects_stakeholders","project_id");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "project_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_id";

	
	
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




	$tdataprojects_stakeholders["project_id"] = $fdata;
//	stakeholder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stakeholder_id";
	$fdata["GoodName"] = "stakeholder_id";
	$fdata["ownerTable"] = "projects_stakeholders";
	$fdata["Label"] = GetFieldLabel("projects_stakeholders","stakeholder_id");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stakeholder_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stakeholder_id";

	
	
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
	$edata["LookupTable"] = "stakerholders";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "stakeholder_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stakeholder_name";

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdataprojects_stakeholders["stakeholder_id"] = $fdata;


$tables_data["projects_stakeholders"]=&$tdataprojects_stakeholders;
$field_labels["projects_stakeholders"] = &$fieldLabelsprojects_stakeholders;
$fieldToolTips["projects_stakeholders"] = &$fieldToolTipsprojects_stakeholders;
$page_titles["projects_stakeholders"] = &$pageTitlesprojects_stakeholders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["projects_stakeholders"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["projects_stakeholders"] = array();


	
				$strOriginalDetailsTable="projects";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="projects";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projects";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["projects_stakeholders"][0] = $masterParams;
				$masterTablesData["projects_stakeholders"][0]["masterKeys"] = array();
	$masterTablesData["projects_stakeholders"][0]["masterKeys"][]="project_id";
				$masterTablesData["projects_stakeholders"][0]["detailKeys"] = array();
	$masterTablesData["projects_stakeholders"][0]["detailKeys"][]="project_id";
		
	
				$strOriginalDetailsTable="stakerholders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="stakerholders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "stakerholders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["projects_stakeholders"][1] = $masterParams;
				$masterTablesData["projects_stakeholders"][1]["masterKeys"] = array();
	$masterTablesData["projects_stakeholders"][1]["masterKeys"][]="stakeholder_id";
				$masterTablesData["projects_stakeholders"][1]["detailKeys"] = array();
	$masterTablesData["projects_stakeholders"][1]["detailKeys"][]="stakeholder_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_projects_stakeholders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_link,  	project_id,  	stakeholder_id";
$proto0["m_strFrom"] = "FROM projects_stakeholders";
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
	"m_strName" => "id_link",
	"m_strTable" => "projects_stakeholders",
	"m_srcTableName" => "projects_stakeholders"
));

$proto6["m_sql"] = "id_link";
$proto6["m_srcTableName"] = "projects_stakeholders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "projects_stakeholders",
	"m_srcTableName" => "projects_stakeholders"
));

$proto8["m_sql"] = "project_id";
$proto8["m_srcTableName"] = "projects_stakeholders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_id",
	"m_strTable" => "projects_stakeholders",
	"m_srcTableName" => "projects_stakeholders"
));

$proto10["m_sql"] = "stakeholder_id";
$proto10["m_srcTableName"] = "projects_stakeholders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "projects_stakeholders";
$proto13["m_srcTableName"] = "projects_stakeholders";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_link";
$proto13["m_columns"][] = "project_id";
$proto13["m_columns"][] = "stakeholder_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "projects_stakeholders";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "projects_stakeholders";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="projects_stakeholders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projects_stakeholders = createSqlQuery_projects_stakeholders();


	
		;

			

$tdataprojects_stakeholders[".sqlquery"] = $queryData_projects_stakeholders;

$tableEvents["projects_stakeholders"] = new eventsBase;
$tdataprojects_stakeholders[".hasEvents"] = false;

?>