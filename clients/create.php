<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New client</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Phone:</label>
			<input type="text" id="phone" name="phone">
		</div>
		<div>
			<label for="name">Mail:</label>
			<textarea id="mail" name="mail"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>