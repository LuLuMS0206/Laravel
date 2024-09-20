
@extends('layouts.app')
@section('title','Offers')
@section('content')
    <!-- SECTION OFFERS -->
    <section class="offers">
        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">Our Offers</p>
        </div>

        <div class="roomsPage__select ">
            <p class="roomsPage__select__container font--archivo">Home | Offers</p>
        </div>

        <div class="offers__grid">
            <div class="offers__roomsCards">

                <img class="offers__roomsCards__imgHotel" src="{{ asset('assets/img/hotel-luxury.jpg') }}"  alt="">

                <div class="offers__roomsCards__price">
                    <img src="assets/imagenes/priceYellow.svg" alt="">
                    <img class="offers__roomsCards__price__img" src="{{ asset('assets/img/priceRed.svg') }}"  alt="">
                </div>

                <div class="offers__roomsCards__info">
                    <div class="offers__roomsCards__info__titles">
                        <h2 class="offers__roomsCards__info__titles__title font--archivo">DOUBLE BED</h2>
                        <p class="offers__roomsCards__info__titles__subtitle font--old">Luxury Double Bed</p>
                    </div>

                    <p class="offers__roomsCards__info__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>


                    <div class="offers__flex">
                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                src="{{ asset('assets/img/groceryDetail.svg') }}">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>


                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"  
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                 src="{{ asset('assets/img/groceryDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>

                    </div>

                    <button class="button--color offers__roomsCards__btn ">BOOK NOW</button>

                </div>

            </div>


            <div class="offers__roomsCards">

                <img class="offers__roomsCards__imgHotel" src="{{ asset('assets/img/hotel-luxury.jpg') }}"  alt="">

                <div class="offers__roomsCards__price">
                    <img src="assets/imagenes/priceYellow.svg" alt="">
                    <img class="offers__roomsCards__price__img" src="{{ asset('assets/img/priceRed.svg') }}"  alt="">
                </div>

                <div class="offers__roomsCards__info">
                    <div class="offers__roomsCards__info__titles">
                        <h2 class="offers__roomsCards__info__titles__title font--archivo">DOUBLE BED</h2>
                        <p class="offers__roomsCards__info__titles__subtitle font--old">Luxury Double Bed</p>
                    </div>

                    <p class="offers__roomsCards__info__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>


                    <div class="offers__flex">
                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                src="{{ asset('assets/img/groceryDetail.svg') }}">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>


                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"  
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                 src="{{ asset('assets/img/groceryDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>

                    </div>

                    <button class="button--color offers__roomsCards__btn ">BOOK NOW</button>

                </div>

            </div>

            <div class="offers__roomsCards">

                <img class="offers__roomsCards__imgHotel" src="{{ asset('assets/img/hotel-luxury.jpg') }}"  alt="">

                <div class="offers__roomsCards__price">
                    <img src="assets/imagenes/priceYellow.svg" alt="">
                    <img class="offers__roomsCards__price__img" src="{{ asset('assets/img/priceRed.svg') }}"  alt="">
                </div>

                <div class="offers__roomsCards__info">
                    <div class="offers__roomsCards__info__titles">
                        <h2 class="offers__roomsCards__info__titles__title font--archivo">DOUBLE BED</h2>
                        <p class="offers__roomsCards__info__titles__subtitle font--old">Luxury Double Bed</p>
                    </div>

                    <p class="offers__roomsCards__info__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>


                    <div class="offers__flex">
                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                src="{{ asset('assets/img/groceryDetail.svg') }}">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>


                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"  
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                 src="{{ asset('assets/img/groceryDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>

                    </div>

                    <button class="button--color offers__roomsCards__btn ">BOOK NOW</button>

                </div>

            </div>

            <div class="offers__roomsCards">

                <img class="offers__roomsCards__imgHotel" src="{{ asset('assets/img/hotel-luxury.jpg') }}"  alt="">

                <div class="offers__roomsCards__price">
                    <img src="assets/imagenes/priceYellow.svg" alt="">
                    <img class="offers__roomsCards__price__img" src="{{ asset('assets/img/priceRed.svg') }}"  alt="">
                </div>

                <div class="offers__roomsCards__info">
                    <div class="offers__roomsCards__info__titles">
                        <h2 class="offers__roomsCards__info__titles__title font--archivo">DOUBLE BED</h2>
                        <p class="offers__roomsCards__info__titles__subtitle font--old">Luxury Double Bed</p>
                    </div>

                    <p class="offers__roomsCards__info__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>


                    <div class="offers__flex">
                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                src="{{ asset('assets/img/groceryDetail.svg') }}">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>


                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}"
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}"  
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img"
                                 src="{{ asset('assets/img/groceryDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/shopDetail.svg') }}" 
                                    alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Shop near</p>
                            </li>
                        </ul>

                    </div>

                    <button class="button--color offers__roomsCards__btn ">BOOK NOW</button>

                </div>

            </div>


