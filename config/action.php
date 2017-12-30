<?php
	var_dump($_POST);
	if(isset($_POST['clear'])){
		mm__clear_session();
	}
?>