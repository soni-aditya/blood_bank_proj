<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/jquery.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js"></script>
    <script src="gsap/TweenMax.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script>
        $(document).ready(function(){
            //A bunch of jQuery UI stuff

            var i=0;
            while(i<1){

                var orig = document.querySelector('path'),
                    length,
                    timer;

                var obj = {length:0,
                    pathLength:orig.getTotalLength()};

                orig.style.stroke = 'red';

                var t = TweenMax.to(obj, 10, {length:obj.pathLength, onUpdate:drawLine, ease:Linear.easeNone})

                function drawLine() {
                    orig.style.strokeDasharray = [obj.length,obj.pathLength].join(' ');
                    updateSlider();
                }

                $("#slider").slider({
                    range: false,
                    min: 0,
                    max: 100,
                    step:0.1,
                    slide: function ( event, ui ) {
                    t.pause();
                    t.progress( ui.value/100);
                    }
                });

                function updateSlider() {
                    $("#slider").slider("value", t.progress()*100);
                }
            }
        });
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
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
<hr>
<!--ECG Aniation starts here-->
<svg id="Layer_1" x="0px" y="0px" width="col-sm-12"
     viewBox="0 0 792 140" style="enable-background:new 0 0 792 140;" xml:space="preserve">

        <g id="Layer_2">
            <path class="kiwi" style="fill:none;stroke:#000000;stroke-width:2;" d="M17.902,114.475h26.949c2.296,0,12.876-10.182,20.063-10.182
                c7.186,0,10.83,10.182,12.576,10.182h18.266l7.187,10.779l7.485-100.91l5.091,114.984l6.887-24.554h24.41
                c3.239,0,14.816-16.769,20.206-16.769s11.08,16.47,13.475,16.47c2.845,0,26.665,0,26.665,0l27.757,0
                c2.296,0,12.875-10.181,20.062-10.181c7.186,0,10.831,10.181,12.577,10.181h18.266l7.187,10.779l7.485-100.91l5.091,114.984
                l6.888-24.555h24.41c3.24,0,14.817-16.768,20.207-16.768s11.079,16.469,13.474,16.469c2.845,0,26.666,0,26.666,0h27.813
                c2.297,0,12.877-10.181,20.063-10.181s10.829,10.181,12.576,10.181h18.265l7.188,10.779l7.485-100.91l5.092,114.984l6.887-24.555
                h24.409c3.238,0,14.816-16.768,20.206-16.768s11.08,16.469,13.476,16.469c2.845,0,26.664,0,26.664,0h27.815
                c2.296,0,12.875-10.181,20.063-10.181c7.187,0,10.829,10.181,12.576,10.181h18.265l7.188,10.779l7.486-100.91l5.091,114.984
                l6.887-24.555h24.409c3.238,0,14.816-16.768,20.206-16.768s11.079,16.469,13.476,16.469c2.846,0,26.664,0,26.664,0"/>
        </g>
</svg>
<!--ECG aimation ends here-->

<div class="container">
    <br>
    <p>
        <h1 class="text-center text-danger">Don't waste your blood, Donate !</h1>
        <p class="text-center">
            Many accident victims, innocent children suffering from thalassaemia, pregnant women, cancer patients and
            other people in life threatening situations die due to shortage of blood.
        Here in "B+Care" we value life as a foremost give given to mankind, and therefore we preserve and supply
            blood whenever and whereever needed. So that no life could go wasted without an effort.
        </p>
    </p>
</div>
<div class="container text-center mt-5">
    <a class="btn btn-outline-danger btn-lg mr-5" href="login" role="button">
        &nbsp;&nbsp;&nbsp;
        Login
        &nbsp;&nbsp;&nbsp;
    </a>
    <a class="btn btn-outline-warning btn-lg mr-5" href="register" role="button">
        &nbsp;&nbsp;&nbsp;
        Register
        &nbsp;&nbsp;&nbsp;
    </a>
</div>
<div class="bg-danger mt-5">
    <div class="container text-center text-white">
        All Rights Rserved by Copyright-XXXX @ 2018
    </div>
</div>
</body>
</html>