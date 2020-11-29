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
    <title>Sign Up | Teacher</title>
    <link rel="icon" href="./images/icon2.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/register.css">
</head>
<body>
<div class="container">
        <form class="login-form" method="POST" action="process.php">
            <h1>Sign Up</h1>
            <!-- Image -->
            
            <!-- Form-->
            <div class="row">
                <div class="col-3">
                    <div class="file-field">
                        <div class="mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                            </div>
                            <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Add photo</span>
                                <input type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="First name" required>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email"  placeholder="Email Adress" required>
                
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username"  placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="number">Contact number</label>
                <input type="text" class="form-control" name="number" id="number"  placeholder="Contact No." required>
            </div>
            <div class="form-group">
                <label for="school">School</label>
                <input type="text" class="form-control" name="school" id="school"  placeholder="School" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject"  placeholder="Subject" required>
            </div>
            <div class="row">
                <div class="col">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="col">
                    <label for="confirmPassword">Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>  
                </div>
            </div>
            </br>
            <div class="input-group mb-3">
                <input type='hidden' class="hidden" name='accountType' value='teacher'>
                <input type="checkbox">
                 <span><small>I agree with the <a href="#">terms and condition</a> and the <a href="#">privacy policy</a></small></span>
            </div>
            </br>
            <?php if(isset($errors['u'])) echo '<div class="alert alert-danger">' . $errors['u'] . '</div>'; ?>
            <?php if(isset($errors['e'])) echo '<div class="alert alert-danger">' . $errors['e'] . '</div>'; ?>
            <?php if(isset($errors['p'])) echo '<div class="alert alert-danger">' . $errors['p'] . '</div>'; ?>
            <button type="submit" name="register" class="btn btn-primary">Create Account</button>
            </br>
            </br>
            <a class="text-align-center"href="./login.php">Already signed up?</a>
        </form>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>