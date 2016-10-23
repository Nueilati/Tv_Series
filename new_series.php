<?php include('home.php'); ?>

	<div id="main">
		<div id="content">
			<div id="contentleft">
				<h1>Ajouter une nouvelle série TV</h1>
				<form method="post" action="save_series.php">
					Name <br/>
					<input type="text" name="f1" /><br/>
					Created by <br/>
					<input type="text" name="f2" /><br/>
					No of Episodes/Seasons <br/>
					<input type="text" name="f3" /><br/>
					IMDb rating (/10) <br/>
					<textarea rows="3" name="f4"></textarea><br/>
					<input type="submit" value="Enregistrer" title="Enregistrer" />
				</form>
			</div>
		</div>
	</div>

	<?php include('foot.php'); ?>