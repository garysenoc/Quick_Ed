<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['username'])){
        header("location: home.php");
    }
    if(isset($_SESSION['errors'])){
        $errors = $_SESSION['errors'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Log In</title>

    <style>
        body {
            background-color: #ffffff;
            margin-top: 0px;
            padding: 0px;
            background-image: url('images/vector.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right -600px top 190px;
            height: 10vh;

        }

        * {
            font-family: "Raleway";
        }

        @media only screen and (max-width: 700px) {

            /* styles for narrow screens */
        }

        .button {
            font-family: "Raleway", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            border: none;
            color: rgb(0, 0, 0);
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 32px;
        }

        .wrapper {
            display: flex;
            align-self: center;
        }

        .container-fluid {
            overflow: hidden;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;

            color: black;
            text-align: left;
            ;
        }

        .input-group {
            position: relative;
            margin: 40px 0 20px;
        }

        input {
            font-size: 18px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 300px;
            border: none;
            border-bottom: 1px solid #757575;
            background-color: #EFF0F6;
        }

        input:focus {
            outline: none;
        }

        label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        input:focus~label,
        input:valid~label {
            top: -20px;
            font-size: 14px;
            color: #4285f4;
        }

        .bar {
            position: relative;
            display: block;
            width: 315px;
        }

        .bar:before,
        .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;

            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .bar:before {
            left: 50%;
        }

        .bar:after {
            right: 50%;
        }

        input:focus~.bar:before,
        input:focus~.bar:after {
            width: 50%;
        }

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }

        input:focus~.highlight {
            -webkit-animation: inputHighlighter 0.3s ease;
            -moz-animation: inputHighlighter 0.3s ease;
            animation: inputHighlighter 0.3s ease;
        }

        /* animations */
        @-webkit-keyframes inputHighlighter {
            from {
                background: #4285f4;
            }

            to {
                width: 0;
                background: transparent;
            }
        }

        @-moz-keyframes inputHighlighter {
            from {
                background: #4285f4;
            }

            to {
                width: 0;
                background: transparent;
            }
        }

        @keyframes inputHighlighter {
            from {
                background: #4285f4;
            }

            to {
                width: 0;
                background: transparent;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <form class="form-inline mr-auto">
            <img src="images/logo.png" alt="" height="80px" width="140px">
            <div class="wrapper">

                <span class="bookTitle">
                    <b style="font-size: 30px; margin: 0px;">Quick-Ed </b><br />

                </span>
            </div>
        </form>

    </nav>

    
    <form action="process.php" method="post">
    <div class="container-fluid" >
    <div class=" row">
        <br>
        <br><br>
    </div>
    <div class=" row ">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-5">
            <h1 style="font-size:50px; font-weight:bolder ">Login</h1>
            
            <div>
                <?php if(isset($errors['w'])) echo '<div class="row alert alert-danger col-lg-6">' . $errors['w'] . '</div>'; ?>


                <div class="input-group">
                    <input type="text" name='username' required style="width:400px;">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Username</label>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required style="width:400px;">
                    <span class=" highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-1">

        </div>

        <div class="col-lg-2">
            <button class="btn button" type="submit" name="login"
                style="margin:0 40px 0px 0px;  height: 48px; width:130px; background-color: #5AA8A2; color: #ffffff; font-weight: normal;">
                Sign In
            </button>
        </div>
        <div class="col-lg-2">
            <a href="signup.php" style="color:#439C96;">Not signed up?</a>
        </div>
        
    </div>
    </div>
    </form>
    <div class="footer" style="padding:20px;">
        <p style="color:#459D97; font-weight: bolder;">This website is created by Teamgyupsal</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>