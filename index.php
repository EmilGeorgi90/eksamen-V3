<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | webshop</title>
    <meta name="description" content="webshop">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="tether-1.3.3/dist/js/tether.js"></script>
    <link rel="stylesheet" href="tether-1.3.3/dist/css/tether.css">
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container-fluid bg-faded">

    <header class="header">
        <div class="container m-auto">
                <div class="row col-12">
                    <div class="header-top-left">
                        <button class="header-top-left-button d-flex" disabled="disabled"><img src="img/ikon.png" alt="Danmark's flag" class="header-top-left-img"><p class="header-top-left-p-icon-span">dansk</p></button>
                        <button class="header-top-left-button" disabled="disabled"><p class="header-top-left-p-DKK">DKK</p></button>
                    </div>
                    <div class="header-top-right ml-auto">
                        <form action="search.php" class="d-flex" method="get">
                            <input type="text" class="search" name="search" placeholder="søgning i produkter">
                            <input type="submit" class="header-top-right-submit" value="søg" name="submit">
                        </form>
                    </div>
                </div>
        </div>
        <hr>
        <div class="container m-auto">
            <div class="row col-12">
                <img src="img/homeIcon.png" alt="tilbage til start menu" href="index.php"><a href="index.php"></a>
            </div>
        </div>
        <hr>
        <div class="container m-auto">
            <div class="row">
                <nav class="navbar navbar-toggleable-md navbar-light ">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Forside <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Produkter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nyheder</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Handelsbetingelser</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Om os</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="header-right-varer  ml-auto mt-auto">
                    <form action="varer.php" class="d-flex" method="get">
                        <input type="text" name="varer" class="header-right-varer-cart" value="din indkøbskurv er tom">
                        <button class="header-right-varer-button" disabled="disabled"><i class="fa fa-shopping-cart" aria-hidden="true" style="font"></i></button>
                    </form>
                </div>
            </div>
        </div>
        </header>
        <hr>
        <div class="container m-auto">
            <main class="main">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/slide2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/slide3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
        </div>
        <hr>
        <div class="container m-auto">
            <h1 class="main-title col-8 m-auto">Fancyclothes.DK - tøj, kvlitet, simpelt</h1>
        </div>
        <hr>
        <div class="container">
            <aside class="aside-search col-2">
            <h3 class="aside-search-categori">Kategorier:</h3>
                <form action="search.php" class="d-flex flex-column" method="get">
                    <input type="button" value="jakker" class="aside-categori-button bg-faded" name="jakker">
                    <input type="button" value="bukser" class="aside-categori-button bg-faded" name="bukser">
                    <input type="button" value="skjorter" class="aside-categori-button bg-faded" name="skjorter">
                    <input type="button" value="strik" class="aside-categori-button bg-faded" name="strik">
                    <input type="button" value="t-shirts & tank tops" class="aside-categori-button bg-faded" name="t-shirts">
                    <input type="button" value="tasker" class="aside-categori-button bg-faded" name="tasker">
                </form>
            </aside>
            <aside class="login col-3 mt-2">
            <h3 class="nyhedsbrev">tilmeld nyhedsbrev</h3>
            <form action="nyhedsbrev d-flex flex-column" method="post">
            <input type="text" name="username" placeholder="navn">
            <input type="text" name="email" placeholder="email">
            </form>
            </aside>
        </div>
        </main>

    </div>

    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')

    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');

    </script>
</body>

</html>
