<!DOCTYPE html>
<html>
<!-- Author: Cozy https://github.com/ItsCosmas -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/style.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left pageBelowNav">
        <form method="Post" onsubmit=" return Validate()" action="register.php" name="signUp">
            <div class="form-group" id="fullNameFormGroup">
                <label for="fullName">Full Name *</label>
                <input type="text" name="fullName" class="form-control" aria-describedby="Full Name" placeholder="Enter your full Name" onblur="validateNameDetails()" required>
                <div id="nameHelp"></div>
            </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" name="email" aria-describedby="Email" placeholder="Enter your email">
            <div id="emailHelp"></div>
        </div>
        <div class="form-group">
                <label for="username">Username *</label>
                <input type="text" name="username" class="form-control" aria-describedby="User Name" placeholder="Please Pick a Username">
                <div id="usernameHelp"></div>
            </div>
        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" class="form-control" id="password" aria-describedby="Password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password *</label>
            <input type="password" class="form-control" aria-describedby="Confirm Password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your Password">
        </div>
        <input type="checkbox" name="checkbox" style="margin-right:5px;" id="checkbox"><label for="check"> I agree to Terms and Conditions</label></br>
        <button type="submit" name="register" class="btn btn-primary">Register</button>
        <div style="margin-top:10px" id="errors">
                            <?php 
                            if(isset($errors)){
                                echo $errors;
                            }
                            ?>
                    </div>
        </form>
    </div>
</div>

</body>
<script>

// validates password details
function Validate(){
    var pass = document.getElementById("password");
    var confirmPass = document.getElementById("confirmPassword");
    var errorMessageDiv = document.getElementById("errors");
    if (pass.value != "" && confirmPass.value != ""){
        if(pass.value == confirmPass.value){
            return true;
        }
    }
    errorMessageDiv.innerHTML = "<div class=\"alert alert-warning\"><strong> Both Passwords should Match! </strong> Please try again 😒</div>";
    return false
}

// This Function Checks to ensure name is not empty
function validateNameDetails() {
    var name = document.forms['signUp']['fullName'].value;
    var nameHelp = document.getElementById("nameHelp");
        if (name == ""){
            nameHelp.innerHTML = "<small id=\"nameHelp\" class=\"form-text text-muted alert alert-warning\">Name Cannot be Empty</small>";
        }
}
</script>
</html>