<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieMM</title>

    <link href="imgs/favicon.jpg" rel="shortcut icon"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style type="text/css">

        .english{
            font-family: Cambria;
        }
        .img-responsive{
            width: 100%;
        }
        .mydate{
            font-weight: 700;
            color: #0a0b0d;
            background: #10ddb4;
        }
        .myreadmore{
            border-radius: 50px;
            padding: 15px 35px;
            font-size: 18px;
            font-weight: 600;
            color: #0a0b0d;
            background: #10ddb4;
        }
        .hsbdisable {
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
        .thumbimght{
            width: 100%;
            height: 35%;
        }
        .userimght{
            width: 100%;
            height: 75%;
        }
    </style>

</head>
<body>
    <section class="intro">
        <div class="container-fluid p-0 section-data">
            <!--        navigation start	-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand english" href="#" style="font-size: 36px;"><i>MovieMM</i></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto h4">
                        <li class="nav-item">
                            <a class="nav-link english" href="#">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link english" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link english" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link english" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle english" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </nav>
            <!--        navigation end	-->
        </div>
    </section>

    <section class="slideimg">
        <div class="row p-0 m-0">
            <div class="owl-carousel owl-theme">
                <img class="owl-lazy" style="height: 83vh;" data-src="imgs/slide/bg1.jpg" alt="">
                <img class="owl-lazy" style="height: 83vh;" data-src="imgs/slide/bg2.jpg" alt="">
                <img class="owl-lazy" style="height: 83vh;" data-src="imgs/slide/bg3.jpg" alt="">
            </div>
            <div class="text-white text-center align-self-center" style="position: absolute;z-index: 2">
                <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <h1 class="mytext" style="font-size: 50px;"><b>What is your best Movie!</b></h1>
                    <p class="bottomslide" style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                </div>
            </div>
        </div>
    </section>

<!--    body start	-->
    <section>
        <div class="container mt-5">
            <div class="row p-0 m-0">
                <div class="col-md-8">
                    <img class="img-responsive" src="imgs/movies.jpg">
                    <p class="mt-2 h5 english p-2 d-inline-block mydate">April 1,2020</p>
                    <h1 class="pt-2 rightslide">The best Movies of 2020</h1>
                    <div class="d-flex flex-row rightslide">
                        <p>By User</p>
                        <p>&nbsp| <span class="text-warning">3 min</span> ago |&nbsp</p>
                        <p>4comments</p>
                    </div>
                    <p class="pt-1 rightslide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fus
                        ce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi
                    </p>
                    <button type="button" class="btn mt-1 myreadmore">Read More</button>

                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="imgs/post1.jpg" class="img-thumbnail thumbimght">
                            <p class="mt-2 h6 english p-2 d-inline-block mydate">April 1,2020</p>
                            <div class="d-flex flex-row">
                                <p>By User</p>
                                <p>&nbsp| <span class="text-warning">3 min</span> ago |&nbsp</p>
                                <p>4comments</p>
                            </div>
                            <h1 class="pt-2 rightslide">The best Movies of 2020</h1>
                            <p class="pt-1 rightslide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fus
                                ce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi
                            </p>
                            <a href="#" style="color: #10ddb4"><b>Read More</b></a>
                        </div>

                        <div class="col-md-6 mt-3">
                            <img src="imgs/post2.jpg" class="img-thumbnail thumbimght">
                            <p class="mt-2 h6 english p-2 d-inline-block mydate">April 1,2020</p>
                            <div class="d-flex flex-row">
                                <p>By User</p>
                                <p>&nbsp| <span class="text-warning">3 min</span> ago |&nbsp</p>
                                <p>4comments</p>
                            </div>
                            <h1 class="pt-2 rightslide">The best Movies of 2020</h1>
                            <p class="pt-1 rightslide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fus
                                ce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi
                            </p>
                            <a href="#" style="color: #10ddb4"><b>Read More</b></a>
                        </div>

                        <div class="col-md-6 mt-3">
                            <img src="imgs/post3.jpg" class="img-thumbnail thumbimght">
                            <p class="mt-2 h6 english p-2 d-inline-block mydate">April 1,2020</p>
                            <div class="d-flex flex-row">
                                <p>By User</p>
                                <p>&nbsp| <span class="text-warning">3 min</span> ago |&nbsp</p>
                                <p>4comments</p>
                            </div>
                            <h1 class="pt-2 rightslide">The best Movies of 2020</h1>
                            <p class="pt-1 rightslide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fus
                                ce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi
                            </p>
                            <a href="#" style="color: #10ddb4"><b>Read More</b></a>
                        </div>

                        <div class="col-md-6 mt-3 mb-5">
                            <img src="imgs/post4.jpg" class="img-thumbnail thumbimght">
                            <p class="mt-2 h6 english p-2 d-inline-block mydate">April 1,2020</p>
                            <div class="d-flex flex-row">
                                <p>By User</p>
                                <p>&nbsp| <span class="text-warning">3 min</span> ago |&nbsp</p>
                                <p>4comments</p>
                            </div>
                            <h1 class="pt-2 rightslide">The best Movies of 2020</h1>
                            <p class="pt-1 rightslide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fus
                                ce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi
                            </p>
                            <a href="#" style="color: #10ddb4"><b>Read More</b></a>
                        </div>

                    </div>

                </div>
                <div class="col-md-4 hsbdisable">
                    <h1 class="text-center pb-2">Categories</h1>
                    <ul class="list-group ml-0 pl-0">
                        <li class="rightslide list-group-item d-flex justify-content-between align-items-center">
                            Latest
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="rightslide list-group-item d-flex justify-content-between align-items-center">
                            Popular
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="rightslide list-group-item d-flex justify-content-between align-items-center">
                            Highest IMDB
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="rightslide list-group-item d-flex justify-content-between align-items-center">
                            Top Rated
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="rightslide list-group-item d-flex justify-content-between align-items-center">
                            Tv Shows
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                    </ul>

                    <div class="mt-5">
                        <h3>Latest Posts</h3>

                        <div class="row mt-3">
                            <div class="col-4">
                                <img src="imgs/users/user1.png" class="img-thumbnail userimght rounded-0 rightslide">
                            </div>
                            <div class="col-8">
                                <div class="english px-1 d-inline-block mydate rightslide">April 1,2020</div>
                                <h6 class="pt-2 text-white english rightslide"><b>Mandalorian2 is out</b></h6>
                                <div class="row flex-row pl-3 rightslide">
                                    <p>By User</p>
                                    <p>&nbsp| <span class="text-warning">3 min </span>ago |&nbsp</p>
                                    <p>3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-4">
                                <img src="imgs/users/user2.png" class="img-thumbnail userimght rounded-0 rightslide">
                            </div>
                            <div class="col-8">
                                <div class="english px-1 d-inline-block mydate rightslide">April 1,2020</div>
                                <h6 class="pt-2 text-white english rightslide"><b>Mandalorian2 is out</b></h6>
                                <div class="row flex-row pl-3 rightslide">
                                    <p>By User</p>
                                    <p>&nbsp| <span class="text-warning">3 min </span>ago |&nbsp</p>
                                    <p>3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-4">
                                <img src="imgs/users/user3.png" class="img-thumbnail userimght rounded-0 rightslide">
                            </div>
                            <div class="col-8">
                                <div class="english px-1 d-inline-block mydate rightslide">April 1,2020</div>
                                <h6 class="pt-2 text-white english rightslide"><b>Mandalorian2 is out</b></h6>
                                <div class="row flex-row pl-3 rightslide">
                                    <p>By User</p>
                                    <p>&nbsp| <span class="text-warning">3 min </span>ago |&nbsp</p>
                                    <p>3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-4">
                                <img src="imgs/users/user4.png" class="img-thumbnail userimght rounded-0 rightslide">
                            </div>
                            <div class="col-8">
                                <div class="english px-1 d-inline-block mydate rightslide">April 1,2020</div>
                                <h6 class="pt-2 text-white english rightslide"><b>Mandalorian2 is out</b></h6>
                                <div class="row flex-row pl-3 rightslide">
                                    <p>By User</p>
                                    <p>&nbsp| <span class="text-warning">3 min </span>ago |&nbsp</p>
                                    <p>3 comments</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    body end	-->

    <!-- Footer -->
    <footer class="mt-5" style="background-color: #000;">

            <div class="container">
                <div class="row pt-4 align-items-center">

                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Some random text to fill space!</h6>
                    </div>

                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a>
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <a>
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <a>
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <a>
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <a>
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>

                </div>
            </div>
        <hr style="background-color: #2aaacf">

        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3 bottomslide">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Lorem opslkhfh h</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aspernatur, aut consequuntur cupiditate dolor dolores ipsa libero, nam nesciunt nobis o.
                    </p>

                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Loremiph</a>
                    </p>
                    <p>
                        <a href="#!">Loremiphfd</a>
                    </p>
                    <p>
                        <a href="#!">Loremiphg</a>
                    </p>
                    <p>
                        <a href="#!">Loremiphhd nhji</a>
                    </p>

                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Lorem ipsfn</a>
                    </p>
                    <p>
                        <a href="#!">Lorem fjd iof s</a>
                    </p>
                    <p>
                        <a href="#!">Lorem sdjfn ksd</a>
                    </p>
                    <p>
                        <a href="#!">Lorem</a>
                    </p>

                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fas fa-home mr-3"></i> No.xx, 92 St, Elmhurst, NY</p>
                    <p><i class="fas fa-envelope mr-3"></i> tunlinkyaw96@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +1 925 319 7749</p>

                </div>

            </div>
        </div>

        <div class="footer-copyright text-center py-3">
            © 2020 Copyright:
            <a href="#"> tunproject.com</a>
        </div>

    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items:1,
                lazyLoad:true,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:false,
                smartSpeed: 3000,
            });

            window.sr = ScrollReveal({reset: true});
            sr.reveal('.mytext', {
                origin: 'top',
                distance: '50px',
                delay: 375,
                duration: 900,
            });

            sr.reveal('.bottomslide', {
                origin: 'bottom',
                distance: '50px',
                delay: 375,
                duration: 1000,
            });

            sr.reveal('.rightslide', {
                origin: 'right',
                distance: '250px',
                delay: 375,
                duration: 1000,
            });
        });
    </script>
</body>
</html>