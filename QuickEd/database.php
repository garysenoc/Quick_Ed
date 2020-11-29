<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        
    }else{
        //header("location: login.php");
    }

    //LOCAL HOST
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbase = 'quicked';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbase) or die(mysqli_error($mysqli));

?>