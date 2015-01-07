<table>
	<tr>
		<th>Game Name <a href="<?= base_url() ?>admin/addgame"><i class="fa fa-plus"></i></a></th>
		<th></th>
	</tr>
<?php foreach ($games as $game) : ?>
	<tr>
	    <td><?= $game->gameName ?></td>
	    <td><a href="<?= base_url() ?>admin/editgame/<?= $game->id ?>"><i class="fa fa-pencil"></i></a> <a href="<?= base_url() ?>admin/games/removeGame/<?= $game->id ?>"><i class="fa fa-trash"></i></a></td>
	</tr>
<?php endforeach; ?>
</table>
