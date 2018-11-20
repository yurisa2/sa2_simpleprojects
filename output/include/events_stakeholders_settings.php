<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevents_stakeholders = array();
	$tdataevents_stakeholders[".truncateText"] = true;
	$tdataevents_stakeholders[".NumberOfChars"] = 80;
	$tdataevents_stakeholders[".ShortName"] = "events_stakeholders";
	$tdataevents_stakeholders[".OwnerID"] = "";
	$tdataevents_stakeholders[".OriginalTable"] = "events_stakeholders";

//	field labels
$fieldLabelsevents_stakeholders = array();
$fieldToolTipsevents_stakeholders = array();
$pageTitlesevents_stakeholders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevents_stakeholders["English"] = array();
	$fieldToolTipsevents_stakeholders["English"] = array();
	$pageTitlesevents_stakeholders["English"] = array();
	$fieldLabelsevents_stakeholders["English"]["id_link"] = "Id Link";
	$fieldToolTipsevents_stakeholders["English"]["id_link"] = "";
	$fieldLabelsevents_stakeholders["English"]["event_id"] = "Event";
	$fieldToolTipsevents_stakeholders["English"]["event_id"] = "";
	$fieldLabelsevents_stakeholders["English"]["stakeholder_id"] = "Stakeholder";
	$fieldToolTipsevents_stakeholders["English"]["stakeholder_id"] = "";
	if (count($fieldToolTipsevents_stakeholders["English"]))
		$tdataevents_stakeholders[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevents_stakeholders[""] = array();
	$fieldToolTipsevents_stakeholders[""] = array();
	$pageTitlesevents_stakeholders[""] = array();
	$fieldLabelsevents_stakeholders[""]["id_link"] = "Id Link";
	$fieldToolTipsevents_stakeholders[""]["id_link"] = "";
	$fieldLabelsevents_stakeholders[""]["event_id"] = "Event Id";
	$fieldToolTipsevents_stakeholders[""]["event_id"] = "";
	$fieldLabelsevents_stakeholders[""]["stakeholder_id"] = "Stakeholder Id";
	$fieldToolTipsevents_stakeholders[""]["stakeholder_id"] = "";
	if (count($fieldToolTipsevents_stakeholders[""]))
		$tdataevents_stakeholders[".isUseToolTips"] = true;
}


	$tdataevents_stakeholders[".NCSearch"] = true;



$tdataevents_stakeholders[".shortTableName"] = "events_stakeholders";
$tdataevents_stakeholders[".nSecOptions"] = 0;
$tdataevents_stakeholders[".recsPerRowList"] = 1;
$tdataevents_stakeholders[".recsPerRowPrint"] = 1;
$tdataevents_stakeholders[".mainTableOwnerID"] = "";
$tdataevents_stakeholders[".moveNext"] = 1;
$tdataevents_stakeholders[".entityType"] = 0;

$tdataevents_stakeholders[".strOriginalTableName"] = "events_stakeholders";





$tdataevents_stakeholders[".showAddInPopup"] = false;

$tdataevents_stakeholders[".showEditInPopup"] = false;

$tdataevents_stakeholders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevents_stakeholders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevents_stakeholders[".fieldsForRegister"] = array();

$tdataevents_stakeholders[".listAjax"] = false;

	$tdataevents_stakeholders[".audit"] = false;

	$tdataevents_stakeholders[".locking"] = false;



$tdataevents_stakeholders[".list"] = true;

$tdataevents_stakeholders[".inlineEdit"] = true;
$tdataevents_stakeholders[".inlineAdd"] = true;
$tdataevents_stakeholders[".view"] = true;

$tdataevents_stakeholders[".import"] = true;

$tdataevents_stakeholders[".exportTo"] = true;

$tdataevents_stakeholders[".printFriendly"] = true;

$tdataevents_stakeholders[".delete"] = true;

