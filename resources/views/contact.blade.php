<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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

    <!-- SECTION CONTACT -->

    <section class="contact">

        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">New Details</p>
        </div>

        <div class="roomsPage__select ">
            <p class="roomsPage__select__container font--archivo">Home | Blog</p>
        </div>

        <div class="contact__info">
            <div >
                <div class="contact__info__card">
                    <img src="assets/imagenes/adressContact.svg" alt="">
                    <div class="contact__info__card__titles">
                        <p class="contact__info__card__titles__title font--old">Hotel Address</p>
                        <p class="contact__info__card__titles__subtitle font--roboto"> 19/A, Cirikon City hall Tower New
                            York, NYC
                        </p>
                    </div>
                </div>
                <img class="contact__info__0" src="assets/imagenes/01Contact.svg" alt="">
            </div>

            <div class="contact__info__2">
                <div class="contact__info__card">
                    <img src="assets/imagenes/phoneContact.svg" alt="">
                    <div class="contact__info__card__titles">
                        <p class="contact__info__card__titles__title font--old">Phone Number</p>
                        <p class="contact__info__card__titles__subtitle font--roboto">662 321 800
                        </p>
                    </div>
                </div>
                <img class="contact__info__0" src="assets/imagenes/02Contact.svg" alt="">
            </div>


            <div class="contact__info__3">
                <div class="contact__info__card">
                    <img src="assets/imagenes/emailContact.svg" alt="">
                    <div class="contact__info__card__titles">
                        <p class="contact__info__card__titles__title font--old">Email</p>
                        <p class="contact__info__card__titles__subtitle font--roboto"> luciamacho00@gmail.com
                        </p>
                    </div>
                </div>
                <img class="contact__info__0" src="assets/imagenes/03Contact.svg" alt="">
            </div>
        </div>

        <div class="contact__map">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3037.1328997545156!2d-3.7146959999999996!3d40.428056000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fc15efcb09%3A0xb0036150b0cd3867!2sOXYGEN%20Academy%20%7C%20Full%20Stack%20Bootcamps!5e0!3m2!1ses!2ses!4v1718877692905!5m2!1ses!2ses"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="information__map map">
        </iframe>
        </div>
        


        <form class="contact__form">
            <div class="contact__form__group">
                <div>
                    <div class="contact__form__container">
                        <img class="contact__form__container__img" src="assets/imagenes/personContact.svg"
                            alt="person" />
                        <input class="contact__form__container__input font--roboto" type="text"
                            placeholder="Your Full Name">
                    </div>

                    <div class="contact__form__container">
                        <img class="contact__form__container__img" src="assets/imagenes/phone2Contact.svg"
                            alt="phone" />
                        <input class="contact__form__container__input" type="text" placeholder="Add phone number">
                    </div>
                </div>

                <div>
                    <div class="contact__form__container">
                        <img class="contact__form__container__img" src="assets/imagenes/mail2Contact.svg" alt="email" />
                        <input class="contact__form__container__input" type="text" placeholder="Enter email address">
                    </div>

                    <div class="contact__form__container">
                        <img class="contact__form__container__img" src="assets/imagenes/bookContact.svg"
                            alt="subject" />
                        <input class="contact__form__container__input" type="text" placeholder="Enter subject">
                    </div>
                </div>
            </div>

                <div class="contact__form__container">
                    <img class="contact__form__container__img" src="assets/imagenes/pencilContact.svg" alt="edit" />
                    <textarea class="contact__form__container__input contact__form__container__input--textarea"
                        placeholder="Enter message"></textarea>
                </div>

                <div class="contact__form__btn"><button type="submit"
                        class="button--color button--color--width">SEND</button>
                </div>
            


        </form>
    </section>
    <!-- END SECTION CONTACT -->

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