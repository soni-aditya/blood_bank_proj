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
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">A+</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">A-</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">B+</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">B-</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">O+</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">O-</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">AB+</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-block">
                    <h2 class="text-danger">AB-</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum Available Qunatity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="in litres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (in Rs.)</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="per litre">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger">Change</button>
                    </form>
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