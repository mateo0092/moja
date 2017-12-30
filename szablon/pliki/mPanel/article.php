<?php
if(isset($_POST['login'])){
	mm__login($_POST['login'],$_POST['pass']);
}
if(!isset($_SESSION['isLogin'])){
	include_once('login.php');
} else {
	include_once('mPanel.php');
}
?>
<form method="POST">
	<input type="hidden" name="clear" value="true">
	<input type="submit" value="Czyść sesję">
</form>
