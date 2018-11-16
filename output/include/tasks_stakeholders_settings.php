<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatasks_stakeholders = array();
	$tdatatasks_stakeholders[".truncateText"] = true;
	$tdatatasks_stakeholders[".NumberOfChars"] = 80;
	$tdatatasks_stakeholders[".ShortName"] = "tasks_stakeholders";
	$tdatatasks_stakeholders[".OwnerID"] = "";
	$tdatatasks_stakeholders[".OriginalTable"] = "tasks_stakeholders";

//	field labels
$fieldLabelstasks_stakeholders = array();
$fieldToolTipstasks_stakeholders = array();
$pageTitlestasks_stakeholders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstasks_stakeholders["English"] = array();
	$fieldToolTipstasks_stakeholders["English"] = array();
	$pageTitlestasks_stakeholders["English"] = array();
	$fieldLabelstasks_stakeholders["English"]["id_link"] = "Id Link";
	$fieldToolTipstasks_stakeholders["English"]["id_link"] = "";
	$fieldLabelstasks_stakeholders["English"]["task_id"] = "Task Id";
	$fieldToolTipstasks_stakeholders["English"]["task_id"] = "";
	$fieldLabelstasks_stakeholders["English"]["stakeholder_id"] = "Stakeholder Id";
	$fieldToolTipstasks_stakeholders["English"]["stakeholder_id"] = "";
	if (count($fieldToolTipstasks_stakeholders["English"]))
		$tdatatasks_stakeholders[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstasks_stakeholders[""] = array();
	$fieldToolTipstasks_stakeholders[""] = array();
	$pageTitlestasks_stakeholders[""] = array();
	if (count($fieldToolTipstasks_stakeholders[""]))
		$tdatatasks_stakeholders[".isUseToolTips"] = true;
}


	$tdatatasks_stakeholders[".NCSearch"] = true;



$tdatatasks_stakeholders[".shortTableName"] = "tasks_stakeholders";
$tdatatasks_stakeholders[".nSecOptions"] = 0;
$tdatatasks_stakeholders[".recsPerRowList"] = 1;
$tdatatasks_stakeholders[".recsPerRowPrint"] = 1;
$tdatatasks_stakeholders[".mainTableOwnerID"] = "";
$tdatatasks_stakeholders[".moveNext"] = 1;
$tdatatasks_stakeholders[".entityType"] = 0;

$tdatatasks_stakeholders[".strOriginalTableName"] = "tasks_stakeholders";





$tdatatasks_stakeholders[".showAddInPopup"] = false;

$tdatatasks_stakeholders[".showEditInPopup"] = false;

$tdatatasks_stakeholders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatasks_stakeholders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatasks_stakeholders[".fieldsForRegister"] = array();

$tdatatasks_stakeholders[".listAjax"] = false;

	$tdatatasks_stakeholders[".audit"] = true;

	$tdatatasks_stakeholders[".locking"] = false;

$tdatatasks_stakeholders[".edit"] = true;
$tdatatasks_stakeholders[".afterEditAction"] = 1;
$tdatatasks_stakeholders[".closePopupAfterEdit"] = 1;
$tdatatasks_stakeholders[".afterEditActionDetTable"] = "";

$tdatatasks_stakeholders[".add"] = true;
$tdatatasks_stakeholders[".afterAddAction"] = 1;
$tdatatasks_stakeholders[".closePopupAfterAdd"] = 1;
$tdatatasks_stakeholders[".afterAddActionDetTable"] = "";

$tdatatasks_stakeholders[".list"] = true;

$tdatatasks_stakeholders[".view"] = true;

$tdatatasks_stakeholders[".import"] = true;

$tdatatasks_stakeholders[".exportTo"] = true;

$tdatatasks_stakeholders[".printFriendly"] = true;

$tdatatasks_stakeholders[".delete"] = true;

