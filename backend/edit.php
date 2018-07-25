<?php
include_once ('connection.php');
include_once ('functions/main.php');

$theNotes = new Main;
$notes;

	if(isset($_SESSION['loggedin'])===false){
		header('Location: ../index.php');
	}else{

    if(isset($_GET['noteID'])){
            $noteID = $_GET['noteID'];
            $notes = $theNotes->fetchNoteData($noteID);

 	if($_POST){
		$noteTitle = $_POST['noteTitle'];
        $noteContent = $_POST['noteContent'];
        
        

 		if(empty($noteTitle) or empty($noteContent)){
			$errors = '<div class="alert alert-warning"><strong> All fields are required! </strong> Please try again 😒</div>';
		}else{
				 	
			$query = $pdo->prepare("UPDATE `crud.notes` SET `noteTitle` = ?, `noteContent` = ?)
            VALUES ( ?, ?)");
			$query->bindValue(1, $noteTitle);	
			$query->bindValue(2, $noteContent);	
                            
            $query -> execute(); 
		    header('Location: ../index.php');	

					 }
				 	}
                }
            }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../ckeditor/ckeditor.js"></script> <!-- CK Editor-->

</head>
<body>

<form action="" method="POST">
<div class="container">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
<label for="noteTitle"><h6>Note Title</h6></label><br>
<input type="text" name="noteTitle" id="" value="<?php echo $notes['noteTitle'];?>" ><br />
<br>
<label for="noteContent"><h6>Note Content</h6></label><br>
<textarea name="noteContent" id="editor" cols="30" rows="8"><?php echo $notes['noteContent'] ?></textarea><br>
<button type="submit" class="btn btn-primary">Publish</button></div>
</div>
</form>
<div class="container">
<!--show erros if isset-->
<?php if(isset($errors)){
                                echo $errors;
                            }?>
</div>
    
<script>
//<!-- This Script Adds CK Editor to the page -->
CKEDITOR.replace( 'editor' );
</script>

</body>
</html>