<?php include 'KrackProperties.php'; ?>



<?php
$title_id=$_GET["title_id"];

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

mysql_select_db("sbobonet_kracktube", $dbhandle) or die(mysql_error());
//echo "insert into votes (c_user,title_id) values(\"Steve\", " . $title_id . ")";
$result = mysql_query("insert into votes (c_user,title_id) values(\"Steve\", " . $title_id . ")");
$result = mysql_query("UPDATE titles SET curr_votes=curr_votes+1 WHERE title_id=" . $title_id);
?>
