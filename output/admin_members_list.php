<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_members_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;




$layout = new TLayout("admin_members_list_bootstrap", "OfficeOffice", "MobileOffice");
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
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons",
	"block"=>"", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugmembersbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["ugcontrols"] = "";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugmemgrid",
	"block"=>"grid_block", "substyle"=>1  );

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
$page_layouts["admin_members_list"] = $layout;




require_once('include/xtempl.php');
require_once("classes/searchclause.php");

require_once("classes/searchcontrol.php");
require_once("classes/panelsearchcontrol.php");

require_once("classes/searchpanel.php");
require_once("classes/searchpanelsimple.php");	

require_once('classes/listpage.php');
require_once('classes/listpage_simple.php');
require_once('classes/memberspage.php');
$xt = new Xtempl();


$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = MEMBERS_PAGE;
$options['xt'] = &$xt;

$pageObject = ListPage::createListPage($strTableName, $options);
if( postvalue("a") == "saveMembers" )
{
	$modifiedMembers = my_json_decode(postvalue('values'));
	$pageObject->saveMembers($modifiedMembers);
	return;
}

 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
?>