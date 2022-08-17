<?php require(BASE_DIR . '/__templates/public/partials/header.php'); ?>

<form method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
	<input type="text" name="username" autocomplete="off" required>
	<br>
	<input type="password" name="password" autocomplete="off" required>

	<button type="submit">LOGIN</button>
</form>

<?php require(BASE_DIR . '/__templates/public/partials/footer.php'); ?>
