<?php
require 'site_data.php';
mysql_connect($mysql_host, $mysql_user, $mysql_password) or die(); 
mysql_select_db($mysql_database) or die();
?>