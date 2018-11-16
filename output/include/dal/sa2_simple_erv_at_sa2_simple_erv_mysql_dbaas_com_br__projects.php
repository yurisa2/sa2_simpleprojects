<?php
$dalTableprojects = array();
$dalTableprojects["project_id"] = array("type"=>3,"varname"=>"project_id");
$dalTableprojects["project_name"] = array("type"=>200,"varname"=>"project_name");
$dalTableprojects["project_owner"] = array("type"=>200,"varname"=>"project_owner");
$dalTableprojects["project_obs"] = array("type"=>200,"varname"=>"project_obs");
$dalTableprojects["project_start_date"] = array("type"=>7,"varname"=>"project_start_date");
$dalTableprojects["project_end_dat"] = array("type"=>7,"varname"=>"project_end_dat");
$dalTableprojects["project_attachments"] = array("type"=>200,"varname"=>"project_attachments");
	$dalTableprojects["project_id"]["key"]=true;

$dal_info["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br__projects"] = &$dalTableprojects;
?>