<?php
require "../connections/ConnectionManager.php";
require "mail/mail_body.php";

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
  }

}

class lister extends Conex_getter {

  public function __construct() {

    $this->conex_obj = new Conex_getter;
    $this->conex = $this->conex_obj->conex;

    $this->DB = new PDO( 'mysql:host=' . $this->conex->server . ';dbname=' .
    $this->conex->db, $this->conex->user, $this->conex->pass );
  }

    public function get_projects() {
      $sql_new_projects = "SELECT * FROM projects
      WHERE project_timestamp >= now() - INTERVAL 1 DAY;";
      $result_projects = $this->DB->query($sql_new_projects);
      $rows_projects = $result_projects->fetchAll();

      return $rows_projects;
    }

    public function get_projects_ij_stakeholders() {
      $sql_new_projects = "SELECT * FROM projects
      join
      projects_stakeholders on
      projects.project_id =  projects_stakeholders.project_id
      join
      stakerholders on
      stakerholders.stakeholder_id = projects_stakeholders.stakeholder_id

      WHERE project_timestamp >= now() - INTERVAL 1 DAY;";
      $result_projects = $this->DB->query($sql_new_projects);
      $rows_projects = $result_projects->fetchAll();

      return $rows_projects;
    }

    public function get_tasks() {
      $sql_new_tasks = "SELECT * FROM tasks
      WHERE task_timestamp >= now() - INTERVAL 1 DAY;";
      $result_tasks = $this->DB->query($sql_new_tasks);
      $rows_tasks = $result_tasks->fetchAll();

      return $rows_tasks;
    }

    public function get_tasks_ij_stakeholders() {
      $sql_new_tasks = "SELECT * FROM tasks
      join
      tasks_stakeholders on
      tasks.task_id =  tasks_stakeholders.task_id
      join
      stakerholders on
      stakerholders.stakeholder_id = tasks_stakeholders.stakeholder_id

      WHERE task_timestamp >= now() - INTERVAL 1 DAY;";
      $result_tasks = $this->DB->query($sql_new_tasks);
      $rows_tasks = $result_tasks->fetchAll();

      return $rows_tasks;
    }

    public function get_events() {
      $sql_new_events = "SELECT * FROM events
      WHERE event_timestamp >= now() - INTERVAL 1 DAY;";
      $result_events = $this->DB->query($sql_new_events);
      $rows_events = $result_events->fetchAll();

      return $rows_events;
    }

    public function get_events_ij_stakeholders() {
      $sql_new_events = "SELECT * FROM events
      join
      events_stakeholders on
      events.event_id =  events_stakeholders.event_id
      join
      stakerholders on
      stakerholders.stakeholder_id = events_stakeholders.stakeholder_id

      WHERE event_timestamp >= now() - INTERVAL 1 DAY;";
      $result_events = $this->DB->query($sql_new_events);
      $rows_events = $result_events->fetchAll();

      return $rows_events;
    }

    public function get_tasks_stakeholders_emails($task_id) {
      $sql = "SELECT stakeholder_email FROM tasks_stakeholders

      inner join
      stakerholders on
      tasks_stakeholders.stakeholder_id = stakerholders.stakeholder_id

          WHERE task_id = $task_id;";
      $result = $this->DB->query($sql);
      $rows = $result->fetchAll();

      return $rows;
    }

    public function get_projects_stakeholders_emails($project_id) {
      $sql = "SELECT stakeholder_email FROM projects_stakeholders

      inner join
      stakerholders on
      projects_stakeholders.stakeholder_id = stakerholders.stakeholder_id

          WHERE project_id = $project_id;";
      $result = $this->DB->query($sql);
      $rows = $result->fetchAll();

      return $rows;
    }

    public function get_events_stakeholders_emails($event_id) {
      $sql = "SELECT stakeholder_email FROM events_stakeholders

      inner join
      stakerholders on
      events_stakeholders.stakeholder_id = stakerholders.stakeholder_id

          WHERE event_id = $event_id;";
      $result = $this->DB->query($sql);
      $rows = $result->fetchAll();

      return $rows;
    }

    public function get_pending_sh_emails() {
      $sql = "SELECT stakeholder_email FROM tasks
      join
      tasks_stakeholders on
      tasks.task_id =  tasks_stakeholders.task_id
      join
      stakerholders on
      stakerholders.stakeholder_id = tasks_stakeholders.stakeholder_id

      WHERE task_timestamp >= now() - INTERVAL 1 DAY

      union

      SELECT stakeholder_email FROM events
      join
      events_stakeholders on
      events.event_id =  events_stakeholders.event_id
      join
      stakerholders on
      stakerholders.stakeholder_id = events_stakeholders.stakeholder_id

      WHERE event_timestamp >= now() - INTERVAL 1 DAY

      union

      SELECT stakeholder_email FROM projects
      join
      projects_stakeholders on
      projects.project_id =  projects_stakeholders.project_id
      join
      stakerholders on
      stakerholders.stakeholder_id = projects_stakeholders.stakeholder_id

      WHERE project_timestamp >= now() - INTERVAL 1 DAY

      ";
      $result = $this->DB->query($sql);
      $rows_tasks = $result->fetchAll();

      return $rows_tasks;
    }

    public function get_pending_projects($email) {
      $sql_new_projects = "SELECT * FROM projects
      join
      projects_stakeholders on
      projects.project_id =  projects_stakeholders.project_id
      join
      stakerholders on
      stakerholders.stakeholder_id = projects_stakeholders.stakeholder_id

      WHERE (project_timestamp >= now() - INTERVAL 1 DAY)
      AND (stakeholder_email = '$email')
      ;";
      $result_projects = $this->DB->query($sql_new_projects);
      $rows_projects = $result_projects->fetchAll();

      return $rows_projects;
    }

    public function get_pending_tasks($email) {
      $sql_new_tasks = "SELECT * FROM tasks
      join
      tasks_stakeholders on
      tasks.task_id =  tasks_stakeholders.task_id
      join
      stakerholders on
      stakerholders.stakeholder_id = tasks_stakeholders.stakeholder_id

      WHERE (task_timestamp >= now() - INTERVAL 1 DAY)
      AND (stakeholder_email = '$email')
      ;";
      $result_tasks = $this->DB->query($sql_new_tasks);
      $rows_tasks = $result_tasks->fetchAll();

      return $rows_tasks;
    }

    public function get_pending_events($email) {
      $sql_new_events = "SELECT * FROM events
      join
      events_stakeholders on
      events.event_id =  events_stakeholders.event_id
      join
      stakerholders on
      stakerholders.stakeholder_id = events_stakeholders.stakeholder_id

      WHERE (event_timestamp >= now() - INTERVAL 1 DAY)
      AND (stakeholder_email = '$email')
      ;";
      $result_events = $this->DB->query($sql_new_events);
      $rows_events = $result_events->fetchAll();

      return $rows_events;
    }
}

$obj_new = new lister;

// var_dump($obj_new->get_events());
var_dump($obj_new->get_pending_events("yuri@sa2.com.br"));

// var_dump($obj_new->get_projects());

?>
