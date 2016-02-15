<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['Name']?>">
		</div>
		<div>
			<label for="name">Phone:</label>
			<input type="text" id="phone" name="phone" value="<?=$client['Phone']?>">
		</div>
		<div>
			<label for="name">Mail:</label>
			<textarea id="mail" name="mail"><?=$client['Mail']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>