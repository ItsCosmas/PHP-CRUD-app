<?php 
	/* Author: Cozy👽 https://github.com/ItsCosmas */


	include ('connection.php');
    include ('functions/main.php');

    $theUsers = new Main;
    

	if(isset($_SESSION['loggedin'])===false){
		header('Location: login.php');
	}else{

 	if($_POST){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $userCount = $theUsers->fetchUser($username);
        
        

 		if(empty($fullName) or empty($email) or empty($username) or empty($password) or empty($confirmPassword)){
            $errors = '<div class="alert alert-warning"><strong> All fields are required! </strong> Please try again 😒</div>';
            header('Location: signup.php');
		}else if($password != $confirmPassword){
            $errors = '<div class="alert alert-warning"><strong> Both Passwords should Match! </strong> Please try again 😒</div>';
            header('Location: signup.php');	
        }else if($userCount > 1){
            $errors = '<div class="alert alert-warning"><strong> Username is Taken </strong> Please another one 😒</div>';
            header('Location: signup.php');
           
        }else{
            $dbPassword = md5($password);
            $query = $pdo->prepare("INSERT INTO `crud`.`user` ( `username` ,`userEmail`, `fullName`,`password`)
            VALUES ( ?,?,?,?)");
			$query->bindValue(1, $username);	
            $query->bindValue(2, $email);
            $query->bindValue(3, $fullName);
            $query->bindValue(4, $dbPassword);
                            
            $query -> execute(); 
		    header('Location:login.php');
        }
				 	}
				}
	
?>