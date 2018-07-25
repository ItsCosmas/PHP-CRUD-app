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
    <script src="ckeditor/ckeditor.js"></script> <!-- CK Editor-->

</head>
<body>
<div class="container">
<p>This is My CRUD App</p>
<a href="backend/login.php">Log In</a>
<a href="backend/signup.php">Sign Up</a>
</div>

<div class="container">
<!-- A Bootstrap Table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">note ID</th>
      <th scope="col">note Title</th>
      <th scope="col">note Content</th>
      <th scope="col">note Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><Button type="button" class="btn btn-primary">Edit</Button> <Button type="button" class="btn btn-danger">Delete</Button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><Button type="button" class="btn btn-primary">Edit</Button> <Button type="button" class="btn btn-danger">Delete</Button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><Button type="button" class="btn btn-primary">Edit</Button> <Button type="button" class="btn btn-danger">Delete</Button></td>
    </tr>
  </tbody>
</table>
</div>
<form action="backend/submit.php" method="POST">
<div class="container">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
<label for="noteTitle"><h6>Note Title</h6></label><br>
<input type="text" name="noteTitle" id="" ><br />
<br>
<label for="noteContent"><h6>Note Content</h6></label><br>
<textarea name="noteContent" id="editor" cols="30" rows="8"></textarea><br>
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
CKEDITOR.replace( 'editor' );</script>
</body>
</html>