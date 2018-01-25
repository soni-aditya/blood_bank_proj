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

        $.fn.pageMe = function(opts){
            var $this = this,
                defaults = {
                    perPage: 5,
                    showPrevNext: false,
                    hidePageNumbers: false
                },
                settings = $.extend(defaults, opts);

            var listElement = $this;
            var perPage = settings.perPage;
            var children = listElement.children();
            var pager = $('.pager');

            if (typeof settings.childSelector!="undefined") {
                children = listElement.find(settings.childSelector);
            }

            if (typeof settings.pagerSelector!="undefined") {
                pager = $(settings.pagerSelector);
            }

            var numItems = children.length;
            var numPages = Math.ceil(numItems/perPage);

            pager.data("curr",0);

            if (settings.showPrevNext){
                $('<li class="page-item"><a href="#" class="page-link prev_link text-danger">«</a></li>').appendTo(pager);
            }

            var curr = 0;
            while(numPages > curr && (settings.hidePageNumbers==false)){
                $('<li class="page-item"><a href="#" class="page_link page-link">'+(curr+1)+'</a></li>').appendTo(pager);
                curr++;
            }

            if (settings.showPrevNext){
                $('<li class="page-item"><a href="#" class="page-link next_link text-danger">»</a></li>').appendTo(pager);
            }

            pager.find('.page_link:first').addClass('active');
            pager.find('.prev_link').hide();
            if (numPages<=1) {
                pager.find('.next_link').hide();
            }
            pager.children().eq(1).addClass("active");

            children.hide();
            children.slice(0, perPage).show();

            pager.find('li .page_link').click(function(){
                var clickedPage = $(this).html().valueOf()-1;
                goTo(clickedPage,perPage);
                return false;
            });
            pager.find('li .prev_link').click(function(){
                previous();
                return false;
            });
            pager.find('li .next_link').click(function(){
                next();
                return false;
            });

            function previous(){
                var goToPage = parseInt(pager.data("curr")) - 1;
                goTo(goToPage);
            }

            function next(){
                goToPage = parseInt(pager.data("curr")) + 1;
                goTo(goToPage);
            }

            function goTo(page){
                var startAt = page * perPage,
                    endOn = startAt + perPage;

                children.css('display','none').slice(startAt, endOn).show();

                if (page>=1) {
                    pager.find('.prev_link').show();
                }
                else {
                    pager.find('.prev_link').hide();
                }

                if (page<(numPages-1)) {
                    pager.find('.next_link').show();
                }
                else {
                    pager.find('.next_link').hide();
                }

                pager.data("curr",page);
                pager.children().removeClass("active");
                pager.children().eq(page+1).addClass("active");

            }
        };

        $(document).ready(function(){
            $('.collapse').collapse();
            $('[data-toggle="tooltip"]').tooltip()
            $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
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
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link disabled" href="#"><small>Options</small></a>
                <a class="nav-link text-danger mt-3" href="#">
                    <h6>Request Sample</h6>
                </a>
                <a class="nav-link text-danger" href="#">
                    <h6>Edit Contact Details</h6>
                </a>
                <a class="nav-link text-danger mt-5" href="#">
                    <h5>
                        <i class="fa fa-power-off text-danger""></i>
                        &nbsp;&nbsp;Logout
                    </h5>
                </a>
            </nav>
        </div>
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-inverse">
                    <tr>
                        <th>#</th>
                        <th>Hospital</th>
                        <th>Contact</th>
                        <th>Request Date</th>
                        <th>BG Requested</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    <tr>
                        <td>1</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr class="success">
                        <td>5</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><i class="fa fa-circle text-success" data-toggle="tooltip" title="Some tooltip text!"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 text-center">
                <ul class="pagination pagination pager" id="myPager"></ul>
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