<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>StarMatch - Personajes</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Halant:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('css/style-starter.css'); }}">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        StarMatch</a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                @include('menu')
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb py-5">
            <div class="container py-lg-5 py-sm-4 mt-5">
                <h4 class="inner-text-title font-weight-bold mb-2">Personajes</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-sm-4">
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                    <img class="img-fluid img-responsive" src="images/kayo.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                    <h6 class="left-text-design">Personajes destacados</h6>
                    <h3 class="title-style mb-2 pl-4">Tips con Kay/o
                    </h3>
                    <p class="mt-3 pl-4">Él es uno de los controladores mas fuertes del juego, con su silencio puedes planear multiples estrategias para derrotar a tu enemigo, además de que posee una granada aturdidora que junto con el silencio lo vuelven un personaje aterrador</p>
                    <p class="mt-3 pl-4">Descubre más aquí</p>
                </div>
            </div>
            <div class="row mt-5 pt-lg-4">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4 order-lg-last">
                    <img class="img-fluid img-responsive" src="images/jett.png" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5 order-lg-first">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con jett
                    </h3>
                    <p class="mt-3 pl-4">Con ella podras ser un asesino muy veloz y escurridizo, jett posee un dash hacia un lado que le facilita sus escapes, además de que puede planear en el aire y un supersalto para despistar s tus enemigos, un agente sin igual.</p>
                    <p class="mt-3 pl-4">Más información</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                    <img class="img-fluid img-responsive" src="images/yoru.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con yoru
                    </h3>
                    <p class="mt-3 pl-4">Yoru es un agente que tiene una gran facilidad para flanquear al enemigo y destruirlo por completo, con su copia falsa que al estallar cega al enemigo es un agente formidable pero un poco complejo de manipular</p>
                    <p class="mt-3 pl-4">Descubre más aquí</p>
                </div>
            </div>
            <div class="row mt-5 pt-lg-4">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4 order-lg-last">
                    <img class="img-fluid img-responsive" src="images/killjoy.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5 order-lg-first">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con killjoy
                    </h3>
                    <p class="mt-3 pl-4">La reina de las trampas, killjoy con sus torretas y sus minas ocultas puede derretir por completo la vida del enemigo en segundos, cualidad la cual la vuelve perfecta para ser una defensa impenetrable.</p>
                    <p class="mt-3 pl-4">Más información</p>
                </div>
            </div>
        </div>
    </section>

     <!-- personajes -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-sm-4">
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                    <img class="img-fluid img-responsive" src="images/kayo.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                    <h6 class="left-text-design">Personajes iniciadores</h6>
                    <h3 class="title-style mb-2 pl-4">Tips con reina
                    </h3>
                    <p class="mt-3 pl-4">reina con sus capacidades de sobrecuración e invulnerabilidad, se vuelve una iniciadora tenaz y una asesina imparable, cuidado con ella</p>
                    <p class="mt-3 pl-4">Descubre más aquí</p>
                </div>
            </div>
            <div class="row mt-5 pt-lg-4">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4 order-lg-last">
                    <img class="img-fluid img-responsive" src="images/jett.png" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5 order-lg-first">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con skye
                    </h3>
                    <p class="mt-3 pl-4">la cegadora por excelencia skye, con sus multiples habilidades para flashear enemigos la vuelve perfecta para entrar a cualquier lugar de forma brutal, asegúrate de no mirar sus animales</p>
                    <p class="mt-3 pl-4">Más información</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                    <img class="img-fluid img-responsive" src="images/yoru.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con cypher
                    </h3>
                    <p class="mt-3 pl-4">Yoru es un agente que tiene una gran facilidad para flanquear al enemigo y destruirlo por completo, con su copia falsa que al estallar cega al enemigo es un agente formidable pero un poco complejo de manipular</p>
                    <p class="mt-3 pl-4">Descubre más aquí</p>
                </div>
            </div>
            <div class="row mt-5 pt-lg-4">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4 order-lg-last">
                    <img class="img-fluid img-responsive" src="images/killjoy.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5 order-lg-first">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con fade
                    </h3>
                    <p class="mt-3 pl-4">La reina de las trampas, killjoy con sus torretas y sus minas ocultas puede derretir por completo la vida del enemigo en segundos, cualidad la cual la vuelve perfecta para ser una defensa impenetrable.</p>
                    <p class="mt-3 pl-4">Más información</p>
                </div>
            </div>
        </div>
    </section>
     <!-- personajes -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-sm-4">
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                    <img class="img-fluid img-responsive" src="images/kayo.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                    <h6 class="left-text-design">Personajes molestos</h6>
                    <h3 class="title-style mb-2 pl-4">Tips con phoenix
                    </h3>
                    <p class="mt-3 pl-4">Él es uno de los controladores mas fuertes del juego, con su silencio puedes planear multiples estrategias para derrotar a tu enemigo, además de que posee una granada aturdidora que junto con el silencio lo vuelven un personaje aterrador</p>
                    <p class="mt-3 pl-4">Descubre más aquí</p>
                </div>
            </div>
            <div class="row mt-5 pt-lg-4">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4 order-lg-last">
                    <img class="img-fluid img-responsive" src="images/jett.png" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5 order-lg-first">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con viper
                    </h3>
                    <p class="mt-3 pl-4">Con ella podras ser un asesino muy veloz y escurridizo, jett posee un dash hacia un lado que le facilita sus escapes, además de que puede planear en el aire y un supersalto para despistar s tus enemigos, un agente sin igual.</p>
                    <p class="mt-3 pl-4">Más información</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                    <img class="img-fluid img-responsive" src="images/yoru.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con chamber
                    </h3>
                    <p class="mt-3 pl-4">Yoru es un agente que tiene una gran facilidad para flanquear al enemigo y destruirlo por completo, con su copia falsa que al estallar cega al enemigo es un agente formidable pero un poco complejo de manipular</p>
                    <p class="mt-3 pl-4">Descubre más aquí</p>
                </div>
            </div>
            <div class="row mt-5 pt-lg-4">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4 order-lg-last">
                    <img class="img-fluid img-responsive" src="images/killjoy.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5 order-lg-first">
                    <h6 class="left-text-design">Personajes </h6>
                    <h3 class="title-style mb-2 pl-4">Tips con brimstone
                    </h3>
                    <p class="mt-3 pl-4">La reina de las trampas, killjoy con sus torretas y sus minas ocultas puede derretir por completo la vida del enemigo en segundos, cualidad la cual la vuelve perfecta para ser una defensa impenetrable.</p>
                    <p class="mt-3 pl-4">Más información</p>
                </div>
            </div>
        </div>
    </section>  
  

    <!-- //contact -->

    <!-- footer -->
    <section class="footer-17">
            <div class="footer17-sub pt-5">
                <div class="container py-md-5 py-4">
                    <div class="text-center mb-4">
                        <a class="footer-logo" href="{{route('/')}}">StarMatch</a>
                    </div>
                   <div class="row footer17-top mt-5 pt-md-5 pt-sm-4">
                        <div class="col-md-3 col-6">
                            <div class="footer17-top-left">
 
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="footer17-top-left">
                                <h6>Correos</h6>
                                <ul>
                                    <li><a href="services.html">andresc.gomez@upb.edu.co</a></li>
                                    <li><a href="services.html">daniel.moralesr@upb.edu.co</a></li>
                                    <li><a href="services.html">samir.colpas@upb.edu.co</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright text-center">
                    <div class="container">
                        <p class="copy-footer-29">© 2021 Aquarium. All rights reserved | Designed by <a
                                href="https://w3layouts.com" target="_blank">W3layouts</a></p>
                    </div>
                </div>
            </div>
        </section>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

 

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('js/theme-change.js'); }}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->

        <!-- common jquery plugin -->
    <script src="{{ asset('js/jquery-3.3.1.min.js'); }}"></script>
    <!-- //common jquery plugin -->
    
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('js/bootstrap.min.js'); }}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

 <a href="https://wa.me/+573122530953" target="_blank">
  <img src="https://icons.iconarchive.com/icons/social-media-icons/glossy-social/72/Whatsapp-icon.png" id="btn_whatsapp" alt="">
 </a>

</body>

</html>