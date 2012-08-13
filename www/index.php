<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712
-->


<?php include 'KrackProperties.php'; ?>



<?php

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

mysql_select_db("sbobonet_kracktube", $dbhandle) or die(mysql_error());

$result = mysql_query("SELECT media.x_media_id AS m_id, outtertit.title title, outtertit.curr_votes, outtertit.media_id" .
" FROM media" .
" LEFT JOIN titles AS outtertit ON media.media_id = outtertit.media_id" .
" WHERE outtertit.curr_votes = (" .
" SELECT MAX( innertit.curr_votes )" .
" FROM titles AS innertit" .
" WHERE innertit.media_id = outtertit.media_id ) order by media.c_date asc limit 10" );
?>






<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<title>Captitude</title>
		<link href="style/css.css" rel="stylesheet" type="text/css">
		<link href="style/css_002.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h1>CAPTITUDE</h1>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="#">Home</a></li>
						<li><a href="#">Videos</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Pictures</a></li>
						<li class="last"><a href="useradmin.html">Your Titles</a></li>
					</ul>
					<br class="clearfix">
				</div>
			<div id="login">		
					Login: Twitter | Facebook | Google
			</div>
			</div>

			<div id="page">
				<div id="sidebar">
					<div class="box">
						<h3>Today's Videos</h3>
						<!-- Display todays Media-->
						<ul class="list">
							<!-- list all of todays titles -->
							<?php

							while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
							    printf("<li><a href='#' onClick='changeVid(\"#%s\")'>%s</a>", $row[0],$row[1]);  
							}
							mysql_data_seek($result,0);

							?>
						</ul>
					</div>
				</div>

<?php
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
?>
				<div id="content" >
					<div class="box hideable stopableVids" id="<?php printf("%s",$row[0]); ?>" >
						<div class="vidBody"><H2><?php printf("%s",$row[1]); ?></H2>
							<iframe width="350" height="230"  src="http://www.youtube.com/embed/<?php printf("%s",$row[0]); ?>?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							<div  class="vidFooter">
								<p id="clickMe1" onClick="showComments('#vidComments2')">What would you title it?>><br/>
								<textarea id="titleText<?php printf("%s",$row[3]); ?>"></textarea>
								<a href='#' onClick='submitTitle("<?php printf("%s",$row[3]); ?>")'>submit</a>
								<p>
							</div>	
						</div>
						<div class="vidTitleSection">
							<h3>Runner's Up...</h3>
							<div class="vidTitleVotes">
								<ul class="list" id="titles<?php printf("%s",$row[3]); ?>">
<?php

$result2 = mysql_query("SELECT titles.title_id, titles.title, titles.c_user from titles where titles.media_id=" . $row[3] . " order by titles.curr_votes desc");
while ($row2 = mysql_fetch_array($result2, MYSQL_NUM))
{
?>
	<!--li><span class="button"><a href="#" onClick="vote('<?php printf("%s",$row2[0]); ?>');">vote</a></span>&nbsp;&nbsp;<?php printf("%s",$row2[1]); ?> <div class="createdUser">-<?php printf("%s",$row2[2]); ?></div></li-->
<?php
}
?>
								</ul>										
							</div>	
						</div>
					</div>
					
				</div>

<?php	
	}
mysql_data_seek($result,0);
?>
			<br class="clearfix">						
		</div>
		<div id="footer">
			<!--© 2012 Untitled | Design by <a href="http://www.freecsstemplates.org/">FCT</a> | Images by <a href="http://fotogrph.com/">Fotogrph</a>-->
		</div>

		<div class="result">
....
		</div>
</body>



<script>
var easeRate = 500;

var currentVideo = "";
function changeVid(container) {
  $(".hideable").filter(":visible").toggle(easeRate);
  $(container).toggle(easeRate);
  currentVideo = container;
  //alert(currentVideo);
}

changeVid("#vid1");


function vote(titleId, media_id){
	$.post('/vote.php?title_id=' + titleId, function(data) {
  		$('.result').html(data);
	});

	populateTitles(media_id);

}


function submitTitle(media_id){

	var text = $('#titleText'+media_id).val();
	$.post('/submittitle.php?title=' + text + '&media_id=' + media_id, function(data) {
  		$('.result').html(data);
	});

        populateTitles(media_id);
}


function populateTitles(media_id){

	$.post('/getTitles.php?&media_id=' + media_id, function(data) {
  		$('#titles' + media_id).html(data);
	});
}



<?php
    mysql_data_seek($result,0);

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

	echo("populateTitles(\"" . $row[3] . "\");");
}

    mysql_free_result($result);
    mysql_free_result($result2);
?>
</script>


</html>
