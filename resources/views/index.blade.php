<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Miranda</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="./js/swiper.js" defer></script>
    <script src="./js/navbarHamb.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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



    <!-- SECTION MAIN -->
    <section class="main">
        <div class="main__container">
            <div class="main__container--text font--archivo">
                THE ULTIMATE LUXURY EXPERIENCE
            </div>

            <div class="main__container--title font--old">
                The Perfect
                Base For You
            </div>

            <div class="main__container--buttons ">
                <button class="button--color font--archivo">TAKE A TOUR</button>
                <button class="button--black btn font--archivo">LEARN MORE</button>
            </div>

        </div>

        <div class="main__form">
            <form action="" class="main__form__group">
                <div class="main__form--input font--roboto">
                    <p class="main__form--input--text">Arrival Date</p>
                    <input class="main__form--input--container" id="arrival-date" type="date">
                </div>

                <div class="main__form--input left font--roboto">
                    <p class="main__form--input--text">Departure Date</p>
                    <input class="main__form--input--container" id="departure-date" type="date">
                </div>

                <button class="button--color btn font--archivo">CHECK AVAILABILITY</button>
            </form>
        </div>
    </section>
    <!-- END SECTION MAIN -->

    <!-- SECTION ABOUT-US -->
     <div class="sectionAbout">
    <section class="about__us">
        <p class="about__us--title font--archivo">ABOUT US</p>
        <div class="about__us--container">

            <p class="about__us--container--title font--old">Discover Our Underground.</p>
            <p class="about__us--container--text font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <button class="button--color">BOOK NOW</button>
        </div>

    </section>

    <!-- SECTION ABOUT US FEATURES -->
    <section class="about__us__features">
        <div class="about__us__features__employed">
            <img class="about__us__features--img" src="assets/imagenes/personal-hotel.jpg" alt="">
            <div class="about__us__features--feature">
                <img src="assets/imagenes/group-color.svg" alt="">
                <img class="about__us__features--feature--img" src="assets/imagenes/group-white.svg" alt="">
                <p class="about__us__features--feature--title font--old">Strong Team</p>
                <p class="about__us__features--feature--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor.</p>
            </div>
        </div>

        <div class="about__us__features__luxuryRoom">
            <img class="about__us__features--imgLuxury" src="assets/imagenes/hotel-luxury.jpg" alt="">
            <div class="about__us__features--luxury--container">
                <img class="about__us__features--luxury--container--icon" src="assets/imagenes/calendar-luxury.svg"
                    alt="">
                <p class="about__us__features--luxury--container--title font--old">Luxury Room</p>
                <p class="about__us__features--luxury--container--text font--roboto">Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </section>
