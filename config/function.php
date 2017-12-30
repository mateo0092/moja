<?php
	if(!function_exists('mm__login')){
		function mm__login($user,$pass){
			$userData = mm__SelectUser($user);
			$userCheck = mm__CheckLogged($user,mm__hash_password2($pass).$userData['userhash'],$userData['userhash']);
			if(isset($userCheck)){
				if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == $user){
					echo '<h1>Już jesteś zalogowany.</h1>';
				} else {
					$_SESSION['isLogin'] = $user;
					$_SESSION['userUnique'] = mm__unique_user();
				}
			} else {
				
			}
		}
	}
	if(!function_exists('mm__unique_user')){
		function mm__unique_user(){
			$strChars = '0123456789abcdefghijklmnoprstquwvxyzABCDEFGHIJKLMNOPRSTQUWVXYZ';
			$strLenght = strlen($strChars);
			$strHash = '';
			for($i = 0; $i <= 24; $i++){
				$strHash .= $strChars[rand(0,$strLenght-1)];
			}
			return $strHash;
		}
	}
	if(!function_exists('mm__hash_password')){
		function mm__hash_password($password){
			$strLenght = strlen($password);
			$hashList = unserialize(hashList);
			$revertPass = '';
			for($i = 1; $i <= strlen($password); $i++){
				$strLenght = $strLenght -1;
				$revertPass .= $password[$strLenght];
				$revertPass .= '(deli)';
			}
			$revertPassArr = explode('(deli)', $revertPass);
			$revertPass = '';
			foreach ($revertPassArr as $key => $value) {
				if($value !== ''){
					$revertPass .= $hashList[$value];
				}
			}
			$revertPass .= $_SESSION['userUnique'];
			return $revertPass;
		}
	}
	if(!function_exists('mm__hash_password2')){
		function mm__hash_password2($password){
			$strLenght = strlen($password);
			$hashList = unserialize(hashList);
			$revertPass = '';
			for($i = 1; $i <= strlen($password); $i++){
				$strLenght = $strLenght -1;
				$revertPass .= $password[$strLenght];
				$revertPass .= '(deli)';
			}
			$revertPassArr = explode('(deli)', $revertPass);
			$revertPass = '';
			foreach ($revertPassArr as $key => $value) {
				if($value !== ''){
					$revertPass .= $hashList[$value];
				}
			}
			return $revertPass;
		}
	}
	if(!function_exists('mm__dehash_password')){
		function mm__dehash_password($password){
			$password = str_replace($_SESSION['userUnique'],'',$password);
			$strLenght = strlen($password);
			$hashList = unserialize(hashList);
			$revertPass = '';
			for($i = 1; $i <= strlen($password); $i++){
				$strLenght = $strLenght -1;
				$revertPass .= $password[$strLenght];
				$revertPass .= '(deli)';
			}
			$revertPassArr = explode('(deli)', $revertPass);
			$revertPass = '';
			foreach ($revertPassArr as $key => $value) {
				if($value !== ''){
					$revertPass .= $hashList[$value];
				}
			}
			return $revertPass;
		}
	}
	if(!function_exists('mm__clear_session')){
		function mm__clear_session(){
			session_destroy();
			header("Refresh:0");
		}
	}
?>