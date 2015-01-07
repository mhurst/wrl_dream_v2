<h1>Edit Game</h1>
<form method="post" action="<?= base_url() ?>admin/games/updateGame">
	<label for="game-name"<Game Name:</label>
	<input type="text" name="game-name" id="game-name" value="<?= $game[0]->gameName ?>">
	<input type="hidden" name="id" id="id" value="<?= $game[0]->id ?>">
	<button type="submit" name="submit" id="submit">Add</button>
</form>