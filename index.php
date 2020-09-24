<!DOCTYPE html>
<html lang="">
<head>
    <title>Search</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="bg">
<div class="container" style="padding-top: 20%">


    <div class="container-fluid">
                        <form action="form.php" method="post">

        <div class="wrap">
            <div class="search">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>


            </div>
        </div>
                                            </form>

                            <div class="col-md-12">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <a href="login.php" class="btn btn-info new-b" role="button">Login</a>
                <a href="registration.php" class="btn btn-info new-b" role="button">Registration</a>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>


</div>

</body>
</html>
<style>
    body, html {
        height: 100%;
    }

    .bg {
        /* The image used */
        background-image: url("images/design1.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    body{
        background: #f2f2f2;
        font-family: 'Open Sans', sans-serif;
    }

    .search {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTerm {
        width: 100%;
        border: 3px solid #00B4CC;
        border-right: none;
        padding: 5px;
        /*height: 20px;*/
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #9DBFAF;
    }

    .searchTerm:focus{
        color: #00B4CC;
    }

    .searchButton {
        width: 40px;
        height: 36px;
        border: 1px solid #00B4CC;
        background: #00B4CC;
        text-align: center;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    .new-b {
        width: 49%;
    }
    /*Resize the wrap to see the search bar change!*/
    .wrap{
        width: 30%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>