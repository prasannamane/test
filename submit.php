<?php

	//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); 
error_reporting(0); 

	include('User.php');

	

	if(isset($_POST))
	{
		//print_r($_POST);

 		$objUser = new User();
 		$objUser->attributes = $_POST;
 		if($objUser->validate())
 		{
 			$objUser->save();

 			echo "data saved";
 		}
 		else
 		{
 			echo User::getErrorSummary($objUser);
 		}
	}
?>

