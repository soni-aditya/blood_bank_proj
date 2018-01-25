<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        //Redirect function to handle redirects with any method you want[GET,POST,etc]
        function redirectPost(url,method, data) {
            var form = document.createElement('form');
            document.body.appendChild(form);
            form.method = method;
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

        $(document).ready(function(){
            $('.collapse').collapse();
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

<div class="container mt-5 text-danger">
    <div class="row">
        <div class="col">
            <h1>
                <i class="fa fa-edit text-success"></i>
                Welcome,<br>
                You are now logged in.<br>
                You may now proceed with your work.
            </h1>
            <br><br><br>
            <small class="text-muted text-right mt-5">
                Be very cautious with what actions you take
                as this may affect many lifes.
                Hence we request you to be cautious while entering records
            </small>
        </div>

        <div class="col">
            <h2 class="text-muted">
                Total pending Requests : 00
            </h2>
            <br><br>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a class="nav-link text-danger" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-list text-muted"></i>
                                &nbsp;
                                Update Blood Sample details
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-block text-muted">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Its a good practice to update the details of availale blood samples, as it may prove
                            to be a critical asset for someone in times of need.
                            <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here you can update your available sample's report, and also update the per unit price
                            of the blood as per their respective blood groups.
                            <br>
                            <a href="update_details" class="btn btn-outline-danger ml-auto" role="button" aria-disabled="true">
                                &nbsp;&nbsp;&nbsp;Go !&nbsp;&nbsp;&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a class="nav-link text-danger" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-sort-alpha-asc text-muted"></i>
                                &nbsp;
                                View Sample Requests
                            </a>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-block text-muted">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            I times of need when people make request for certain quantity of blood from a specific
                            hospital, it is displayed on their homescreen.This is your homescreen
                            <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Here you may view and respond to the reciever's request and may also contact them.
                            <br>
                            <a href="view_requests" class="btn btn-outline-danger ml-auto" role="button" aria-disabled="true">
                                &nbsp;&nbsp;&nbsp;Go !&nbsp;&nbsp;&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="bg-danger mt-5">
    <footer class="container text-center text-white">
        All Rights Rserved by Copyright-XXXX @ 2018
    </footer>
</div>
</body>
</html>
<?php
//
?>