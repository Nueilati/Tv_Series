<?php include('home.php'); ?>

	<div id="main">
		<div id="content">
			<div id="contentleft">
				<h1>Contact Us</h1>
				<form action = "send.php" method = "post" name = "Projet_Web">
					<fieldset>
						<legend>
							Type your message here!
						</legend>
						<label for="first_name"> Your Name </label>
						<input type="first_name" name="first_name" id="first_name">
						<label for="email"> Your Mail </label>
						<input type="email" name="email" id="email">
						<label for="message"> Your Message </label>
						<textarea name="message" rows="15" cols="40"></textarea>
						<button type="submit" name="submit" class="style"> Submit </button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>

	<?php include('foot.php'); ?>