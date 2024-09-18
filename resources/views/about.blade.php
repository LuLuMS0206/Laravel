<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="./js/swiper.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/navbarHamb.js" defer></script>
</head>

<body>
    <header class="header">
        <!-- NAVBAR MOBILE-->
        <nav class="header__nav mobile">
            <div class="flex">
                <div class='header__nav--container' id="OpenButtonMenu">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </div>

                <div class="header__nav__logo--container font--archivo">
                    <a href="./index.html" class="contents">
                        <img class="header__nav__logo--container--a--img" src="./assets/imagenes/logoHotel.JPG"
                            alt="logo">
                    </a>
                    <div class="header__nav__logo--container--text">
                        <h2 class="header__nav__logo--container--text--title">HOTEL</h2>
                        <h2 class="header__nav__logo--container--text--subtitle">MIRANDA</h2>
                    </div>
                </div>

                <div class="header__nav--icons">
                    <img src="assets/imagenes/Vector.svg" alt="">
                    <img class="header__nav--icons--search" src="assets/imagenes/search.svg" alt="">
                </div>
            </div>

            <div class="header__nav__menuDesplegable" id="HamburguerMenu">
                <ul class="header__nav__menuDesplegable__list">
                    <li class="header__nav__menuDesplegable__item">
                        <a href="about.html" class="header__nav__menuDesplegable__link font--archivo">About Us</a>
                    </li>
                    <li class="header__nav__menuDesplegable__item">
                        <a href="rooms.html" class="header__nav__menuDesplegable__link font--archivo">Rooms</a>
                    </li>
                    <li class="header__nav__menuDesplegable__item">
                        <a href="offers.html" class="header__nav__menuDesplegable__link font--archivo">Offers</a>
                    </li>
                    <li class="header__nav__menuDesplegable__item">
                        <a href="contact.html" class="header__nav__menuDesplegable__link font--archivo">Contact</a>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- END NAVBAR MOBILE-->

        <!-- ********************************* -->

        <!-- NAVBAR DESKTOP -->
         <nav class="header__nav desktop">
            <div class="header__nav-content flex">
                <div class="space">
                    <a href="./index.html" class="contents">
                        <img class="header__nav__logo--container--a--img" src="./assets/imagenes/logoHotel.JPG"
                            alt="logo">
                    </a>
                </div>
                <div class="header__nav__logo--container--text">
                    <h2 class="header__nav__logo--container--text--title">HOTEL</h2>
                    <h2 class="header__nav__logo--container--text--subtitle">MIRANDA</h2>
                </div>
                <ul class="header__nav__menuDesplegable__list flex">
                    <li class="header__nav__menuDesplegable__item">
                        <a href="about.html" class="header__nav__menuDesplegable__link font--archivo">About Us</a>
                    </li>
                    <li class="header__nav__menuDesplegable__item">
                        <a href="rooms.html" class="header__nav__menuDesplegable__link font--archivo">Rooms</a>
                    </li>
                    <li class="header__nav__menuDesplegable__item">
                        <a href="offers.html" class="header__nav__menuDesplegable__link font--archivo">Offers</a>
                    </li>
                    <li class="header__nav__menuDesplegable__item">
                        <a href="contact.html" class="header__nav__menuDesplegable__link font--archivo">Contact</a>

                    </li>
                </ul>

                <div class="header__nav--icons">
                    <img class="icon" src="assets/imagenes/Vector.svg" alt="">
                    <img class="icon header__nav--icons--search" src="assets/imagenes/search.svg" alt="">
                </div>
            </div>
         </nav>
         <!-- END NAVBAR DESKTOP -->
    </header>

    <!-- SECTION ABOUT -->
    <section class="about">
        <div class="about__content">
            <p class="about__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="about__content__subtitle font--old">About Us</p>
        </div>

        <div class="about__select">
            <p class="about__select__container font--archivo">Home | About</p>
        </div>

        <div class="about__video">
            <iframe class="introVideo__container__video" height="315"
            src="https://www.youtube.com/embed/Bu3Doe45lcU?si=rIg7_7zQ_E1CZcPt&amp;clip=Ugkxow2nTVqo59DJkHr6u3XrlVG9q_gKldk3&amp;clipt=EKjDARj4yQQ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="video__video"></iframe>
            
        </div>
        <p class="about__video__text font--old">Hello. Our hotel has been present for over 20 years. We make the
            best for all our customers.</p>

        <div class="about__squares">
            <div class="about__squares__item">
                <img class="about__squares__item__img" src="assets/imagenes/coffe-about.svg" alt="">
                <p class="about__squares__item__text font--archivo">BREAKFAST</p>
            </div>

            <div class="about__squares__item">
                <img class="about__squares__item__img" src="assets/imagenes/airport.png" alt="">
                <p class="about__squares__item__text font--archivo">AIRPORT PICKUP</p>
            </div>

            <div class="about__squares__item">
                <img class="about__squares__item__img" src="assets/imagenes/gps-about.svg" alt="">
                <p class="about__squares__item__text font--archivo">CITY GUIDE</p>
            </div>

            <div class="about__squares__item">
                <img class="about__squares__item__img" src="assets/imagenes/room-about.svg" alt="">
                <p class="about__squares__item__text font--archivo">LUXURY ROOM</p>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT-->


    <!-- SECTION RESTAURANT -->
    <section class="restaurant">
        <div class="restaurant__img">
            <img class="restaurant__img__container" src="assets/imagenes/food-restaurant.jpg" alt="">
        </div>

        <div class="restaurant__container">
            <p class="restaurant__container__title font--archivo">RESTAURANT</p>
            <h3 class="restaurant__container__subtitle font--old">Get Restaurant Facilities & Many Other More</h3>
            <p class="restaurant__container__text font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do
                eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="button--color restaurant__btn">Take a Tour</button>
        </div>
    </section>
    <!-- END SECTION RESTAURANT -->


    <!-- SECTION FACILITIES -->
    <section class="facilitiesAbout">
        <div class="facilitiesAbout__titles">
            <p class="facilitiesAbout__titles__title font--archivo">FACILITIES</p>
            <p class="facilitiesAbout__titles__subtitle font--old">Core Features</p>
        </div>


        <!-- SLIDER PAGINATION -->
         <div class="swiper-facilities">
        <div class="swiper swiper-pag-abouts ">
            <div class="swiper swiper-pag-about ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                    src="assets/imagenes/icon-facilities.svg" alt="">
                                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/icon01-about.svg"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Have High Rating</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                    src="assets/imagenes/reloj.svg" alt="">
                                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/02.svg"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Quiet Hours</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                    src="assets/imagenes/locations.svg" alt="">
                                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/03.svg"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Best Locations</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                    src="assets/imagenes/cancellation.svg" alt="">
                                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/04.svg"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Free Cancellation</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                    src="assets/imagenes/payment.svg" alt="">
                                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/05.svg"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Payment Options</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                    src="assets/imagenes/special.svg" alt="">
                                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/06.svg"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Special Offers</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
        <!-- END SLIDER PAGINATION -->

            <!-- GRID FOR DESKTOP -->
    <div class="facilitiesGrid">
        <!-- Card 1 -->
        <div class="facilitiesAbout__container">
            <div class="facilitiesAbout__container__icons">
                <img class="facilitiesAbout__container__icons__icon" src="assets/imagenes/icon-facilities.svg" alt="">
                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/icon01-about.svg" alt="">
            </div>
            <div class="facilitiesAbout__container__text">
                <p class="facilitiesAbout__container__text__title font--old">Have High Rating</p>
                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="facilitiesAbout__container">
            <div class="facilitiesAbout__container__icons">
                <img class="facilitiesAbout__container__icons__icon" src="assets/imagenes/reloj.svg" alt="">
                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/02.svg" alt="">
            </div>
            <div class="facilitiesAbout__container__text">
                <p class="facilitiesAbout__container__text__title font--old">Quiet Hours</p>
                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="facilitiesAbout__container">
            <div class="facilitiesAbout__container__icons">
                <img class="facilitiesAbout__container__icons__icon" src="assets/imagenes/locations.svg" alt="">
                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/03.svg" alt="">
            </div>
            <div class="facilitiesAbout__container__text">
                <p class="facilitiesAbout__container__text__title font--old">Best Locations</p>
                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="facilitiesAbout__container">
            <div class="facilitiesAbout__container__icons">
                <img class="facilitiesAbout__container__icons__icon" src="assets/imagenes/cancellation.svg" alt="">
                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/04.svg" alt="">
            </div>
            <div class="facilitiesAbout__container__text">
                <p class="facilitiesAbout__container__text__title font--old">Free Cancellation</p>
                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="facilitiesAbout__container">
            <div class="facilitiesAbout__container__icons">
                <img class="facilitiesAbout__container__icons__icon" src="assets/imagenes/payment.svg" alt="">
                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/05.svg" alt="">
            </div>
            <div class="facilitiesAbout__container__text">
                <p class="facilitiesAbout__container__text__title font--old">Payment Options</p>
                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="facilitiesAbout__container">
            <div class="facilitiesAbout__container__icons">
                <img class="facilitiesAbout__container__icons__icon" src="assets/imagenes/special.svg" alt="">
                <img class="facilitiesAbout__container__icons__01" src="assets/imagenes/06.svg" alt="">
            </div>
            <div class="facilitiesAbout__container__text">
                <p class="facilitiesAbout__container__text__title font--old">Special Offers</p>
                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </div>
    <!-- END GRID -->


    </section>
    <!-- END SECTION FACILITIES -->


