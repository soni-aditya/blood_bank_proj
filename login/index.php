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
//            console.log(form);
            form.submit();
        }
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
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
                        <input type="text" class="form-control" name="mail" id="inputEmail1" placeholder="Max 30 characters" maxlength="30">
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
                        <input type="password" class="form-control" name="pword" id="inputEmail2" placeholder="Max 30 characters" maxlength="30">
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



<!-- Modal -->
<button type="button" class="btn btn-primary" id="modalButton" hidden="hidden" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade mymodal" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">An error occured</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Eighter Username or Password is wrong.<br>
                Please enter correct login credentials.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Ok</button>
            </div>
        </div>
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
    $login_result=Login_Db_Operation::getData($email,$password);
    if($login_result == 1){
        echo "<script>$('#modalButton').click();</script>";
    }
    else if($login_result == 2){
        echo "<script>$('#modalButton').click();</script>";
    }
    else{
        $data="{user_id :   ".$login_result['id'].",
                type_id :   ".$login_result['type_id'].",   
                name    :   '".$login_result['uname']."',
                email   :   '".$login_result['email']."',
                age     :   ".$login_result['age'].",
                gender  :   '".$login_result['gender']."',
                mobile  :   ".$login_result['mobile'].",
                address :   '".$login_result['address']."',
                bg_id   :   ".$login_result['blood_group_id']."
                }";

//        echo "<script type='text/javascript'>  window.location='../'; </script>";
        if($login_result['type_id'] == 1){
            echo "<script type='text/javascript'> redirectPost('../hospital_logged_in/index.php', 'post',".$data."); </script>";
        }
        else{
            echo "<script type='text/javascript'> redirectPost('../reciever_logged_in/index.php', 'post',".$data."); </script>";
        }
    }
}
?>