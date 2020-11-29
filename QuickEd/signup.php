<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Sign Up</title>

    <style>
        body {
            background-color: #ffffff;
            margin-top: 0px;
            padding: 0px;
            background-image: url('images/vector.png');
            background-repeat: no-repeat;
            background-size: ;
            background-position: left 800px bottom 400px;
            height: 100vh;

        }

        * {
            font-family: "Raleway";
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


    <div class="container-fluid">
    <div class=" row">
        <br>
        <br><br>
    </div>
    <div class=" row ">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-4">
            <h2 style="font-size:50px; font-weight:bold; font-family:Arial;">Account Type</h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-0 col-md-0  col-sm-0" style="margin-left:80px;">
        </div>
        <div class="col-lg-2 col-md-3  col-sm-3">
            <button class="btn button" type="button" onclick="setAccountType('student')"
                style="margin:30px 40px 30px 30px;  height: 189px; width:189px; background-color: #F2F2F2; color: ##F2F2F2; font-family:arial;">
                <i class="fas fa-pencil-alt  fa-5x" style="color: #828282; margin-top:30px;"></i><br>
                <p style="font-size:30px;">Student</p>
            </button>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3">
            <button class="btn button" type="button" onclick="setAccountType('Educator')"
                style="margin:30px 40px 30px 30px;  height: 189px; width:189px; background-color: #F2F2F2; color: ##F2F2F2; font-family:arial;">
                <i class="fas fa-graduation-cap fa-5x" style="color: #828282; margin-top:30px;"></i><br>
                <p style="font-size:30px;">Educator</p>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-4 " style="">
            <form action="process.php" method="post">
                <input type="hidden" id="accountType" name="accountType" value="student">
                <button class="btn button" type="submit" name="accountTypeChosen"
                    style="margin:0px 80px 80px 45px;  height: 48px; width:130px; background-color: #5AA8A2; color: #ffffff; font-weight: normal;">
                    Proceed
                </button>
            </form>
            
        </div>
    </div>
    </div>
    <script>
        accountType = document.getElementById('accountType');
        function setAccountType(aType){
            accountType.value = aType;
        }

    </script>
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