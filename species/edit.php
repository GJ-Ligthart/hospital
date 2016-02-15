<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit species</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$species['id']?>">
			<label for="name">id:</label>
			<input type="text" id="id" name="id" value="<?=$species['id']?>">
		</div>
		<div>
			<label for="name">Soort:</label>
			<input type="text" id="soort" name="soort" value="<?=$species['Soort']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>