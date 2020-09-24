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
<div class="container login-form">
    <h2 class="login-title">- Please Login -</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="login.php">
                <div class="input-group login-userinput">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input required id="txtUser" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input  id="txtPassword" type="password" class="form-control" name="password" placeholder="Password">
                    <span id="showPassword" class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span>
                </div>
                <button name="login" class="btn btn-primary btn-block login-button" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                <div class="checkbox login-options">
                    <label><input type="checkbox"/> Remember Me</label>
                </div>
                <p>Not a user? <a href="registration.php"><b>Registration</b></a> </p>
            </form>
        </div>
    </div>
</div>

</body>
</html>
<script>
    window.onload = function(){$("#showPassword").hide();}

    $("#txtPassword").on('change',function() {
        if($("#txtPassword").val())
        {
            $("#showPassword").show();
        }
        else
        {
            $("#showPassword").hide();
        }
    });

    $(".reveal").on('click',function() {
        var $pwd = $("#txtPassword");
        if ($pwd.attr('type') === 'password')
        {
            $pwd.attr('type', 'text');
        }
        else
        {
            $pwd.attr('type', 'password');
        }
    });
</script>