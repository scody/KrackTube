



<?php
$title=$_GET["title"];
$media_id=$_GET["media_id"];

$username = "sbobonet";
$password = "Zndrtsui!!2";
$hostname = "box458.bluehost.com"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

mysql_select_db("sbobonet_kracktube", $dbhandle) or die(mysql_error());
echo ($result = mysql_query("insert into titles (c_user,title,media_id) values(\"Steve\",\"" . $title . "\",$media_id);");
'$result = mysql_query("insert into titles (c_user,title,media_id) values(\"Steve\",\"" . $title . "\",$media_id);";
?>
