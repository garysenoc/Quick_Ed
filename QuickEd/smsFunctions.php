<?php
require_once('smsGatewayV4.php');
function sendAllGradesSpecific($subject, $studentid,$teacher){
    global $mysqli;
    $query = "SELECT * FROM $subject WHERE studentID = '$studentid' and teacher = '$teacher'";
    $result= mysqli_query($mysqli, $query);
    $row=$result->fetch_assoc();
                $a1=$row['a1'];
                $a2=$row['a2'];
                $a3=$row['a3'];
                $a4=$row['a4'];
                $a5=$row['a5'];
                $p1=$row['p1'];
                $p2=$row['p2'];
    
 
    return "Activity 1 = $a1, Activity 2 = $a2,, Activity 3 = $a3,, Activity 4 = $a4, Activity 5 = $a5, Periodical 1 = $p1, Periodical 2 = $p2 ";
}











?>