</div>

    <!-- END SECTION ABOUT US FEATURES -->

    <!-- END SECTION ABOUT-US -->


    <!-- SECTION ROOMS -->
    <section class="rooms">
        <div class="rooms__titles">
            <p class="rooms__titles--title font--archivo">ROOMS</p>
            <p class="rooms__titles--subtitle font--old">Hand Picked Rooms</p>
        </div>


        <!-- Slider main container -->
        <div class="swiper-arrowTests">
            <div class="swiper swiper-arrowFacilities">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">

                        <div class="rooms__container">
                            <div class="rooms__container--iconGroup">
                                <img src="assets/imagenes/room.svg" alt="">
                                <img src="assets/imagenes/wifi.svg" alt="">
                                <img src="assets/imagenes/car.svg" alt="">
                                <img src="assets/imagenes/winter.svg" alt="">

                                <img src="assets/imagenes/gym.svg" alt="">
                                <img src="assets/imagenes/smoke.svg" alt="">
                                <img src="assets/imagenes/cocktel.svg" alt="">
                            </div>

                            <img class="rooms__container__doupleRoom" src="assets/imagenes/doupleRoom.png" alt="">

                            <div class="rooms__container--info">
                                <div class="rooms__container--info--description">
                                    <h2 class="rooms__container--info--description--title font--old">Minimal Duplex Room
                                    </h2>
                                    <p class="rooms__container--info--description--text font--roboto">Lorem ipsum dolor
                                        sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore.</p>
                                </div>

                                <div class="rooms__container--info--price">
                                    <h2 class="rooms__container--info--price--number font--archivo">$345</h2>
                                    <p class="rooms__container--info--price--text">/Night</p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rooms__container">
                            <div class="rooms__container--iconGroup">
                                <img src="assets/imagenes/room.svg" alt="">
                                <img src="assets/imagenes/wifi.svg" alt="">
                                <img src="assets/imagenes/car.svg" alt="">
                                <img src="assets/imagenes/winter.svg" alt="">

                                <img src="assets/imagenes/gym.svg" alt="">
                                <img src="assets/imagenes/smoke.svg" alt="">
                                <img src="assets/imagenes/cocktel.svg" alt="">
                            </div>

                            <img class="rooms__container__doupleRoom" src="assets/imagenes/doupleRoom.png" alt="">

                            <div class="rooms__container--info">
                                <div class="rooms__container--info--description">
                                    <h2 class="rooms__container--info--description--title font--old">Minimal Duplex Room
                                    </h2>
                                    <p class="rooms__container--info--description--text font--roboto">Lorem ipsum dolor
                                        sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore.</p>
                                </div>

                                <div class="rooms__container--info--price">
                                    <h2 class="rooms__container--info--price--number font--archivo">$345</h2>
                                    <p class="rooms__container--info--price--text">/Night</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev--izq"></div>
                <div class="swiper-button-next swiper-button-prev--der"></div>
            </div>
        </div>



    </section>
    <!-- END SECTION ROOMS -->


    <!-- SECTION INTRO VIDEO -->
    <section class="introVideo">
        <div class="introVideo__flex">
            <div class="introVideo__text">
                <p class="introVideo__text--intro font--archivo">INTRO VIDEO</p>
                <h2 class="introVideo__text--title font--old">Meet With Our Luxury Place.</h2>
                <p class="introVideo__text--p font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat you have to understand this.</p>
            </div>
    
            <div class="introVideo__container">
                <iframe class="introVideo__container__video" height="315"
                    src="https://www.youtube.com/embed/Bu3Doe45lcU?si=rIg7_7zQ_E1CZcPt&amp;clip=Ugkxow2nTVqo59DJkHr6u3XrlVG9q_gKldk3&amp;clipt=EKjDARj4yQQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="video__video"></iframe>
    
                <button class="button--color">BOOK NOW</button>
            </div>
        </div>
       

    </section>
    <!-- END SECTION INTRO VIDEO -->






    <!-- SECTION FACILITIES -->
