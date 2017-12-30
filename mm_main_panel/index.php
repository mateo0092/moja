<?php
	require_once('../config/mysql.php');
	require_once('../config/vars.php');
	require_once('../config/function.php');
	require_once('../config/action.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<?php require_once('../szablon/pliki/mPanel/head.php'); ?>
	</head>
	<body>
		<div id="page">
			<header><?php require_once('../szablon/pliki/mPanel/header.php'); ?></header>
			<article><?php require_once('../szablon/pliki/mPanel/article.php'); ?></article>
			<footer><?php require_once('../szablon/pliki/mPanel/footer.php'); ?></footer>
		</div>
	</body>
</html>