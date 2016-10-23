<?php include('home.php'); ?>

	<?php 
	include ('db/config.php');

	$f1 = $_POST['f1'];
	$f2 = $_POST['f2'];
	$f3 = $_POST['f3'];
	$f4 = $_POST['f4'];

	mysql_query("INSERT INTO tbl_series (id, createdby, seasons, rating) VALUES ('". $f1 . "', '". $f2 . "', '". $f3 . "', '". $f4 . "')");
	mysql_close($bd);

	?>

	<div id="main">
		<div id="content">
			<div id="contentleft">
				
			</div>
		</div>
	</div>
