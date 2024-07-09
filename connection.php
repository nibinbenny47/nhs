<?php

$serverName = "DESKTOP-EVUTCMG"; 
$connectionstring = array(
    "Database" => "db_nhs",
    "Uid" => "testuser",
    "PWD" => "test1"
);

$conn = sqlsrv_connect($serverName, $connectionstring);

?>