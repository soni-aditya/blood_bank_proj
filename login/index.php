<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script>
        //Redirect function to handle redirects with any method you want[GET,POST,etc]
        function redirectPost(url,method, data) {
            var form = document.createElement('form');
            document.body.appendChild(form);
            form.method = method.toString();
            form.action = url;
            for (var name in data) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = name;
                input.value = data[name];
                form.appendChild(input);
            }
            form.submit();
        }
    </script>
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
    <h1 class="text-center text-danger">Login</h1>
</div>
<div class="container text-center mt-5">

</div>
<div class="container">
    <div class="row">
        <div class="col-5 ml-auto mr-auto">
            <form method="post">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                        Email
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="mail" id="inputEmail3" placeholder="Max 30 characters" maxlength="30">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                        Password
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="pword" id="inputEmail3" placeholder="Max 30 characters" maxlength="30">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="mr-auto ml-auto">
                        <button type="submit" name="sub" class="btn btn-outline-danger">&nbsp;&nbsp;&nbsp;&nbsp;Sign in&nbsp;&nbsp;&nbsp;&nbsp;</button>
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
    //Fetching Information
    $email      =$_POST['mail'];
    $password   =md5($_POST['pword']);
    //Inserting information
    $insert_result=Login_Db_Operation::getData($email,$password);
    if($insert_result == 1){
        echo "error";
    }
    else if($insert_result == 2){
        echo 'error';
    }
    else{
//        echo "<script type='text/javascript'>  window.location='../'; </script>";
        if($insert_result['type_id'] == 1){
            echo "<script type='text/javascript'> redirectPost('../hospital_logged_in', 'post',{ user_id: '".$insert_result['id']."' }); </script>";
        }
        else{
            echo "<script type='text/javascript'> redirectPost('../reciever_logged_in', 'post',{ user_id: '".$insert_result['id']."' }); </script>";
        }
    }
}
?>