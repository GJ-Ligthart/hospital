<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete client</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<span><?=$client['Name']?></span>
		</div>
		<div>
			<label for="phone">Phone:</label>
			<span><?=$client['Phone']?></span>
		</div>
		<div>
			<label for="mail">Mail:</label>
			<span><?=$client['Mail']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>