<!-- SECTION COUNTER -->
<section class="counter">
    <div class="counter__text">
        <p class="counter__text__title font--archivo">COUNTER</p>
        <h3 class="counter__text__subtitle font--old">Some Fun Facts</h3>
    </div>

    <div class="counter__facts">
        <div class="counter__facts__fact">
            <img class="counter__facts__fact__img" src="assets/imagenes/person-counter.svg" alt="">
            <div class="counter__facts__fact__text">
                <h2 class="counter__facts__fact__text__number font--old">8000</h2>
                <p class="counter__facts__fact__text__p font--roboto"> Happy Users</p>
            </div>
            <img class="counter__facts__imgFlecha" src="assets/imagenes/flecha-counter.svg" alt="">
        </div>

        <div class="counter__facts__fact">
            <img class="counter__facts__fact__img" src="assets/imagenes/star-counter.svg" alt="">
            <div class="counter__facts__fact__text">
                <h2 class="counter__facts__fact__text__number font--old">10M</h2>
                <p class="counter__facts__fact__text__p font--roboto"> Reviews & Appriciate</p>
            </div>
            <img class="counter__facts__imgFlecha" src="assets/imagenes/flecha-counter.svg" alt="">
        </div>

        <div class="counter__facts__fact">
            <img class="counter__facts__fact__img" src="assets/imagenes/world-counter.svg" alt="">
            <div class="counter__facts__fact__text">
                <h2 class="counter__facts__fact__text__number font--old">100</h2>
                <p class="counter__facts__fact__text__p font--roboto"> Country Coverage</p>
            </div>
            <img class="counter__facts__imgFlecha" src="assets/imagenes/flecha-counter.svg" alt="">
        </div>
    </div>

    <!-- SLIDER PAGINATION - SOLO MOVIL -->
    <div class="swiper__pagination__about swiper-pag-abouts">
        <div class="swiper swiper-pag-about">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="counter__img__room" src="assets/imagenes/room-counter.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="counter__img__room" src="assets/imagenes/room-counter.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="counter__img__room" src="assets/imagenes/room-counter.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- END SLIDER PAGINATION -->

    <!-- IMAGENES - DESKTOP -->
    <div class="counter__images">
        <img class="counter__images__img" src="assets/imagenes/room-counter.jpg" alt="Room Image 1">
        <img class="counter__images__img" src="assets/imagenes/room-counter.jpg" alt="Room Image 2">
    </div>
