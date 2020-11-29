<?php include "database.php";
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    $currentuser = $mysqli->query("SELECT * FROM teacheraccounts where username='$username'");
    $user = $currentuser->fetch_assoc();
    $tableTitle = $_SESSION['subjecttitle'];
    $code = $_SESSION['classroomcode'];
    $result = $mysqli->query("SELECT * FROM $tableTitle WHERE classroomcode='$code'") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/subject.css">
    
</head>
<body>
        <svg class="backgroundImg position-fixed" width="100%" height="100%" viewBox="0 0 765 700" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1280.12 1002.85C1359.29 902.215 1403.64 777.576 1410.03 650.51C1417.55 500.989 1414.67 335.347 1319.09 227.788C1222 118.525 1062.46 88.1645 915.784 94.2911C782.562 99.8556 655.874 166.996 553.38 259.771C465.382 339.423 450.788 466.487 390.456 569.798C322.197 686.683 192.818 769.924 177.419 903.556C160.228 1052.74 211.501 1204.84 304.605 1314.82C401.946 1429.81 544.727 1545.38 693.843 1513.6C844.963 1481.4 885.116 1269.89 1004.79 1165.63C1087.93 1093.2 1211.51 1090.07 1280.12 1002.85Z" fill="#BDDAD6"/>
            </svg>
            
    <div class="nav container-fluid ">
        <span class="col-1">
            <img src="./images/logo1.png" alt="logo" class="logo">
        </span>
        <span class="col-5">
            <span class="row label-text">QUICK-ED</span>
            <span class="row extra-small">Sample Text Churvalu</span>
        </span>

        <span class="col">
            <span class="col-md">
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88869 7.99998L10.89 1.99867L16.8913 7.99998H16.89V18H4.89001V7.99998H4.88869ZM2.89001 9.99865L1.4132 11.4755L0 10.0623L9.47699 0.585289C10.2574 -0.195096 11.5226 -0.195096 12.303 0.585289L21.78 10.0623L20.3668 11.4755L18.89 9.99868V18C18.89 19.1045 17.9946 20 16.89 20H4.89001C3.78545 20 2.89001 19.1045 2.89001 18V9.99865Z" fill="#828282"/>
                </svg>
                <a href="./dashboardTh.php" class="btn small-bold">Dashboard</a>
            </span>
            <span class="col-md">
                <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7917 0.125H3.29175C2.46295 0.125 1.66809 0.45424 1.08204 1.04029C0.495988 1.62634 0.166748 2.4212 0.166748 3.25V15.75C0.166748 16.5788 0.495988 17.3737 1.08204 17.9597C1.66809 18.5458 2.46295 18.875 3.29175 18.875H15.7917C16.068 18.875 16.333 18.7653 16.5283 18.5699C16.7237 18.3746 16.8334 18.1096 16.8334 17.8333V1.16667C16.8334 0.890399 16.7237 0.625447 16.5283 0.430097C16.333 0.234747 16.068 0.125 15.7917 0.125ZM3.29175 2.20833H14.7501V12.625H3.29175C2.93639 12.6278 2.58412 12.6912 2.25008 12.8125V3.25C2.25008 2.97373 2.35983 2.70878 2.55518 2.51343C2.75053 2.31808 3.01548 2.20833 3.29175 2.20833ZM3.29175 16.7917C3.01548 16.7917 2.75053 16.6819 2.55518 16.4866C2.35983 16.2912 2.25008 16.0263 2.25008 15.75C2.25008 15.4737 2.35983 15.2088 2.55518 15.0134C2.75053 14.8181 3.01548 14.7083 3.29175 14.7083H14.7501V16.7917H3.29175Z" fill="#828282"/>
                </svg> 
                <a href="./subjectTh1.php" class="btn small-bold active">Subjects</a>
            </span>
            <span class="notification col-md">
                <a href="#">
                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.25 7.49999C13.25 4.45561 11.5712 2.34262 9.39904 1.70828C9.32039 1.50477 9.19608 1.31557 9.02712 1.15682C8.4498 0.614393 7.55021 0.614393 6.97289 1.15682C6.8043 1.31522 6.68017 1.50393 6.60149 1.70693C4.42652 2.33851 2.75 4.44688 2.75 7.49999C2.75 9.47541 2.35174 10.5823 1.61447 11.3845C1.4912 11.5186 1.15724 11.8258 0.93101 12.0339L0.931002 12.0339L0.930981 12.034C0.823954 12.1324 0.741044 12.2087 0.715974 12.234L0.5 12.453V15.0106H5.06598C5.22037 15.8071 5.65256 16.34 6.43415 16.817C7.39561 17.4037 8.60439 17.4037 9.56585 16.817C10.2556 16.396 10.7181 15.7491 10.9057 15.0106H15.5V12.453L15.284 12.234C15.2613 12.2109 15.1817 12.1375 15.0778 12.0416C14.8522 11.8335 14.5117 11.5194 14.3865 11.3827C13.6488 10.5768 13.25 9.46847 13.25 7.49999ZM9.30255 15.0106H6.63395C6.73992 15.2077 6.92052 15.3565 7.21551 15.5365C7.6972 15.8305 8.3028 15.8305 8.78449 15.5365C9.00755 15.4004 9.18185 15.2203 9.30255 15.0106ZM13.2801 12.3955C13.4379 12.5679 13.7762 12.883 14 13.0889V13.5105H2V13.0892C2.22205 12.8858 2.56132 12.5709 2.71886 12.3995C3.72066 11.3095 4.25 9.8383 4.25 7.49995C4.25 4.66487 5.99957 3.00923 8 3.00923C9.99478 3.00923 11.75 4.67341 11.75 7.49995C11.75 9.83079 12.2795 11.3024 13.2801 12.3955Z" fill="#828282"/>
                    </svg>
                </a>
            </span>
            <div class="dropdown col">
                <button class="dropbtn">
                    <span class="profileButton">
                        <img src="./images/profilePic.jpg" alt="" class="profilePic-small">
                    </span>
                    <span class="name small-bold">
                        <?php echo $username ?> 
                    </span>
                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25005 0.100098L6.50005 4.3501L10.75 0.100098L12.4501 0.950098L6.50005 6.9001L0.550049 0.950098L2.25005 0.100098Z" fill="#333333"/>
                    </svg></button>
                <div class="dropdown-content">
                <a href="profileTh.php">Account Profile</a>
                  <form action="process.php" method="POST" id="myform">
                      <input type="hidden" name="logout" value="true">
                        <a href="#" onclick="document.getElementById('myform').submit()">Log Out</a>
                  </form>
                </div>
              </div>
            </div>
        </span>
        
        
            
    <div class="container profile-body">
        <h2><?php echo $_SESSION['subjectcode'] . '-' . $_SESSION['subjecttitle']?></h2><!--USE PHP-->
        <div class="container bodyContainer">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STUDENT</th>
                        <th scope="col">GRADE</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!--USE PHP FETCH-->
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['grade']?></td>
                        <td><form action="process.php" method="POST">
                            <input type="hidden" name="subjectcode" value="<?php echo $code?>">
                            <input type="hidden" name="subjecttitle" value="<?php echo $tableTitle?>">
                            <input type="hidden" name="classroomcode" value="<?php echo $row['classroomcode']?>">
                            <input type="hidden" name="studentID" value="<?php echo $row['studentID']?>">
                            <button class="tableButton" name="viewSubjectThStudentInfo">VIEW</button><button name="deleteSubjectThStudent" class="tableButton">DELETE</button>
                        </form></td>
                        
                    </tr>
                    
                    <?php endwhile;?>
                </tbody>
            </table>
                        
            
            <div class="row justify-content-start">
                <button onclick="openForm()">Add Student</button>
            </div>
        </div>
        <div class="">
            <button class='attachButton'><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.2084 14.6899H1.79171C1.26243 14.6899 0.833374 15.119 0.833374 15.6483C0.833374 16.1775 1.26243 16.6066 1.79171 16.6066H15.2084C15.7376 16.6066 16.1667 16.1775 16.1667 15.6483C16.1667 15.119 15.7376 14.6899 15.2084 14.6899Z" fill="#419B95"/>
                <path d="M0.833374 13.7314L0.833374 15.6481C0.833374 16.1774 1.26243 16.6064 1.79171 16.6064C2.32098 16.6064 2.75004 16.1774 2.75004 15.6481V13.7314C2.75004 13.2022 2.32098 12.7731 1.79171 12.7731C1.26243 12.7731 0.833374 13.2022 0.833374 13.7314Z" fill="#419B95"/>
                <path d="M14.25 13.7314V15.6481C14.25 16.1774 14.6791 16.6064 15.2083 16.6064C15.7376 16.6064 16.1667 16.1774 16.1667 15.6481V13.7314C16.1667 13.2022 15.7376 12.7731 15.2083 12.7731C14.6791 12.7731 14.25 13.2022 14.25 13.7314Z" fill="#419B95"/>
                <path d="M8.50005 11.8151C8.30137 11.8166 8.10714 11.7563 7.94422 11.6426L4.11089 8.94011C3.90428 8.79355 3.76411 8.57114 3.72101 8.32153C3.67791 8.07191 3.73539 7.81538 3.88089 7.60802C3.95352 7.50438 4.04596 7.41615 4.15287 7.34842C4.25978 7.28069 4.37905 7.23481 4.50379 7.21343C4.62853 7.19204 4.75627 7.19558 4.87964 7.22383C5.003 7.25208 5.11955 7.30449 5.22255 7.37802L8.50005 9.66844L11.7584 7.21511C11.9617 7.06261 12.2173 6.99713 12.4689 7.03307C12.7205 7.06902 12.9476 7.20344 13.1001 7.40677C13.2526 7.61011 13.318 7.86569 13.2821 8.1173C13.2461 8.36891 13.1117 8.59594 12.9084 8.74844L9.07506 11.6234C8.90917 11.7479 8.70741 11.8151 8.50005 11.8151Z" fill="#419B95"/>
                <path d="M8.50008 9.89828C8.24592 9.89828 8.00216 9.79731 7.82244 9.61759C7.64272 9.43786 7.54175 9.19411 7.54175 8.93994V1.27327C7.54175 1.01911 7.64272 0.775353 7.82244 0.595631C8.00216 0.415908 8.24592 0.314941 8.50008 0.314941C8.75425 0.314941 8.998 0.415908 9.17773 0.595631C9.35745 0.775353 9.45842 1.01911 9.45842 1.27327V8.93994C9.45842 9.19411 9.35745 9.43786 9.17773 9.61759C8.998 9.79731 8.75425 9.89828 8.50008 9.89828Z" fill="#419B95"/>
                </svg>
                 ATTACH EXCEL FILE</button>
            <input type="text" placeholder="Name of File">
        </div>
        

        
        
        
        
    </div>
    <div id="bgPopup">
    </div>
    <div class="popUPContainer">
        <div class="form-popup " id="myForm">
            <form action="process.php" method="POST" class="form-container">
                <div class="row justify-content-end">
                    <button type='button' class="cancelbtn" onclick="closeForm()">
                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L16 16" stroke="#FF6A40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 16.0005L16 1.00049" stroke="#FF6A40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    
                </div>
              <h3>Add Student</h3>
              <input type="text" placeholder="School ID" name="schoolID">
              <div class="row justify-content-end">
                  <input type="hidden" name="classroomcode" value="<?php echo $code?>">
                  <input type="hidden" name="subjecttitle" value="<?php echo $tableTitle?>">
                <button type="submit" name='addStudent'>Add</button>
                </div>
            </form>
          </div>
    </div>
    
    <script type="text/javascript">
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("bgPopup").style.display = "block";

        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("bgPopup").style.display = "none";


        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>