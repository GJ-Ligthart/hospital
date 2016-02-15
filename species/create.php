<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Specie</h1>
	<form method="post">
		<div>
			<label for="name">id:</label>
			<input type="text" id="id" name="id">
		</div>
		<div>
			<label for="name">Soort:</label>
			<input type="text" id="soort" name="soort">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>