$tdataevents_stakeholders[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataevents_stakeholders[".searchSaving"] = false;
//

$tdataevents_stakeholders[".showSearchPanel"] = true;
		$tdataevents_stakeholders[".flexibleSearch"] = true;

if (isMobile())
	$tdataevents_stakeholders[".isUseAjaxSuggest"] = false;
else
	$tdataevents_stakeholders[".isUseAjaxSuggest"] = true;

$tdataevents_stakeholders[".rowHighlite"] = true;



$tdataevents_stakeholders[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevents_stakeholders[".isUseTimeForSearch"] = false;



$tdataevents_stakeholders[".badgeColor"] = "778899";


$tdataevents_stakeholders[".allSearchFields"] = array();
$tdataevents_stakeholders[".filterFields"] = array();
$tdataevents_stakeholders[".requiredSearchFields"] = array();

$tdataevents_stakeholders[".allSearchFields"][] = "event_id";
	$tdataevents_stakeholders[".allSearchFields"][] = "stakeholder_id";
	

$tdataevents_stakeholders[".googleLikeFields"] = array();
$tdataevents_stakeholders[".googleLikeFields"][] = "id_link";
$tdataevents_stakeholders[".googleLikeFields"][] = "event_id";
$tdataevents_stakeholders[".googleLikeFields"][] = "stakeholder_id";


$tdataevents_stakeholders[".advSearchFields"] = array();
$tdataevents_stakeholders[".advSearchFields"][] = "id_link";
$tdataevents_stakeholders[".advSearchFields"][] = "event_id";
$tdataevents_stakeholders[".advSearchFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".tableType"] = "list";

$tdataevents_stakeholders[".printerPageOrientation"] = 0;
$tdataevents_stakeholders[".nPrinterPageScale"] = 100;

$tdataevents_stakeholders[".nPrinterSplitRecords"] = 40;

$tdataevents_stakeholders[".nPrinterPDFSplitRecords"] = 40;



$tdataevents_stakeholders[".geocodingEnabled"] = false;





$tdataevents_stakeholders[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevents_stakeholders[".pageSize"] = 20;

$tdataevents_stakeholders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevents_stakeholders[".strOrderBy"] = $tstrOrderBy;

$tdataevents_stakeholders[".orderindexes"] = array();

$tdataevents_stakeholders[".sqlHead"] = "SELECT id_link,  	event_id,  	stakeholder_id";
$tdataevents_stakeholders[".sqlFrom"] = "FROM events_stakeholders";
$tdataevents_stakeholders[".sqlWhereExpr"] = "";
$tdataevents_stakeholders[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevents_stakeholders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevents_stakeholders[".arrGroupsPerPage"] = $arrGPP;

$tdataevents_stakeholders[".highlightSearchResults"] = true;

$tableKeysevents_stakeholders = array();
$tableKeysevents_stakeholders[] = "id_link";
$tdataevents_stakeholders[".Keys"] = $tableKeysevents_stakeholders;

$tdataevents_stakeholders[".listFields"] = array();
$tdataevents_stakeholders[".listFields"][] = "event_id";
$tdataevents_stakeholders[".listFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".hideMobileList"] = array();


$tdataevents_stakeholders[".viewFields"] = array();
$tdataevents_stakeholders[".viewFields"][] = "event_id";
$tdataevents_stakeholders[".viewFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".addFields"] = array();

$tdataevents_stakeholders[".masterListFields"] = array();
$tdataevents_stakeholders[".masterListFields"][] = "id_link";
$tdataevents_stakeholders[".masterListFields"][] = "event_id";
$tdataevents_stakeholders[".masterListFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".inlineAddFields"] = array();
$tdataevents_stakeholders[".inlineAddFields"][] = "event_id";
$tdataevents_stakeholders[".inlineAddFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".editFields"] = array();

$tdataevents_stakeholders[".inlineEditFields"] = array();
$tdataevents_stakeholders[".inlineEditFields"][] = "event_id";
$tdataevents_stakeholders[".inlineEditFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".exportFields"] = array();
$tdataevents_stakeholders[".exportFields"][] = "event_id";
$tdataevents_stakeholders[".exportFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".importFields"] = array();
$tdataevents_stakeholders[".importFields"][] = "event_id";
$tdataevents_stakeholders[".importFields"][] = "stakeholder_id";

$tdataevents_stakeholders[".printFields"] = array();
$tdataevents_stakeholders[".printFields"][] = "event_id";
$tdataevents_stakeholders[".printFields"][] = "stakeholder_id";

//	id_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_link";
	$fdata["GoodName"] = "id_link";
	$fdata["ownerTable"] = "events_stakeholders";
	$fdata["Label"] = GetFieldLabel("events_stakeholders","id_link");
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








	$tdataevents_stakeholders["id_link"] = $fdata;
//	event_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "event_id";
	$fdata["GoodName"] = "event_id";
	$fdata["ownerTable"] = "events_stakeholders";
	$fdata["Label"] = GetFieldLabel("events_stakeholders","event_id");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_id";

	
	
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
	$edata["LookupTable"] = "events";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "event_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "event_subject";

	
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




	$tdataevents_stakeholders["event_id"] = $fdata;
//	stakeholder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stakeholder_id";
	$fdata["GoodName"] = "stakeholder_id";
	$fdata["ownerTable"] = "events_stakeholders";
	$fdata["Label"] = GetFieldLabel("events_stakeholders","stakeholder_id");
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




	$tdataevents_stakeholders["stakeholder_id"] = $fdata;


$tables_data["events_stakeholders"]=&$tdataevents_stakeholders;
$field_labels["events_stakeholders"] = &$fieldLabelsevents_stakeholders;
$fieldToolTips["events_stakeholders"] = &$fieldToolTipsevents_stakeholders;
$page_titles["events_stakeholders"] = &$pageTitlesevents_stakeholders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["events_stakeholders"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["events_stakeholders"] = array();


	
				$strOriginalDetailsTable="events";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="events";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "events";
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
					$masterTablesData["events_stakeholders"][0] = $masterParams;
				$masterTablesData["events_stakeholders"][0]["masterKeys"] = array();
	$masterTablesData["events_stakeholders"][0]["masterKeys"][]="event_id";
				$masterTablesData["events_stakeholders"][0]["detailKeys"] = array();
	$masterTablesData["events_stakeholders"][0]["detailKeys"][]="event_id";
		
	
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
					$masterTablesData["events_stakeholders"][1] = $masterParams;
				$masterTablesData["events_stakeholders"][1]["masterKeys"] = array();
	$masterTablesData["events_stakeholders"][1]["masterKeys"][]="stakeholder_id";
				$masterTablesData["events_stakeholders"][1]["detailKeys"] = array();
	$masterTablesData["events_stakeholders"][1]["detailKeys"][]="stakeholder_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_events_stakeholders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_link,  	event_id,  	stakeholder_id";
$proto0["m_strFrom"] = "FROM events_stakeholders";
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
	"m_strTable" => "events_stakeholders",
	"m_srcTableName" => "events_stakeholders"
));

$proto6["m_sql"] = "id_link";
$proto6["m_srcTableName"] = "events_stakeholders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "event_id",
	"m_strTable" => "events_stakeholders",
	"m_srcTableName" => "events_stakeholders"
));

$proto8["m_sql"] = "event_id";
$proto8["m_srcTableName"] = "events_stakeholders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stakeholder_id",
	"m_strTable" => "events_stakeholders",
	"m_srcTableName" => "events_stakeholders"
));

$proto10["m_sql"] = "stakeholder_id";
$proto10["m_srcTableName"] = "events_stakeholders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "events_stakeholders";
$proto13["m_srcTableName"] = "events_stakeholders";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_link";
$proto13["m_columns"][] = "event_id";
$proto13["m_columns"][] = "stakeholder_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "events_stakeholders";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "events_stakeholders";
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
$proto0["m_srcTableName"]="events_stakeholders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_events_stakeholders = createSqlQuery_events_stakeholders();


	
		;

			

$tdataevents_stakeholders[".sqlquery"] = $queryData_events_stakeholders;

$tableEvents["events_stakeholders"] = new eventsBase;
$tdataevents_stakeholders[".hasEvents"] = false;

?>