<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body class="home_body">
<nav class="navbar navbar-light bg-default navbar-toggleable-md">
    <span class="navbar-brand text-danger" href="#">
        B+Care Ltd.
    </span>
    <div class="collapse navbar-collapse" id="containerNavbar">
        <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item">
                <a class="nav-link" href="../">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
<hr>
<div class="container">
    <br>
    <p class="text-left text-muted">
        Don't worry, you can trust us
    </p>
    <h1 class="text-center text-danger">Register</h1>
</div>
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <img src="../imgs/new_donation.svg" class="hidden-sm hidden-md" alt="New Registration">
        </div>
        <div class="col ml-auto">
            <form method="post">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                        Name
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="uname" class="form-control" required="required" id="inputEmail3" placeholder="Max 30 characters" maxlength="30">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">
                        Email
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-sm-9">
                        <input type="email" name="mail" class="form-control" id="inputPassword3" required="required" placeholder="@example.com" maxlength="30">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-12 col-form-label">
                        Choose a Password
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-sm-12">
                        <input type="password" name="pword" class="form-control" id="inputPassword3" required="required" placeholder="password should include special characters */$#.@]}%" maxlength="30">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-2">
                        Gender
                        <span class="text-danger">
                            *
                        </span>
                    </legend>
                    <div class="col-sm-10">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="M" checked>
                                Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="F">
                                Female
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="exampleSelect1">
                        Type of customer you are
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <select class="form-control" id="exampleSelect1" name="utype">
                        <option value="1">Hospital</option>
                        <option value="2" selected>Reciever</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">
                        Age
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-10">
                        <input class="form-control" type="number" name="age" value="20" maxlength="3" id="example-number-input" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">
                        Blood Group
                        <span class="text-danger">
                            **
                        </span>
                    </label>
                    <select class="form-control" name="bgroup" id="exampleSelect1">
                        <option value="1" selected>A+</option>
                        <option value="3">A-</option>
                        <option value="4">B+</option>
                        <option value="7">B-</option>
                        <option value="8">O+ (Universal Accepter)</option>
                        <option value="9">O-</option>
                        <option value="10">AB+</option>
                        <option value="11">AB- (Universal doner)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Address</label>
                    <textarea class="form-control" name="address" rows="5" id="comment"></textarea>
                </div>

                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">
                        Mobile
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-10">
                        <input class="form-control" name="mobile" type="number" placeholder="+91-" maxlength="10" minlength="10" id="example-number-input" required="required">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="mr-3 ml-auto">
                        <button type="submit" name="sub" class="btn btn-outline-danger">&nbsp;&nbsp;&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="bg-danger mt-5">
    <div class="container text-center text-white">
        All Rights Rserved by Copyright-XXXX @ 2018
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['sub'])){
    require_once ('../db_scripts.php');
    date_default_timezone_set("Asia/Kolkata");
    //Fetching Information
    $name       =$_POST['uname'];
    $email      =$_POST['mail'];
    $password   =md5($_POST['pword']);
    $gender     =$_POST['gender'];
    $type       =$_POST['utype'];
    $age        =$_POST['age'];
    $blood_group=$_POST['bgroup'];
    $address    =$_POST['address'];
    $mobile     =$_POST['mobile'];
    //Date in Y/M/D HH:MM:SS
    $created    =date('Y-m-d H:i:s');
    $modified   =$created;

    //Inserting information
    $insert_result=Register_Db_Operation::insertData($type,$name,$email,$age,$gender,$mobile,$password,$address,$blood_group,$created,$modified);
    if($insert_result == 1){
        echo "<script type='text/javascript'>  window.location='../index.php'; </script>";
    }
    else{
        echo 'error';
    }
}
?>