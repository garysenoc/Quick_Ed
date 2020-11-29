<?php
    include 'database.php';
    $errors = array();

    //REGISTRATION
    if(isset($_POST['accountTypeChosen'])){
            $accountType = $_POST['accountType'];
            if($accountType == "student"){
                header("location: signupstudent.php");
            }else{
                header("location: signupteacher.php");

            }
    }
    if(isset($_POST['register'])){
        $accountType = $_POST['accountType'];
        $fname = ucwords($_POST['fname']);
        $fname = $mysqli->real_escape_string($fname);
        $lname = ucwords($_POST['lname']);
        $lname = $mysqli->real_escape_string($lname);
        $email = $_POST['email'];
        $email = $mysqli->real_escape_string($email);
        $contact = $_POST['contact'];
        $contact = $mysqli->real_escape_string($contact);
        $school = $_POST['school'];
        $school = $mysqli->real_escape_string($school);
        $schoolID = $_POST['schoolID'];
        $schoolID = $mysqli->real_escape_string($schoolID);
        $username = $_POST['username'];
        $username = $mysqli->real_escape_string($username);
        $password = $_POST['password'];
        $password = $mysqli->real_escape_string($password);
        $confirmPassword = $_POST['confirmPassword'];
        $confirmPassword = $mysqli->real_escape_string($confirmPassword);
        if($password != $confirmPassword)
            $errors['p'] = "Passwords must match";

        $password = md5($password);
        //validate
        $userStudent = mysqli_query($mysqli, "SELECT username FROM studentaccounts WHERE username='$username'");
        $userEmailStudent = mysqli_query($mysqli, "SELECT email FROM studentaccounts WHERE email='$email'");
        $userTeacher = mysqli_query($mysqli, "SELECT username FROM teacheraccounts WHERE username='$username'");
        $userEmailTeacher = mysqli_query($mysqli, "SELECT email FROM teacheraccounts WHERE email='$email'");
        if(mysqli_num_rows($userStudent) > 0 || mysqli_num_rows($userTeacher) > 0){
            $errors['u'] = "Username is already taken";
        }
        if(mysqli_num_rows($userEmailStudent) > 0 || mysqli_num_rows($userEmailTeacher) > 0){
            $errors['e'] = "Email is already taken";
        }
        

        if($accountType == "student"){
            if(count($errors) == 0){
                $mysqli->query("INSERT INTO studentaccounts (fname, lname, contact, school, schoolID, username, email, password) VALUES('$fname', '$lname', '$contact', '$school', '$schoolID', '$username', '$email', '$password')") or die($mysqli->error);
                $_SESSION['username'] = $username;
                header("location: dashboardSt.php");
            }else{
                $_SESSION['errors'] = $errors;
                header("location: signupstudent.php");
            }
        }else{
            $subject = $_POST['subject'];
            $subject = $mysqli->real_escape_string($subject);

            if(count($errors) == 0){
                $mysqli->query("INSERT INTO teacheraccounts (fname, lname, contact, school, schoolID, subject, username, email, password) VALUES('$fname', '$lname', '$contact', '$school', '$schoolID', '$subject', '$username', '$email', '$password')") or die($mysqli->error);
                $_SESSION['username'] = $username;
                header("location: dashboardTh.php");
            }else{
                $_SESSION['errors'] = $errors;
                header("location: signupteacher.php");
            }
        }
        
    }//END OF REGISTER

    //UPDATE INFO
    if(isset($_POST['update'])){
        header("location: profileTh.php");
    }

    //LOGIN
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
    
        $userStudent = mysqli_query($mysqli, "SELECT username FROM studentaccounts WHERE username='$username' AND password='$password'");
        $userTeacher = mysqli_query($mysqli, "SELECT username FROM teacheraccounts WHERE username='$username' AND password='$password'");


        if(mysqli_num_rows($userStudent) > 0){
            $curUser = $userStudent->fetch_assoc();
            $_SESSION['username'] = $curUser['username'];
            header("location: dashboardSt.php");
            die;
        }else if(mysqli_num_rows($userTeacher) > 0){
            $curUserTeacher = $userTeacher->fetch_assoc();
            $_SESSION['username'] = $curUserTeacher['username'];
            header("location: dashboardTh.php");
            die;
        }else{
            $errors['w'] = "Wrong Credentials";
            $_SESSION['errors'] = $errors;
            header("location: login.php");
        }
    }
    //LOGOUT
    if(isset($_POST['logout'])){
        session_unset();
        header("location: login.php");
    }
    //SUBJECTS
    if(isset($_POST['viewSubjectTh'])){
        $_SESSION['subjectcode'] = $_POST['subjectcode'];
        $_SESSION['subjecttitle'] = $_POST['subjecttitle'];
        $_SESSION['classroomcode'] = $_POST['classroomcode'];
        header("location: subjectTh2.php");
    }
    if(isset($_POST['viewSubjectThStudentInfo'])){
        $_SESSION['subjectcode'] = $_POST['subjectcode'];
        $_SESSION['subjecttitle'] = $_POST['subjecttitle'];
        $_SESSION['classroomcode'] = $_POST['classroomcode'];
        $_SESSION['studentID'] = $_POST['studentID'];
        header("location: subjectTh3.php");

    }
    //addStudent
    if(isset($_POST['addStudent'])){
        $schoolID = $_POST['schoolID'];
        $student = $mysqli->query("SELECT * FROM studentaccounts where schoolID='$schoolID'");
        $stude = $student->fetch_assoc();
        $name = $stude['lname'] . ', ' . $stude['fname'];
        $teacher = $_SESSION['username'];
        $classroomcode = $_POST['classroomcode'];
        $subjecttitle = $_POST['subjecttitle'];

        $mysqli->query("INSERT INTO $subjecttitle (name,studentID, teacher, classroomcode) VALUES( '$name', '$schoolID', '$teacher', '$classroomcode')") or die($mysqli->error);
        $mysqli->query("UPDATE subjects SET studentsenrolled=studentsenrolled+1 WHERE classroomcode='$classroomcode'");
        header("location: subjectTh2.php");

    }
    //ANNOUNCEMENTS
    if(isset($_POST['post'])){
        $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }

        $username = $_SESSION['username'];
        $user = mysqli_query($mysqli, "SELECT * FROM teacheraccounts WHERE username='$username'");
        $curuser = $user->fetch_assoc();
        $fname = $curuser['fname'];
        $title = $_POST['title'];
        $title = $mysqli->real_escape_string($title);    
        $content = $_POST['content'];
        $content = $mysqli->real_escape_string($content); 
        $time = date("F j, Y, g:i a");   
        $mysqli->query("INSERT INTO announcements (username, time, title, content, fname) VALUES('$username', '$time', '$title', '$content', '$fname')") or die($mysqli->error);
        //call an sms message
        $msg = 'ANNOUNCEMENT! From: ' . $fname . ', Title: ' . $title . ', Content: ' . $content . '.';
        sendAnnouncement($msg);
        $postID = $mysqli->insert_id;
        header("location: $previous#$postID");
    }

    function sendAnnouncement($msg){
        require_once('smsGatewayV4.php');
        global $mysqli;
        $recievers = array();
        $i = 0;
        $rec = $mysqli->query("SELECT * FROM studentaccounts");
        
        while($reci = $rec->fetch_assoc()){
            $recievers[$i] =  $reci['contact'];
            $i++;
        }
        //$recievers[] =  
        $n = count($recievers);
        for($i = 0; $i < $n; $i++){
            $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTYwNjQ4NDc4OSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjg1Njc2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.W4GOq54kz6IikMVTTP_AtmFRwXgR7MWsFFkywoR1Rdc";

            $phone_number = $recievers[$i];
            $message = $msg;
            $deviceID = 121845;
            $options = [];

            $smsGateway = new SmsGateway($token);
            $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
        }
    }

    //SMS
    if(isset($_POST['sendAll'])){
        $subject = $_POST['subject'];
        $studentid = $_POST['studentID'];
        $teacher = $_POST['teacher'];
        include "smsFunctions.php";
        $msg = sendAllGradesSpecific($subject, $studentid,$teacher);
        $rec = $mysqli->query("SELECT * FROM studentaccounts WHERE schoolID = '$studentid'");
        $reci = $rec->fetch_assoc();
        $number = $reci['contact'];
        singleSend($msg, $number);
    }
    

    //FUNCTIONS
    function singleSend($msg, $reciever){
        require_once('smsGatewayV4.php');
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTYwNjQ4NDc4OSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjg1Njc2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.W4GOq54kz6IikMVTTP_AtmFRwXgR7MWsFFkywoR1Rdc";
    
        $phone_number = $reciever;
        $message = $msg;
        $deviceID = 121845;
        $options = [];
    
        $smsGateway = new SmsGateway($token);
        $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
        header("location: subjectTh3.php");
    }
?>