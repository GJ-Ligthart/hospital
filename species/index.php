<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Soort</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($species as $specie):
?>
			<tr>
				<td><?=$specie['id']?></td>
				<td><?=$specie['Soort']?></td>
				<td class="center"><a href="edit.php?id=<?=$specie['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$specie['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>