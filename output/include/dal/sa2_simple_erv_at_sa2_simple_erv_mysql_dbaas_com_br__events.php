<?php
$dalTableevents = array();
$dalTableevents["event_id"] = array("type"=>3,"varname"=>"event_id");
$dalTableevents["event_subject"] = array("type"=>200,"varname"=>"event_subject");
$dalTableevents["event_body"] = array("type"=>201,"varname"=>"event_body");
$dalTableevents["event_attachments"] = array("type"=>201,"varname"=>"event_attachments");
$dalTableevents["event_add_date"] = array("type"=>135,"varname"=>"event_add_date");
$dalTableevents["event_project"] = array("type"=>3,"varname"=>"event_project");
$dalTableevents["event_task"] = array("type"=>3,"varname"=>"event_task");
$dalTableevents["event_timestamp"] = array("type"=>135,"varname"=>"event_timestamp");
	$dalTableevents["event_id"]["key"]=true;

$dal_info["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br__events"] = &$dalTableevents;
?>