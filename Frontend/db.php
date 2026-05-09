<?php
 $host="localhost";
 $dbuser="root";
 $dbpass="";
 $dbname="job_tracker";
 $conne=mysqli_connect($host,$dbuser,$dbpass,$dbname);
 if(!$conne)
 {
  die("<h3>connection failed</h3>");
 }
?>
