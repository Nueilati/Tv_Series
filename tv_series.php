<?php include('home.php'); ?>

	<?php include ('db/config.php');

	$sql = "SELECT * FROM tbl_series ORDER BY id";
	$rsd = mysql_query ($sql); ?> 

	<div id="main">
		<div id="content">
			<div id="contentleft">
				<a href="new_series.php" title="Ajouter une nouvelle series"> Pour ajouter une nouvelle série TV </a></br>
				<br/> <table border="1" cellpadding="3" cellspacing="3">
					<tr>
						<th width="30"> Rank 1 to 10 </th>
						<th width="120"> Name </th>
						<th width="120"> Created by </th>
						<th width="120"> No of Episodes/Seasons </th>
						<th width="120"> IMDb rating (/10) </th>
						<th width="25"> &nbsp; </th>
					</tr>

					<?php 

					$n = 0;
					while ($row = mysql_fetch_array($rsd)) {
						$n = $n+1;
						$f1 = $row['id'];
						$f2 = $row['createdby'];
						$f3 = $row['seasons'];
						$f4 = $row['rating'];

						?> 

						<tr>
							<td><?php echo $n; ?></td>
							<td><?php echo $f1; ?></td>
							<td><?php echo $f2; ?></td>
							<td><?php echo $f3; ?></td>
							<td><?php echo $f4; ?></td>
							<td><a href="delete_series.php?id=<?php echo $f1 ?>"> Supprimer </a> </td>
						</tr>

						<?php
					}
					?>

					</table>
			</div>
		</div>
	</div>

	<?php include('foot.php'); ?>