$tdatatasks_stakeholders[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatasks_stakeholders[".searchSaving"] = false;
//

$tdatatasks_stakeholders[".showSearchPanel"] = true;
		$tdatatasks_stakeholders[".flexibleSearch"] = true;

if (isMobile())
	$tdatatasks_stakeholders[".isUseAjaxSuggest"] = false;
else
	$tdatatasks_stakeholders[".isUseAjaxSuggest"] = true;

$tdatatasks_stakeholders[".rowHighlite"] = true;



$tdatatasks_stakeholders[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasks_stakeholders[".isUseTimeForSearch"] = false;



$tdatatasks_stakeholders[".badgeColor"] = "db7093";


$tdatatasks_stakeholders[".allSearchFields"] = array();
$tdatatasks_stakeholders[".filterFields"] = array();
$tdatatasks_stakeholders[".requiredSearchFields"] = array();

$tdatatasks_stakeholders[".allSearchFields"][] = "task_id";
	$tdatatasks_stakeholders[".allSearchFields"][] = "stakeholder_id";
	

$tdatatasks_stakeholders[".googleLikeFields"] = array();
$tdatatasks_stakeholders[".googleLikeFields"][] = "id_link";
$tdatatasks_stakeholders[".googleLikeFields"][] = "task_id";
$tdatatasks_stakeholders[".googleLikeFields"][] = "stakeholder_id";


$tdatatasks_stakeholders[".advSearchFields"] = array();
$tdatatasks_stakeholders[".advSearchFields"][] = "id_link";
$tdatatasks_stakeholders[".advSearchFields"][] = "task_id";
$tdatatasks_stakeholders[".advSearchFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".tableType"] = "list";

$tdatatasks_stakeholders[".printerPageOrientation"] = 0;
$tdatatasks_stakeholders[".nPrinterPageScale"] = 100;

$tdatatasks_stakeholders[".nPrinterSplitRecords"] = 40;

$tdatatasks_stakeholders[".nPrinterPDFSplitRecords"] = 40;



$tdatatasks_stakeholders[".geocodingEnabled"] = false;





$tdatatasks_stakeholders[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatasks_stakeholders[".pageSize"] = 20;

$tdatatasks_stakeholders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatasks_stakeholders[".strOrderBy"] = $tstrOrderBy;

$tdatatasks_stakeholders[".orderindexes"] = array();

$tdatatasks_stakeholders[".sqlHead"] = "SELECT id_link,  	task_id,  	stakeholder_id";
$tdatatasks_stakeholders[".sqlFrom"] = "FROM tasks_stakeholders";
$tdatatasks_stakeholders[".sqlWhereExpr"] = "";
$tdatatasks_stakeholders[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasks_stakeholders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasks_stakeholders[".arrGroupsPerPage"] = $arrGPP;

$tdatatasks_stakeholders[".highlightSearchResults"] = true;

$tableKeystasks_stakeholders = array();
$tableKeystasks_stakeholders[] = "id_link";
$tdatatasks_stakeholders[".Keys"] = $tableKeystasks_stakeholders;

$tdatatasks_stakeholders[".listFields"] = array();
$tdatatasks_stakeholders[".listFields"][] = "task_id";
$tdatatasks_stakeholders[".listFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".hideMobileList"] = array();


$tdatatasks_stakeholders[".viewFields"] = array();
$tdatatasks_stakeholders[".viewFields"][] = "task_id";
$tdatatasks_stakeholders[".viewFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".addFields"] = array();
$tdatatasks_stakeholders[".addFields"][] = "task_id";
$tdatatasks_stakeholders[".addFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".masterListFields"] = array();
$tdatatasks_stakeholders[".masterListFields"][] = "id_link";
$tdatatasks_stakeholders[".masterListFields"][] = "task_id";
$tdatatasks_stakeholders[".masterListFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".inlineAddFields"] = array();

$tdatatasks_stakeholders[".editFields"] = array();
$tdatatasks_stakeholders[".editFields"][] = "task_id";
$tdatatasks_stakeholders[".editFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".inlineEditFields"] = array();

$tdatatasks_stakeholders[".exportFields"] = array();
$tdatatasks_stakeholders[".exportFields"][] = "task_id";
$tdatatasks_stakeholders[".exportFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".importFields"] = array();
$tdatatasks_stakeholders[".importFields"][] = "task_id";
$tdatatasks_stakeholders[".importFields"][] = "stakeholder_id";

$tdatatasks_stakeholders[".printFields"] = array();
$tdatatasks_stakeholders[".printFields"][] = "task_id";
$tdatatasks_stakeholders[".printFields"][] = "stakeholder_id";

//	id_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_link";
	$fdata["GoodName"] = "id_link";
	$fdata["ownerTable"] = "tasks_stakeholders";
	$fdata["Label"] = GetFieldLabel("tasks_stakeholders","id_link");
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








	$tdatatasks_stakeholders["id_link"] = $fdata;
//	task_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "task_id";
	$fdata["GoodName"] = "task_id";
	$fdata["ownerTable"] = "tasks_stakeholders";
	$fdata["Label"] = GetFieldLabel("tasks_stakeholders","task_id");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_id";

	
	
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




	$tdatatasks_stakeholders["task_id"] = $fdata;
//	stakeholder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stakeholder_id";
	$fdata["GoodName"] = "stakeholder_id";
	$fdata["ownerTable"] = "tasks_stakeholders";
	$fdata["Label"] = GetFieldLabel("tasks_stakeholders","stakeholder_id");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatatasks_stakeholders["stakeholder_id"] = $fdata;


$tables_data["tasks_stakeholders"]=&$tdatatasks_stakeholders;
$field_labels["tasks_stakeholders"] = &$fieldLabelstasks_stakeholders;
$fieldToolTips["tasks_stakeholders"] = &$fieldToolTipstasks_stakeholders;
$page_titles["tasks_stakeholders"] = &$pageTitlestasks_stakeholders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tasks_stakeholders"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tasks_stakeholders"] = array();


	
				$strOriginalDetailsTable="stakerholders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="stakerholders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "stakerholders";
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
					$masterTablesData["tasks_stakeholders"][0] = $masterParams;
				$masterTablesData["tasks_stakeholders"][0]["masterKeys"] = array();
	$masterTablesData["tasks_stakeholders"][0]["masterKeys"][]="stakeholder_id";
				$masterTablesData["tasks_stakeholders"][0]["detailKeys"] = array();
	$masterTablesData["tasks_stakeholders"][0]["detailKeys"][]="stakeholder_id";
		
	
				$strOriginalDetailsTable="tasks";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tasks";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tasks";
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
					$masterTablesData["tasks_stakeholders"][1] = $masterParams;
				$masterTablesData["tasks_stakeholders"][1]["masterKeys"] = array();
	$masterTablesData["tasks_stakeholders"][1]["masterKeys"][]="task_id";
				$masterTablesData["tasks_stakeholders"][1]["detailKeys"] = array();
	$masterTablesData["tasks_stakeholders"][1]["detailKeys"][]="task_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tasks_stakeholders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_link,  	task_id,  	stakeholder_id";
$proto0["m_strFrom"] = "FROM tasks_stakeholders";
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
	"m_strTable" => "tasks_stakeholders",
	"m_srcTableName" => "tasks_stakeholders"
));

$proto6["m_sql"] = "id_link";
$proto6["m_srcTableName"] = "tasks_stakeholders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "task_id",
	"m_strTable" => "tasks_stakeholders",
	"m_srcTableName" => "tasks_stakeholders"
));

$proto8["m_sql"] = "task_id";
$proto8["m_srcTableName"] = "tasks_stakeholders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_id",
	"m_strTable" => "tasks_stakeholders",
	"m_srcTableName" => "tasks_stakeholders"
));

$proto10["m_sql"] = "stakeholder_id";
$proto10["m_srcTableName"] = "tasks_stakeholders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tasks_stakeholders";
$proto13["m_srcTableName"] = "tasks_stakeholders";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_link";
$proto13["m_columns"][] = "task_id";
$proto13["m_columns"][] = "stakeholder_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tasks_stakeholders";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tasks_stakeholders";
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
$proto0["m_srcTableName"]="tasks_stakeholders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasks_stakeholders = createSqlQuery_tasks_stakeholders();


	
		;

			

$tdatatasks_stakeholders[".sqlquery"] = $queryData_tasks_stakeholders;

$tableEvents["tasks_stakeholders"] = new eventsBase;
$tdatatasks_stakeholders[".hasEvents"] = false;

?>