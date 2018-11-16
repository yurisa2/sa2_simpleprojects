<?php
$dalTabletasks = array();
$dalTabletasks["task_id"] = array("type"=>3,"varname"=>"task_id");
$dalTabletasks["task_subject"] = array("type"=>200,"varname"=>"task_subject");
$dalTabletasks["task_body"] = array("type"=>201,"varname"=>"task_body");
$dalTabletasks["task_attachments"] = array("type"=>201,"varname"=>"task_attachments");
$dalTabletasks["task_start_date"] = array("type"=>7,"varname"=>"task_start_date");
$dalTabletasks["task_end_date"] = array("type"=>7,"varname"=>"task_end_date");
$dalTabletasks["task_modify_date"] = array("type"=>135,"varname"=>"task_modify_date");
$dalTabletasks["task_project"] = array("type"=>3,"varname"=>"task_project");
$dalTabletasks["task_obs"] = array("type"=>201,"varname"=>"task_obs");
	$dalTabletasks["task_id"]["key"]=true;

$dal_info["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br__tasks"] = &$dalTabletasks;
?>