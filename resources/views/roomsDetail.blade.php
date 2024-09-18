<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomsDetail</title>
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

    <!-- SECTION ROOMS DETAIL -->
    <section class="roomsDetail">
        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">Ultimate Room</p>
        </div>

        <div class="roomsPage__select ">
            <p class="roomsPage__select__container font--archivo">Home | Room Details</p>
        </div>
        <div class="roomsDetail__flex">
            <div class="roomsDetail__info">
                <div class="roomsDetail__info__container">
                    <p class="roomsDetail__info__container__title font--archivo">DOUBLE BED</p>
                    <h2 class="roomsDetail__info__container__subtitle font--old">Luxury Double Bed</h2>
                    <p class="roomsDetail__info__container__number font--archivo">$345</p>
                    <p class="roomsDetail__info__container__p font--archivo">/Night</p>
                </div>
                <img class="roomsDetail__info__img" src="assets/imagenes/hotel-luxury.jpg" alt="">
            </div>

            <form class="roomsDetail__check">
                <p class="roomsDetail__check__p font--archivo">Check Availability</p>
                <div class="roomsDetail__check__container">
                    <p class="roomsDetail__check__container__p font--archivo">Check In</p>
                    <input class="roomsDetail__check__container__input" type="date" name="" id="">
                </div>

                <div>
                    <p class="roomsDetail__check__container__p font--archivo">Check Out</p>
                    <input class="roomsDetail__check__container__input" type="date" name="" id="">
                </div>

                <button class="button--color roomsDetail__check__btn">Check Availability</button>
            </form>
        </div>


        <div class="roomsDetail__text">
            <p class="roomsDetail__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>

        <div class="roomsDetail__amenities">
            <h4 class="roomsDetail__amenities__title">Amenities</h4>
            <hr class="apart">

            <div class="roomsDetail__amenities__info">
                <ul class="roomsDetail__amenities__info__ul">
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/airDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p font--roboto">Air conditioner </p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/breakDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Breakfast</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/cleanDetail.svg" alt="">
                        <p>Cleaning</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/groceryDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Grocery</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/shopDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Shop near</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/onlineDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">24/7 Online Support</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/smartDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Smart Security</p>
                    </li>
                </ul>

                <ul class="roomsDetail__amenities__info__ul">
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/wifiDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">High speed WiFi</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/kitchenDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Kitchen</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/showerDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Shower</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/singleDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Single bed</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/towelDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Towels</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/stronDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Strong Locker</p>
                    </li>
                    <li class="roomsDetail__amenities__info__ul__li">
                        <img src="assets/imagenes/teamDetail.svg" alt="">
                        <p class="roomsDetail__amenities__info__ul__li__p">Expert Team</p>
                    </li>
                </ul>

            </div>

        </div>

        <div class="roomsDetail__founder">
            <div class="roomsDetail__founder__container">
                <div class="roomsDetail__founder__container__img">
                    <img class="roomsDetail__founder__container__img__photo" src="assets/imagenes/circleDetail.svg"
                        alt="">
                    <span class="roomsDetail__founder__container__img__check">✓</span>
                </div>

                <div class="roomsDetail__founder__container__name">
                    <h4 class="roomsDetail__founder__container__name__title font--old">Lucia Macho Sánchez</h4>
                    <p class="roomsDetail__founder__container__name__subtitle font--archivo">Founder, Qux Co.</p>
                    <p class="roomsDetail__founder__container__name__p font--archivo">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>


            </div>

        </div>

        <div class="roomsDetail__cancellation">
            <h4 class="roomsDetail__cancellation__title font--old">Cancellation</h4>
            <hr class="apart">
            <p class="roomsDetail__cancellation__p font--roboto">Phasellus volutpat neque a tellus venenatis, a euismod
                augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis
                hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
        </div>

        <div class="roomsDetail__related">
            <div">
                <h4 class="roomsDetail__related__title font--old">Related Rooms</h4>
                <hr class="apart">
        </div>



        <!-- Slider main container -->
        <div class="swiper-arrowTests">
            <div class="swiper swiper-arrowFacilities">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">

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
                                    <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room
                                    </h2>
                                    <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                                </div>


                                <div class="roomsPage__cards__info__price">
                                    <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                                    <a href="">
                                        <button class="roomsPage__cards__info__price__btn font--archivo">Booking
                                            now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
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
                                    <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room
                                    </h2>
                                    <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                                </div>


                                <div class="roomsPage__cards__info__price">
                                    <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                                    <a href="">
                                        <button class="roomsPage__cards__info__price__btn font--archivo">Booking
                                            now</button>
                                    </a>
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


        </div>
    </section>
    <!-- END SECTION ROOMS DETAIL -->


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