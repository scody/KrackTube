<?php include 'KrackProperties.php'; ?>



<?php
$media_id=$_GET["media_id"];



//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

mysql_select_db("sbobonet_kracktube", $dbhandle) or die(mysql_error());

$result = mysql_query("SELECT titles.title_id, titles.title, titles.c_user from titles where titles.media_id=" . $media_id . " order by titles.curr_votes desc");
while ($row2 = mysql_fetch_array($result, MYSQL_NUM))
{
?>
	<li><span class="button"><a href="#" onClick="vote('<?php printf("%s",$row2[0]); ?>', '<?php echo($media_id); ?>');">vote</a></span>&nbsp;&nbsp;<?php printf("%s",$row2[1]); ?> <div class="createdUser">-<?php printf("%s",$row2[2]); ?></div></li>
<?php
}
?>

