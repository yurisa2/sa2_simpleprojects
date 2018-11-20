<?php
require "../connections/ConnectionManager.php";
require "mail/corpo_email.php";

echo "<pre>";

class Conex_getter extends ConnectionManager {

  public function __construct() {

    $this->_setConnectionsData();

    $this->conex_data = $this->_connectionsData;


    $this->conex = new stdClass;
    $this->conex->server = $this->conex_data["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br"]["connInfo"]["0"];
    $this->conex->user = $this->conex_data["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br"]["connInfo"]["1"];
    $this->conex->pass = $this->conex_data["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br"]["connInfo"]["2"];
    $this->conex->db = $this->conex_data["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br"]["connInfo"]["4"];

    // var_dump($this->_connectionsData);

  }

}


$conex = new Conex_getter;
$DB = new PDO( 'mysql:host=' . $conex->conex->server . ';dbname=' . $conex->conex->db, $conex->conex->user, $conex->conex->pass );


////////////////////////////////////////////////////////////////////////////////

$sql_new_projects = "SELECT * FROM projects
join
projects_stakeholders on
projects.project_id =  projects_stakeholders.project_id
join
stakerholders on
stakerholders.stakeholder_id = projects_stakeholders.stakeholder_id

WHERE project_timestamp >= now() - INTERVAL 1 DAY;";
$result_projects = $DB->query($sql_new_projects);
$rows_projects = $result_projects->fetchAll();

////////////////////////////////////////////////////////////////////////////////

$sql_new_tasks = "SELECT * FROM tasks
join
tasks_stakeholders on
tasks.task_id =  tasks_stakeholders.task_id
join
stakerholders on
stakerholders.stakeholder_id = tasks_stakeholders.stakeholder_id

WHERE task_timestamp >= now() - INTERVAL 1 DAY;";
$result_tasks = $DB->query($sql_new_tasks);
$rows_tasks = $result_tasks->fetchAll();

////////////////////////////////////////////////////////////////////////////////

$sql_new_events = "SELECT * FROM events
join
events_stakeholders on
events.event_id =  events_stakeholders.event_id
join
stakerholders on
stakerholders.stakeholder_id = events_stakeholders.stakeholder_id

WHERE event_timestamp >= now() - INTERVAL 1 DAY;";
$result_events = $DB->query($sql_new_events);
$rows_events = $result_events->fetchAll();

////////////////////////////////////////////////////////////////////////////////
//
// var_dump( $rows_projects );
// var_dump( $rows_tasks );
// var_dump( $rows_event );
var_dump(send_update_email_task($rows_tasks["0"],"localhsot"));

?>
