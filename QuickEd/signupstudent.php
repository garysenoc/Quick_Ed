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
    <title>Sign Up | Student</title>

    <style>
        body {
            background-color: #ffffff;
            margin-top: 0px;
            padding: 0px;
            background-image: url('images/vector.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right -300px top 0px;
            height: 100vh;

        }

        * {
            font-family: arial, helvetica, sans-serif;
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

    <div class="container">
        <div class="row">
            <div class="col-3" style="margin-left:35px;">

            </div>
            <div class="col-5">
                <h1>Sign Up</h1>
            </div>
        </div>
    </div>
    <form class="col-lg-6 offset-lg-3 " method="POST" action="process.php">
        <div class="row justify-content-center ">
            <form method="POST" action="process.php">
                <div class="row">
                    <div class="col-12" style="margin-bottom: 10px;">
                        <input type="text" class="form-control" placeholder="First name"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="fname">
                    </div>
                    <div class="col-12" style="margin-bottom: 10px;">
                        <input type="text" class="form-control" placeholder="Last name"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="lname">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-bottom: 10px;">
                        <input type="email" class="form-control" placeholder="Email Address"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="email">
                    </div>
                    <div class="col-12" style="margin-bottom: 10px;">
                        <input type="text" class="form-control" placeholder="Contact No."
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="contact">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="margin-bottom: 10px;">

                        <select id="inputState" class="form-control" name="school"
                            style="width:470px;background-color:#EFF0F6;color: #A0A3BD;">
                            <option selected>School</option>
                            <option>Cebu Institute of Technnology - University</option>
                            <option>Palawan State University</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" style="margin-bottom: 10px;">
                        <input type="text" class="form-control" placeholder="School ID"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="schoolID">
                    </div>
                    <div class="col-12" style="margin-bottom: 10px;">
                        <input type="text" class="form-control" placeholder="Username"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6" style="margin-bottom: 10px;">
                        <input type="password" class="form-control" placeholder="Password"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="password">
                    </div>
                    <div class="col-6" style="margin-bottom: 10px;">
                        <input type="password" class="form-control" placeholder="Confirm Password"
                            style="background-color:#EFF0F6;color: #A0A3BD;" name="confirmPassword">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="width:300px; margin-right: 200px;">
                        <div class="custom-control custom-checkbox">
                            <input type='hidden' class="hidden" name='accountType' value='student'>
                            <input type="checkbox" class="custom-control-input" id="customControlInline" name="agree">
                            <label class="custom-control-label" for="customControlInline">I agree with the terms and
                                conditions and the privacy policy. </label>
                        </div>
                    </div>
                </div>
                </br>

                <?php if(isset($errors['u'])) echo '<div class="alert alert-danger">' . $errors['u'] . '</div>'; ?>
                <?php if(isset($errors['e'])) echo '<div class="alert alert-danger">' . $errors['e'] . '</div>'; ?>
                <?php if(isset($errors['p'])) echo '<div class="alert alert-danger">' . $errors['p'] . '</div>'; ?>
                <div class="row">

                    <div class="col-12" style="width:300px; margin-left: 440px;">
                        <div class="custom-control custom-checkbox">
                            <br><button type="submit" value="submit" name="register" class="btn button" 
                                style="margin:0 40px 0px 0px;  height: 48px; width:160px; background-color: #5AA8A2; color: #ffffff; font-weight: normal;">Create
                                Account
                            </button>
                        </div>
                    </div>
                </div>
            </form>
    </form>

    </form>
    </div>
    </form>

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