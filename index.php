<?php
	//require_once('config/mysql.php');
	require_once('config/vars.php');
	require_once('config/function.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<?php require_once('szablon/pliki/head.php'); ?>
	</head>
	<body>
		<div id="page">
			<header><?php require_once('szablon/pliki/header.php'); ?></header>
			<article><?php require_once('szablon/pliki/article.php'); ?></article>
			<footer><?php require_once('szablon/pliki/footer.php'); ?></footer>
		</div>
	</body>
</html>