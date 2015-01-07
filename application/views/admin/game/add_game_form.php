<h1>Add Game</h1>
<form method="post" action="<?= base_url() ?>admin/games/createGame">
	<label for="game-name"<Game Name:</label>
	<input type="text" name="game-name" id="game-name">
	<button type="submit" name="submit" id="submit">Add</button>
</form>