<!-- Slider for mobile -->
<div class="swiper-arrowTests swiper--none swiper-arrowTests--background">
    <div class="roomsPage__cards__titles">
        <p class="roomsPage__cards__titles__title font--archivo">POPULAR LIST</p>
        <h2 class="roomsPage__cards__titles__subtitle font--old">Popular Rooms</h2>
    </div>

    <div class="swiper swiper-arrowFacilities">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="roomsPage__cards">
                    <img class="roomsPage__cards__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="">
                
                    <div class="roomsPage__cards__iconGroup">
                        <img src="{{ asset('assets/img/room.svg') }}" alt="">
                        <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
                        <img src="{{ asset('assets/img/car.svg') }}" alt="">
                        <img src="{{ asset('assets/img/winter.svg') }}" alt="">
                        <img src="{{ asset('assets/img/gym.svg') }}" alt="">
                        <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
                        <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
                    </div>
                
                    <div class="roomsPage__cards__info">
                        <div class="roomsPage__cards__info__description">
                            <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                            <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="roomsPage__cards__info__price">
                            <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                            <a href="#"><button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev swiper-button-prev--izq"></div>
        <div class="swiper-button-next swiper-button-prev--der"></div>
    </div>
</div>

<!-- Only for desktop -->
<div class="roomsPage__cards__container">
    <div class="roomsPage__cards">
        <img class="roomsPage__cards__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="Room 1">
        <div class="roomsPage__cards__iconGroup">
            <img src="{{ asset('assets/img/room.svg') }}" alt="">
            <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
            <img src="{{ asset('assets/img/car.svg') }}" alt="">
            <img src="{{ asset('assets/img/winter.svg') }}" alt="">
            <img src="{{ asset('assets/img/gym.svg') }}" alt="">
            <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
            <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
        </div>
        <div class="roomsPage__cards__info">
            <div class="roomsPage__cards__info__description">
                <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="roomsPage__cards__info__price">
                <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                <a href="#">
                    <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                </a>
            </div>
        </div>
    </div>

    <div class="roomsPage__cards">
        <img class="roomsPage__cards__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="Room 2">
        <div class="roomsPage__cards__iconGroup">
            <img src="{{ asset('assets/img/room.svg') }}" alt="">
            <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
            <img src="{{ asset('assets/img/car.svg') }}" alt="">
            <img src="{{ asset('assets/img/winter.svg') }}" alt="">
            <img src="{{ asset('assets/img/gym.svg') }}" alt="">
            <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
            <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
        </div>
        <div class="roomsPage__cards__info">
            <div class="roomsPage__cards__info__description">
                <h2 class="roomsPage__cards__info__description__title font--old">Deluxe Room</h2>
                <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="roomsPage__cards__info__price">
                <h2 class="roomsPage__cards__info__price__number font--archivo">$450/Night</h2>
                <a href="#">
                    <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                </a>
            </div>
        </div>
    </div>
</div>



    </section>


    <!-- END SECTION OFFERS -->

    @endsection