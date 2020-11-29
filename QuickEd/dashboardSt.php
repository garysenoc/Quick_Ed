<?php include "database.php";
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    $currentuser = $mysqli->query("SELECT * FROM studentaccounts where username='$username'");
    $user = $currentuser->fetch_assoc();
    $result = $mysqli->query("SELECT * FROM announcements ORDER BY id DESC") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <a href="./dashboardTh.php" class="btn small-bold active">Dashboard</a>
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
                        Name
                    </span>
                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25005 0.100098L6.50005 4.3501L10.75 0.100098L12.4501 0.950098L6.50005 6.9001L0.550049 0.950098L2.25005 0.100098Z" fill="#333333"/>
                    </svg></button>
                <div class="dropdown-content">
                  <a href="profile.php">Account Profile</a>
                  <form action="process.php" method="POST" id="myform">
                      <input type="hidden" name="logout" value="true">
                        <a href="#" onclick="document.getElementById('myform').submit()">Log Out</a>
                  </form>
                </div>
              </div>
            </div>
        </span>
        

        <!-- BODY -->
        <div class="container dashboard">
            <h2>Hello <?php echo $user['fname']?>,</h2>
            <h3 class="dashboardH3">Announcements</h3>
            <div class="container feed">
                
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="postStory">
                        <div class="story" id=<?php echo $row['id'] ?>>
                            <div class="story-head">
                                <h3><?php echo $row['fname']?></h3>
                                <small><?php echo $row['time']?></small>
                            </div>
                            <div class="story-body">
                                <h5><?php echo $row['title']?></h5>
                                <p><?php echo nl2br($row['content'])?></p>
                            </div> 
                        </div>
                        
                    </div>
                    <?php endwhile;?>
           
        </div>


            </div>
        </div>
        
         
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>