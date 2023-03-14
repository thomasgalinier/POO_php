<?php 
	require 'User.php';
	$at = new User('Turing', 'Alan'); 
	var_dump($at);
	echo $at->getNom();
?>  