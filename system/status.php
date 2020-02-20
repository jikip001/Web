<?php
error_reporting(0);
header("content-type: text/html; charset=UTF-8");
require('class/mysql_crud.php');
require('class/status.class.php');
require('config.php'); 

$db = new Database($DBCONFIG);
$status = new Status($db);
$allid = $status->count_allid();
$real_users = $status->get_real_users();
$get_map = $status->get_map($IPPORT);
$count_char = $status->count_char();
?>