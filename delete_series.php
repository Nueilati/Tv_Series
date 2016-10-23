<?php include('home.php'); ?>

	<?php 

	include ('db/config.php');

	$id = $_GET['id'];
	mysql_query("DELETE FROM tbl_series WHERE id='" . $id . "'");
	mysql_close($bd);

	ob_start();

	?>

	<div id="main">
		<div id="content">
			<div id="contentleft">
				
			</div>
		</div>
	</div>