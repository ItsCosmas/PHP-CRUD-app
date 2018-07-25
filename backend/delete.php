<?php

	/* Author: Cozy https://github.com/ItsCosmas */
	
	include_once('connection.php');
	if(isset($_SESSION['loggedin'])===false){
		header('Location: ../index.php');
	}else{


		if(isset($_GET['noteID'])){
			$noteID = $_GET['noteID'];
			
			$query = $pdo->prepare("DELETE FROM `notes` WHERE `notes`.`noteID` = ?");
			$query->bindValue(1,$noteID);
			$query->execute();
			header('Location: ../index.php');
            exit();
        }
            
            
    }
			
?>