</section>
<!-- END SECTION COUNTER -->




     <!-- FOOTER -->
     <footer class="footer">
        <div class="footer__background">
            <div class="footer__group">
                <div>
                    <div class="footer__container">
                        <img class="footer__container__logo" src="assets/imagenes/logo-footer.JPG" alt="">
                        <div class="footer__container__text">
                            <h2 class="footer__container__text__title font--archivo">HOTEL</h2>
                            <h2 class="footer__container__text__subtitle font--archivo">MIRANDA</h2>
                        </div>
                    </div>

                    <p class="footer__p font--archivo">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed
                        doing eius
                        mod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitat ion
                        ullamco laboris nisi.</p>

                    <div class="footer__logoIcons">
                        <img class="footer__logoIcons__container" src="assets/imagenes/facebook.svg" alt="">
                        <img class="footer__logoIcons__container twitter" src="assets/imagenes/twitter.svg" alt="">
                        <img class="footer__logoIcons__container" src="assets/imagenes/be.svg" alt="">
                        <img class="footer__logoIcons__container" src="assets/imagenes/linkedin.svg" alt="">
                        <img class="footer__logoIcons__container" src="assets/imagenes/youtube.svg" alt="">

                    </div>
                </div>


                <div class="footer__services">
                    <h2 class="footer__services__title font--old">Services.</h2>
                    <div class="footer__services__container">
                        <ul class="footer__services__container__ul font--roboto">
                            <li class="footer__services__container__ul__item">+ Resturent & Bar </li>
                            <li class="footer__services__container__ul__item">+ Swimming Pool</li>
                            <li class="footer__services__container__ul__item">+ Wellness & Spa</li>
                            <li class="footer__services__container__ul__item"> + Restaurant</li>
                            <li class="footer__services__container__ul__item">+ Conference Room</li>
                            <li class="footer__services__container__ul__item"> + Coctail Party House</li>
                        </ul>

                        <ul class="footer__services__container__ul margin font--roboto">
                            <li class="footer__services__container__ul__item">+ Gaming Zone </li>
                            <li class="footer__services__container__ul__item">+ Marrige Party</li>
                            <li class="footer__services__container__ul__item">+ Party Planning</li>
                            <li class="footer__services__container__ul__item"> + Tour Consultancy</li>
                        </ul>
                    </div>
                </div>


                <div class="footer__contact">
                    <h2 class="footer__contact__title">Contact Us.</h2>

                    <div class="footer__contact__container">
                        <div class="footer__contact__container__flex">
                            <img src="assets/imagenes/phone-footer.svg" alt="">
                            <div class="footer__contact__container__info">
                                <p class="footer__contact__container__info__text font--old">Phone Number</p>
                                <p class="footer__contact__container__info__number font--roboto"> +987 876 765 76 577
                                </p>
                            </div>
                        </div>

                        <div class="footer__contact__container__flex">
                            <img src="assets/imagenes/mail-footer.svg" alt="">
                            <div class="footer__contact__container__info">
                                <p class="footer__contact__container__info__text font--old">Email address</p>
                                <p class="footer__contact__container__info__number font--roboto">
                                    contacto@hotelmiranda.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="footer__contact__container__flex">
                        <img src="assets/imagenes/gps-footer.svg" alt="">
                        <div class="footer__contact__container__info">
                            <p class="footer__contact__container__info__text font--old">Location</p>
                            <p class="footer__contact__container__info__number font--roboto">Lorem ipsun dolor sit amet,
                                8</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="footer__copyright">
            <div class="footer__copyright__desktop">
                <p class="footer__copyright__text font--roboto">Copyright By@Example - 2020</p>
                <p class="footer__copyright__text font--roboto">Terms of use | Privacy Environmental Policy</p>
            </div>
            
        </div>
    </footer>

    <!-- END FOOTER -->


</body>

</html>