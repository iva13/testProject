<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Register</h2>
    </div>
<!--    <form method="post" action="registration.php">-->
<!--        --><?php //include ('errors.php') ?>
<!--        <div>-->
<!--            <label for="name">Name</label>-->
<!--            <input type="text" name="name" required>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="email">Email</label>-->
<!--            <input type="email" name="email" required>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="password">Password</label>-->
<!--            <input type="password" name="password_1" required>-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="password">Confirm Password</label>-->
<!--            <input type="password" name="password_2" required>-->
<!--        </div>-->
<!--        <button type="submit" name="reg_user">Submit</button>-->
<!--        <p>Already a user? <a href="login.php"><b>Login</b></a> </p>-->
<!--    </form>-->
</div>


<div class="container login-form">
    <h2 class="login-title">- Please Login -</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="registration.php">
                <?php include ('errors.php') ?>

                <div class="input-group login-userinput">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input required id="txtUser" type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="input-group login-userinput">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input required id="txtUser" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input  id="txtPassword" type="password" class="form-control" name="password_1" placeholder="Password">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input  id="txtPassword" type="password" class="form-control" name="password_2" placeholder="Confirm Password">
                    <span id="showPassword" class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span>
                </div>
                <button name="reg_user" class="btn btn-primary btn-block login-button" type="submit"><i class="fa fa-sign-in"></i> Submit</button>
                <div class="checkbox login-options">
                    <label><input type="checkbox"/> Remember Me</label>
                </div>
                <p>Already a user? <a href="login.php"><b>Login</b></a> </p>
            </form>
        </div>
    </div>
</div>

</body>
</html>