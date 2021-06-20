<!doctype html>
<html lang="en">
    <head>
        <title>RMX Learning</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Ruwan Rohitha, Dulanjali Nadeesha, Shavindu Thushara">
        <meta name="generator" content="Hugo 0.83.1">
        <link href="resources/bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="resources/bootstrap-5.0.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../RRDeveloper/resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="resources/scripts/vanilla-tilt.js" type="text/javascript"></script>

        <link href="resources/stylesheets/common-styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="body">
        <header>
            <nav class="navbar navbar-expand-md rmx-navbar" aria-label="Fourth navbar example">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">RMX Learning</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Courses</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Assets</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="rmx-parallax">
                <div id="layer1"></div>
                <div id="layer2"></div>
                <h2 id="text">Let's begin the journey</h2>
                <div id="layer3"></div>
                <div id="layer4"></div>
                <a href="#sec1" class="rmx-linkbtn" id="btn">Explore</a>
            </div>
        </header>
        <section id="sec1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="c1" class="rmx-card auto">
                            <div class="card-content auto">
                                <i class="fa fa-leanpub medium-icon" aria-hidden="true"></i>
                                <p class="title">HOW DO I START LEARNING</p>
                                <p class="desc">
                                    You can start learning programming in just two steps. First create a profile. Then start a course. It's totally free. Don't you belive me.<br><br>
                                </p>
                                <p class="btn-cover">
                                    <a class="rmx-linkbtn type1" href="<?php echo $login ?>">Get Started</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div id="c2" class="rmx-card">
                            <div class="card-content tilt-card">
                                <i class="fa fa-graduation-cap medium-icon" aria-hidden="true"></i>
                                <p class="title">WHAT CAN YOU LEARN</p>
                                <p class="desc">
                                    You can learn to develop Desktop Applications, Android Applications &amp; Web Applications Using Java, Javascript, PHP, MySQL, HTML, CSS, Bootstrap.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div id="c3" class="rmx-card">
                            <div class="card-content tilt-card">
                                <i class="fa fa-wrench medium-icon" aria-hidden="true"></i>
                                <p class="title">BASIC KNOWLEDGE</p>
                                <p class="desc">
                                    You can learn from the begining. Trust me you can Learn A to Z with us. If you can understand simple English that what we want.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div id="c4" class="rmx-card">
                            <div class="card-content tilt-card">
                                <i class="fa fa-cart-plus medium-icon" aria-hidden="true"></i>
                                <p class="title">WHAT DO YOU NEED</p>
                                <p class="desc">
                                    You must have an Internet Connection &amp; a Computer with a duel core Processor or Up. Thats It.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div id="c5" class="rmx-card">
                            <div class="card-content tilt-card">
                                <i class="fa fa-calendar medium-icon" aria-hidden="true"></i>
                                <p class="title">HOW LONG IT TAKES</p>
                                <p class="desc">
                                    It's upto you. If you really want to learn programming then you can learn quickly. Remember we can only guide you &amp; you have to proceed till the success.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            
        </footer>
        <script>
            let layer1 = document.getElementById("layer1");
            let layer2 = document.getElementById("layer2");
            let layer3 = document.getElementById("layer3");
            let layer4 = document.getElementById("layer4");
            let text = document.getElementById("text");
            let btn = document.getElementById("btn");
            let body = document.getElementById("body");

            window.addEventListener('scroll', function () {
                var value = window.scrollY;

                layer1.style.top = value * 0.6 + 'px';
                layer2.style.top = value * 0.4 + 'px';
                layer3.style.top = value * 0.2 + 'px';
                layer4.style.top = value * 0 + 'px';
//                text.style.left = 'calc(50% - ' + value * 3 + 'px)';
                text.style.top = 'calc(' + value * 1.4 + 'px + 100px)';
                btn.style.top = 'calc(' + value * 1.1 + 'px + 200px)';
//                var r = 30 - (value / 5);
//                var g = 30 - (value / 5);
//                var b = 150 - (value / 6);
//                r = r > 255 ? r = 255 : r < 0 ? r = 0 : r = r + 0;
//                g = g > 255 ? g = 255 : g < 0 ? g = 0 : g = g + 0;
//                b = b > 255 ? b = 255 : b < 0 ? b = 0 : b = b + 0;
//                body.style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
//                console.log(value);
//                console.log(r, g, b);
            })

            VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
                max: 15,
                speed: 200,
                glare: true,
                "max-glare":0.2
            });

        </script>
    </body>
</html>