<section class="facilities">
    <div class="facilities__titles">
        <p class="facilities__titles--title font--archivo">Facilities</p>
        <p class="facilities__titles--subtitle font--old">Core Features</p>
    </div>

    <!-- SLIDER PAGINATION - Visible only on mobile -->
    <div class="swiper__pagination swiper__pagination--facilities swiper-mobile">
        <div class="swiper swiper-pag menu__img__container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="assets/imagenes/icon-facilities.svg" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">01</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Have High Rating</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="assets/imagenes/reloj.svg" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">02</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Quiet Hours</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="assets/imagenes/locations.svg" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">03</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Best Locations</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="assets/imagenes/cancellation.svg" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">04</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Free Cancellation</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="assets/imagenes/payment.svg" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">05</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Payment Options</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="assets/imagenes/special.svg" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">06</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Special Offers</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Desktop Grid Version - Hidden on mobile -->
    <div class="facilities-grid-container">
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="assets/imagenes/icon-facilities.svg" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">01</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Have High Rating</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="assets/imagenes/reloj.svg" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">02</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Quiet Hours</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="assets/imagenes/locations.svg" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">03</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Best Locations</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="assets/imagenes/cancellation.svg" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">04</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Free Cancellation</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="assets/imagenes/payment.svg" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">05</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Payment Options</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="assets/imagenes/special.svg" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">06</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Special Offers</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FACILITIES -->



    <!-- SECTION MENU -->
    <section class="menu">
        <div class="menu__img">
            <img src="assets/imagenes/cookie.svg" alt="">
        </div>

        <div class="menu__text ">
            <p class="menu__title font--archivo">MENU</p>
            <p class="menu__subtitle font--old">Our Foods Menu</p>
        </div>

        <!-- SLIDER BUTTONS ARROWS -->
        <div class="swiper-arrows">
            <div class="swiper swiper-arrow">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="menu__container">
                            <div class="menu__container__menus">
                                <img class="menu__container__menus__img" src="assets/imagenes/bacon.jpg" alt="">
                                <div class="menu__container__menus__text">
                                    <p class="menu__container__menus__text__title font--old">Eggs & Bacon</p>
                                    <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet,
                                        consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <div class="menu__container__menus">
                                <img class="menu__container__menus__img" src="assets/imagenes/coffe.jpg" alt="">
                                <div class="menu__container__menus__text">
                                    <p class="menu__container__menus__text__title font--old">Tea or Coffee</p>
                                    <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet,
                                        consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <div class="menu__container__menus">
                                <img class="menu__container__menus__img" src="assets/imagenes/chia2.jpg" alt="">
                                <div class="menu__container__menus__text">
                                    <p class="menu__container__menus__text__title font--old">Chia Oatmeal</p>
                                    <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet,
                                        consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ********* -->
                    <div class="swiper-slide">
                        <div class="menu__container">
                            <div class="menu__container__menus">
                                <img class="menu__container__menus__img" src="assets/imagenes/fruit2.jpg" alt="">
                                <div class="menu__container__menus__text">
                                    <p class="menu__container__menus__text__title font--old">Fruit Parfait</p>
                                    <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet,
                                        consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <div class="menu__container__menus">
                                <img class="menu__container__menus__img" src="assets/imagenes/marmalade.jpg" alt="">
                                <div class="menu__container__menus__text">
                                    <p class="menu__container__menus__text__title font--old">Marmalade Selection</p>
                                    <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet,
                                        consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <div class="menu__container__menus">
                                <img class="menu__container__menus__img" src="assets/imagenes/cheeeesse.jpg" alt="">
                                <div class="menu__container__menus__text">
                                    <p class="menu__container__menus__text__title font--old">Cheese Plate</p>
                                    <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet,
                                        consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev  swiper-button-prev--disable"></div>
                <div class="swiper-button-next swiper-button-prev--menu"></div>
            </div>
        </div>


        <!-- SLIDER PAGINATION -->
        <div class="swiper__pagination">
            <div class="swiper__pagination__desktop">
                <div class="swiper swiper-pag menu__img__container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper ">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img class="menu__img__container__cheese" src="assets/imagenes/cheese.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="menu__img__container__cheese" src="assets/imagenes/marmalade.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="menu__img__container__cheese" src="assets/imagenes/yogurr.jpg" alt="">
                        </div>
                        ...
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            
        </div>
        <!-- END SLIDER PAGINATION -->
    </section>

    <!-- END SECTION MENU -->


    <!-- SECTION ICON FEATURES -->
    <section class="iconFeatures">
        <div class="iconFeatures__container">
            <div class="iconFeatures__container__group">
                <img class="iconFeatures__container__group__img" src="assets/imagenes/nave.svg" alt="">
                <h1 class="iconFeatures__container__group__title font--roboto">84k+</h1>
                <p class="iconFeatures__container__group__subtitle font--roboto">Projects are Completed</p>
            </div>

            <div class="iconFeatures__container__group">
                <img class="iconFeatures__container__group__img" src="assets/imagenes/persons.svg" alt="">
                <h1 class="iconFeatures__container__group__title font--roboto">10M+</h1>
                <p class="iconFeatures__container__group__subtitle font--roboto">Active Backers Around World</p>
            </div>

            <div class="iconFeatures__container__group">
                <img class="iconFeatures__container__group__img" src="assets/imagenes/person-price.svg" alt="">
                <h1 class="iconFeatures__container__group__title font--roboto">02k+</h1>
                <p class="iconFeatures__container__group__subtitle font--roboto">Categories Served</p>
            </div>

            <div class="iconFeatures__container__group">
                <img class="iconFeatures__container__group__img" src="assets/imagenes/book.svg" alt="">
                <h1 class="iconFeatures__container__group__title font--roboto">100M+</h1>
                <p class="iconFeatures__container__group__subtitle font--roboto">Idea Raised Funds</p>
            </div>

        </div>
    </section>
    <!-- END SECTION ICON FEATURES -->


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