<?php 
	/* Author: Cozy👽 https://github.com/ItsCosmas */


	include ('connection.php');
    include ('functions/main.php');
    

	if(isset($_SESSION['loggedin'])===false){
		header('Location: ../index.php');
	}else{

 	if($_POST){
		$noteTitle = $_POST['noteTitle'];
        $noteContent = $_POST['noteContent'];
        
        

 		if(empty($noteTitle) or empty($noteContent)){
			$errors = '<div class="alert alert-warning"><strong> All fields are required! </strong> Please try again 😒</div>';
		}else{
				 	
			$query = $pdo->prepare("INSERT INTO `crud`.`notes` ( `noteID` ,`noteTitle`, `noteContent`)
            VALUES ( NULL,?, ?)");
			$query->bindValue(1, $noteTitle);	
			$query->bindValue(2, $noteContent);	
                            
            $query -> execute(); 
		    header('Location: ../index.php');	

					 }
				 	}
				}
	
?>