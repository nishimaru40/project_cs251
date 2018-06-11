<?php
    mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db($dbname);
    mysql_query("SET NAMES utf8");
?>