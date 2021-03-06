<?php include "database.php";
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    $currentuser = $mysqli->query("SELECT * FROM teacheraccounts where username='$username'");
    $user = $currentuser->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/profile.css">
    
</head>
<body>
    <svg class="backgroundImg position-fixed" width="1003" height="700" viewBox="0 0 1003 700" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M-251.411 1265.61C-177.685 1370.3 -70.9867 1448.52 48.9172 1491.06C190.01 1541.12 349.529 1585.83 479.969 1525.09C612.475 1463.39 687.288 1319.25 723.459 1176.97C756.311 1047.74 728.297 907.123 668.791 782.338C617.702 675.203 500.152 624.803 418.467 537.391C326.05 438.496 283.383 290.686 159.771 237.632C21.7704 178.403 -138.639 183.933 -270.692 241.608C-408.756 301.909 -560.398 405.576 -572.697 557.542C-585.161 711.551 -394.027 810.643 -328.443 955.182C-282.883 1055.59 -315.3 1174.88 -251.411 1265.61Z" fill="#BDDAD6"/>
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
                <a href="./subjectTh1.php" class="btn small-bold">Subjects</a>
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
                  <a href="#">Account Profile</a>
                  <a href="#">Messages</a>
                  <form action="process.php" method="POST" id="myform">
                      <input type="hidden" name="logout" value="true">
                        <a href="#" onclick="document.getElementById('myform').submit()">Log Out</a>
                  </form>
                </div>
              </div>
            </div>
        </span>
        
        
            
    <div class="container profile-body">
        <div class="container formContainer">
            <form action="process.php" method="POST">
                <h2>Profile</h2>
                <div class="row">
                    <img class="profilePic mx-auto d-block" src="./images/profilePic.jpg" alt="profile">
                </div>
                <div class="row justify-content-center">
                        <input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $user['fname']?>">
                        <input type="text" name="fname" id="lname" placeholder="Last Name" value="<?php echo $user['lname']?>">
                </div>
                <div class="row justify-content-center">
                    <input type="email" name="email" id="email" placeholder="Email Adress" disabled value="<?php echo $user['email']?>">
                    <input type="text" name="contact" id="contact" placeholder="Contact Number" value="<?php echo $user['contact']?>">
                </div>
                <div class="row justify-content-center">
                    <input type="text" name="school" id="school" placeholder="School" value="<?php echo $user['school']?>">
                    <input type="text" name="schoolID" id="schoolID" placeholder="School ID" value="<?php echo $user['schoolID']?>">
                </div>
                <div class="row justify-content-center">
                    <input type="text" name="username" id="username" placeholder="Username" disabled value="<?php echo $user['username']?>">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="row justify-content-end">
                    <button type="button">Cancel</button>
                    <button type="submit" name="update">Save Changes</button>
                </div>
            </form>
        </div>
        
        
    </div>
    <div class="chatbox" id="chatbox">
    <button type='button' class="cancelbtn" onclick="closeForm()">
                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L16 16" stroke="#FF6A40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 16.0005L16 1.00049" stroke="#FF6A40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
        <ul>
            <li class="him">Good morning, sir</li>
            <li class="me">Yes, how may I help you?</li>
            <li class="me">If you want to know your grades, I will send it to you via sms.</li>
        </ul>
        <input type="text" placeholder="Message">
    </div>
    <script type="text/javascript">
        function openForm() {
            document.getElementById("chatbox").style.display = "block";

        }

        function closeForm() {
            document.getElementById("chatbox").style.display = "none";


        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>