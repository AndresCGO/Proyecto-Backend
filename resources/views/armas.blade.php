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
    <title>StarMatch - Armas</title>
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
                    <a class="navbar-brand d-flex align-items-center" href="{{route('/')}}">
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
        <div class="w3l-breadcrumb py-5">
            <div class="container py-lg-5 py-sm-4 mt-5">
                <h4 class="inner-text-title font-weight-bold mb-2">Armas</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('/')}}">Inicio</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Armas
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- services section -->
    <section class="w3l-services-6 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5 pb-lg-4 pb-2" style="max-width:700px;">
                <h3 class="title-style">Armas del juego</h3>
                <p class="sub-title mt-2">Descripci??n de algunas armas del juego</p>
            </div>
            <div class="row text-center mt-5 pt-5">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <img src="images/vandal.png" alt="" class="img-fluid" />
                        <h4><a href="#feature" class="title-head mt-4">Vandal</a></h4>
                        <p class="mt-3">Rifle especializado para muertes rapidas debido a su precisi??n, tener cuidado al disparar durante mucho tiempo ya que el control se pierde por completo, dejandote vulnerable</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5 pt-md-0 pt-5">
                    <div class="area-box mt-md-0 mt-4">
                        <img src="images/Phantom.png" alt="" class="img-fluid" />
                        <h4><a href="#feature" class="title-head mt-4">Phantom</a></h4>
                        <p class="mt-3">Rifle para encuentros mas largos debido a su gran dispersi??n luego de unos cuantos tiros, aunque se puede disparar por r??fagas sin que deje de ser tan precisa</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <div class="area-box mt-lg-0 mt-4">
                        <img src="images/Operator.png" alt="" class="img-fluid" />
                        <h4><a href="#feature" class="title-head mt-4">Operator</a></h4>
                        <p class="mt-3">El arma m??s letal del juego debido a su poder y exactitud ya que es un francotirador que mata de un solo tiro, mucho cuidado...</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-5 pt-5">
                    <div class="area-box mt-4">
                        <img src="images/sheriff.png" alt="" class="img-fluid" />
                        <h4><a href="#feature" class="title-head mt-4">Sheriff</a></h4>
                        <p class="mt-3">La pistola con m??s poder de sus compa??eras, este arma con 8 tiros tiene una precisi??n abismal y un poder ridiculo cuando se hacen tiros a la cabeza, sin duda tu mejor opci??n si no tienes un arma principal</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-5 pt-5">
                    <div class="area-box mt-4">
                        <img src="images/Odin.png" alt="" class="img-fluid" />
                        <h4><a href="#feature" class="title-head mt-4">Odin</a></h4>
                        <p class="mt-3">Un arma con poco control pero con un cargador muy grande y mucho da??o forman la ametralladora od??n, ideal para defender a los jugadores que prefieren atacar al mismo tiempo en conjunto a un mismo site</p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-5 pt-5">
                    <div class="area-box mt-4">
                        <img src="images/Judge.png" alt="" class="img-fluid" />
                        <h4><a href="#feature" class="title-head mt-4">Judge</a></h4>
                        <p class="mt-3">Ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non.
                            Duis sed et
                            dolor amet.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

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
                        <p class="copy-footer-29">?? 2021 Aquarium. All rights reserved | Designed by <a
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

    <!-- common jquery plugin -->
    <script src="{{ asset('js/jquery-3.3.1.min.js'); }}"></script>
    <!-- //common jquery plugin -->
    
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