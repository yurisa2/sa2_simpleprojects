<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "projects";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("projects", " " . "Projects");
$table = "stakerholders";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("stakerholders", " " . "Stakerholders");
$table = "projects_stakeholders";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("projects_stakeholders", " " . "Projects Stakeholders");
$table = "tasks";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("tasks", " " . "Tasks");
$table = "tasks_stakeholders";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("tasks_stakeholders", " " . "Tasks Stakeholders");
$table = "events";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("events", " " . "Events");
$table = "users";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("users", " " . "Users");




$layout = new TLayout("admin_rights_list_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "yeti";
$layout->blocks["bottom"] = array();
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "";

$layout->blocks["bottom"][] = "pagination";
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugrightsgroup",
	"block"=>"", "substyle"=>1  );

$layout->skins["ugcontrols"] = "";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["ugcontrols_1"] = array();
$layout->container_properties["ugcontrols_1"] = array(  );
$layout->containers["ugcontrols_1"][] = array("name"=>"ugbuttons",
	"block"=>"", "substyle"=>1  );

$layout->containers["ugcontrols_1"][] = array("name"=>"ugrightbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols_1"] = "";

$layout->blocks["center"][] = "ugcontrols_1";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock",
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["center"][] = "grid";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"title",
	"block"=>"", "substyle"=>1  );

$layout->containers["menu"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->blocks["topmiddle"] = array();
$layout->containers["loggedcontrol"] = array();
$layout->container_properties["loggedcontrol"] = array(  );
$layout->containers["loggedcontrol"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"logged" );
$layout->containers["logged"] = array();
$layout->container_properties["logged"] = array(  );
$layout->containers["logged"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["logged"] = "";


$layout->skins["loggedcontrol"] = "";

$layout->blocks["topmiddle"][] = "loggedcontrol";
$layout->containers["messagerow"] = array();
$layout->container_properties["messagerow"] = array(  );
$layout->containers["messagerow"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["messagerow"] = "";

$layout->blocks["topmiddle"][] = "messagerow";
$page_layouts["admin_rights_list"] = $layout;




require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
