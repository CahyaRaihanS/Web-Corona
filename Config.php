<?php
/**
 * using mysql_connect for database connection
 */

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname ="db_corona";

 $mysqli = mysqli_connect($servername, $username, $password, $dbname);
?>