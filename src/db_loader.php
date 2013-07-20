<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/ezSQL/shared/ez_sql_core.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/ezSQL/mysql/ez_sql_mysql.php';

$db_user = 'wildstar';
$db_password = 'Fizios84';
$db_name = 'wildstar_wildstardb';
$db_host = 'localhost';

$db = new ezSQL_mysql($db_user,$db_password,$db_name,$db_host);
$db->query("SET NAMES utf8");