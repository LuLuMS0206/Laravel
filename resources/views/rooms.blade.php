<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href='styles.css' rel='stylesheet'>
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

    <!-- SECTION ROOMS PAGE -->
    <section class="roomsPage">

        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">Ultimate Room</p>
        </div>

        <div class="roomsPage__select">
            <p class="roomsPage__select__container font--archivo">Home | Rooms</p>
        </div>

        <div class="roomsPage__grid">
            <div class="roomsPage__cards">
                <img class="roomsPage__cards__img" src="assets/imagenes/room-counter.jpg" alt="">
    
                <div class="roomsPage__cards__iconGroup">
                    <img src="assets/imagenes/room.svg" alt="">
                    <img src="assets/imagenes/wifi.svg" alt="">
                    <img src="assets/imagenes/car.svg" alt="">
                    <img src="assets/imagenes/winter.svg" alt="">
    
                    <img src="assets/imagenes/gym.svg" alt="">
                    <img src="assets/imagenes/smoke.svg" alt="">
                    <img src="assets/imagenes/cocktel.svg" alt="">
                </div>
    
                <div class="roomsPage__cards__info">
                    <div class="roomsPage__cards__info__description">
                        <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                        <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    </div>
    
    
                    <div class="roomsPage__cards__info__price">
                        <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                        <a href="roomsDetail.html">
                            <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="roomsPage__cards">
                <img class="roomsPage__cards__img" src="assets/imagenes/room-counter.jpg" alt="">
    
                <div class="roomsPage__cards__iconGroup">
                    <img src="assets/imagenes/room.svg" alt="">
                    <img src="assets/imagenes/wifi.svg" alt="">
                    <img src="assets/imagenes/car.svg" alt="">
                    <img src="assets/imagenes/winter.svg" alt="">
    
                    <img src="assets/imagenes/gym.svg" alt="">
                    <img src="assets/imagenes/smoke.svg" alt="">
                    <img src="assets/imagenes/cocktel.svg" alt="">
                </div>
    
                <div class="roomsPage__cards__info">
                    <div class="roomsPage__cards__info__description">
                        <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                        <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    </div>
    
    
                    <div class="roomsPage__cards__info__price">
                        <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                        <a href="roomsDetail.html">
                            <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="roomsPage__cards">
                <img class="roomsPage__cards__img" src="assets/imagenes/room-counter.jpg" alt="">
    
                <div class="roomsPage__cards__iconGroup">
                    <img src="assets/imagenes/room.svg" alt="">
                    <img src="assets/imagenes/wifi.svg" alt="">
                    <img src="assets/imagenes/car.svg" alt="">
                    <img src="assets/imagenes/winter.svg" alt="">
    
                    <img src="assets/imagenes/gym.svg" alt="">
                    <img src="assets/imagenes/smoke.svg" alt="">
                    <img src="assets/imagenes/cocktel.svg" alt="">
                </div>
    
                <div class="roomsPage__cards__info">
                    <div class="roomsPage__cards__info__description">
                        <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                        <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    </div>
    
    
                    <div class="roomsPage__cards__info__price">
                        <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                        <a href="roomsDetail.html">
                            <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="roomsPage__cards">
                <img class="roomsPage__cards__img" src="assets/imagenes/room-counter.jpg" alt="">
    
                <div class="roomsPage__cards__iconGroup">
                    <img src="assets/imagenes/room.svg" alt="">
                    <img src="assets/imagenes/wifi.svg" alt="">
                    <img src="assets/imagenes/car.svg" alt="">
                    <img src="assets/imagenes/winter.svg" alt="">
    
                    <img src="assets/imagenes/gym.svg" alt="">
                    <img src="assets/imagenes/smoke.svg" alt="">
                    <img src="assets/imagenes/cocktel.svg" alt="">
                </div>
    
                <div class="roomsPage__cards__info">
                    <div class="roomsPage__cards__info__description">
                        <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                        <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    </div>
    
    
                    <div class="roomsPage__cards__info__price">
                        <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                        <a href="roomsDetail.html">
                            <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="roomsPage__cards">
                <img class="roomsPage__cards__img" src="assets/imagenes/room-counter.jpg" alt="">
    
                <div class="roomsPage__cards__iconGroup">
                    <img src="assets/imagenes/room.svg" alt="">
                    <img src="assets/imagenes/wifi.svg" alt="">
                    <img src="assets/imagenes/car.svg" alt="">
                    <img src="assets/imagenes/winter.svg" alt="">
    
                    <img src="assets/imagenes/gym.svg" alt="">
                    <img src="assets/imagenes/smoke.svg" alt="">
                    <img src="assets/imagenes/cocktel.svg" alt="">
                </div>
    
                <div class="roomsPage__cards__info">
                    <div class="roomsPage__cards__info__description">
                        <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                        <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    </div>
    
    
                    <div class="roomsPage__cards__info__price">
                        <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                        <a href="roomsDetail.html">
                            <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>
    
    
            <div class="roomsPage__cards">
                <img class="roomsPage__cards__img" src="assets/imagenes/room-counter.jpg" alt="">
    
                <div class="roomsPage__cards__iconGroup">
                    <img src="assets/imagenes/room.svg" alt="">
                    <img src="assets/imagenes/wifi.svg" alt="">
                    <img src="assets/imagenes/car.svg" alt="">
                    <img src="assets/imagenes/winter.svg" alt="">
    
                    <img src="assets/imagenes/gym.svg" alt="">
                    <img src="assets/imagenes/smoke.svg" alt="">
                    <img src="assets/imagenes/cocktel.svg" alt="">
                </div>
    
                <div class="roomsPage__cards__info">
                    <div class="roomsPage__cards__info__description">
                        <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                        <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    </div>
    
    
                    <div class="roomsPage__cards__info__price">
                        <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                        <a href="roomsDetail.html">
                            <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                        </a>
                    </div>
                </div>
            </div>
    
        </div>
 
        <div class="roomsPage__pagination">
            <img src="assets/imagenes/Pagination.svg" alt="">
        </div>

    </section>

    <!-- END SECTION ROOMS PAGE -->



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