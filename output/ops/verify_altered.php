<?php
require "../connections/ConnectionManager.php";

echo "<pre>";

class Conex_getter extends ConnectionManager {

  public function __construct() {

    $this->_setConnectionsData();

    $this->conex_data = $this->_connectionsData;

    // var_dump($this->_connectionsData);

  }

}


$conex = new Conex_getter;


echo "pcs";
var_dump($conex->conex_data["sa2_simple_erv_at_sa2_simple_erv_mysql_dbaas_com_br"]["connInfo"]);



?>
