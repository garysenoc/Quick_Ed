<?php
 
 
//CRUD (grades for specific subject and students)
 
 
 
function addStudentSubject($subject, $studentId,$teacher){
    $query = "SELECT * FROM studentaccounts WHERE studentid = $studentId";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
                $schoolid=$row['schoolID'];
                
    }
    $query = "INSERT INTO $subject values(null,null,null,null,null,null,null,null,null,$teacher,$schoolid);
    $result= mysqli_query($connection, $query);x
}
 
 
function insertGrade($grade,$subject,$activity,$teacher,$studentId){
 
    $query="UPDATE $subject  SET  $activity  =  $grade  where studentId = $studentId ";
    $insertGrade_query= mysqli_query($connection, $query);
 
}
 
function readGradeGeneral($subject,$teacher){
    $query="SELECT * FROM '.$subject.' WHERE teacher= $teacher";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
                $a1=$row['a1'];
                $a2=$row['a2'];
                $a3=$row['a3'];
                $a4=$row['a4'];
                $a5=$row['a5'];
                $p1=$row['p1'];
                $p2=$row['p2'];
                
    }
}
 
function delete($teacher, $subject,$studentid){
    $query = "DELETE FROM $subject where teacher = $teacher and student = $studentid";
    $query_delete = mysqli_query($connection, $query);
}
 
 
//loop this by ggetting the school id in every subjects
function listStudents($studentId){
    $query = "SELECT * FROM studentaccounts WHERE studentid = $studentId";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
                $a1=$row['fname'];
                $a2=$row['lname'];
                $a3=$row['email'];
                $a4=$row['contact'];
                $a5=$row['school'];
                $p1=$row['schoolID'];
                
    }
    // echo table
}
//send sms
function sendAllGradesSpecific($subject, $studentid,$teacher){
 
    $query = "SELECT * FROM $subject WHERE studentid = $studentid and teacher = $teacher";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
                $a1=$row['a1'];
                $a2=$row['a2'];
                $a3=$row['a3'];
                $a4=$row['a4'];
                $a5=$row['a5'];
                $p1=$row['p1'];
                $p2=$row['p2'];
    }
 
    return "Activity 1 = $a1, Activity 2 = $a2,, Activity 3 = $a3,, Activity 4 = $a4, Activity 5 = $a5, Periodical 1 = $p1, Periodical 2 = $p2 ";
}
//send sms
function sendGradeSpecificActivity($subject, $studentid,$teacher,$activity){
    $query = "SELECT * FROM $subject WHERE studentid = $studentid and teacher = $teacher and activity = $activity";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
                $score=$row[$activity];
            
    }
    return "Hi there! your score for $activity is $score";
}
 
 
function sendGradesGeneral($studentId){
    $subjects =array('math','science','history','english');
 
}
 
function getGradesSpecific(){
    
}
 
function addAnouncement($fname,$username,$title,$content,$time){
        $query = "INSERT INTO announcements values($fname,$username,$title,$content,$time);
        $insert_announcement = mysqli_query($connection, $query);
}
 
function postAnnouncement(){
    $query = "SELECT * FROM announcements";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
                $fname=$row['fname'];
                $title=$row['title'];
                $content=$row['content'];
                $time=$row['time'];
                
 
                echo "put here";
            
    }
}

$connection ------ $mysqli;


