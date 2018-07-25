<?php /*
This is a PHP CRUD App
*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/style.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left pageBelowNav">
        <form method="Post" action="register.php">
            <div class="form-group">
                <label for="fullName">Full Name *</label>
                <input type="text" name="fullName" class="form-control" aria-describedby="Full Name" placeholder="Enter your full Name">
            </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" name="Email" aria-describedby="Email" placeholder="Enter your email">
        </div>
        <div class="form-group">
                <label for="username">Username *</label>
                <input type="text" name="username" class="form-control" aria-describedby="User Name" placeholder="Please Pick a Username">
            </div>
        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" class="form-control" aria-describedby="Password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password *</label>
            <input type="password" class="form-control" aria-describedby="Confirm Password" name="confirmPassword" placeholder="Re-enter your Password">
        </div>
        <input type="checkbox" name="checkbox" style="margin-right:5px;"><label for="check"> I agree to Terms and Conditions</label></br>
        <button type="submit" name="register" class="btn btn-primary">Register</button>
        <div style="margin-top:10px">
                            <?php 
                            if(isset($error)){
                                echo $error;
                            }
                            ?>
                    </div>
        </form>
    </div>
</div>

</body>
</html>