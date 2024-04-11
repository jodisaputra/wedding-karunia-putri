@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <div class="wpo-box-style">
        <section class="wpo-hero-slider">
            <h2 class="hidden">some</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @forelse($sliders as $slider)
                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                 data-background="{{ asset('storage/') }}/{{ $slider->images  }}">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->
                    @empty
                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                 data-background="{{ asset('template')  }}/images/slider/slide-1.jpg">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                 data-background="{{ asset('template')  }}/images/slider/slide-2.jpg">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                 data-background="{{ asset('template')  }}/images/slider/slide-3.jpg">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                 data-background="{{ asset('template')  }}/images/slider/slide-4.jpg">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->
                    @endforelse
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </div>
    <!-- end of hero slider -->
    <!-- start wpo-wedding-date -->
    <section class="wpo-hero-wedding-date">
        <div class="wpo-wedding-date-inner">
            <span class="wow fadeInUp" data-wow-duration="800ms">Save the Date</span>
            <h2 class="wow fadeInUp" data-wow-duration="1000ms">Jane & Peter</h2>
            <p class="wow fadeInUp" data-wow-duration="1200ms">We Are Getting Married November 15,2022</p>
            <span class="shape wow fadeInUp" data-wow-duration="1400ms"><img
                    src="{{ asset('template') }}/images/wedding-date/1.png"
                    alt=""> </span>
            <div class="row wow fadeInUp" data-wow-duration="1600ms">
                <div class="col col-xs-12">
                    <div class="clock-grids">
                        <div id="clock"></div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
        <div class="shape-1">
            <img src="{{ asset('template') }}/images/wedding-date/2.png" alt="">
        </div>
        <div class="shape-2">
            <img src="{{ asset('template') }}/images/wedding-date/3.png" alt="">
        </div>
    </section>
    <!-- end wpo-wedding-date -->
    <!-- start wpo-couple-section -->
    <section class="wpo-couple-section-s3 section-padding" id="couple">
        <div class="container-fluid">
            <div class="couple-area clearfix">
                <div class="row align-items-center">
                    <div class="col col-xl-3 col-lg-4 col-12">
                        <div class="text-grid wow fadeInLeftSlow" data-wow-duration="800ms">
                            <div class="vector">
                                <img src="{{ asset('template') }}/images/couple/vector-1.svg" alt="">
                            </div>
                            <h3>Robert Peter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna orci auctor vitae nisl.
                                Erat
                                fringilla pellentesque amet tempus. Commodo mi vitae, sagittis blandit.</p>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-6 col-lg-4 col-12">
                        <div class="middle-couple-pic wow fadeInUp" data-wow-duration="1000ms">
                            <div class="middle-couple-pic-inner">
                                <img src="{{ asset('template') }}/images/couple/3.jpg" alt="">
                            </div>
                            <div class="couple-flower">
                                <img src="{{ asset('template') }}/images/couple/couple-flower.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-4 col-12">
                        <div class="text-grid wow fadeInRightSlow" data-wow-duration="800ms">
                            <div class="vector">
                                <img src="{{ asset('template') }}/images/couple/vector-2.svg" alt="">
                            </div>
                            <h3>Jane Margrate</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna orci auctor vitae nisl.
                                Erat
                                fringilla pellentesque amet tempus. Commodo mi vitae, sagittis blandit.</p>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-couple-section -->
    <!-- start wpo-video-section -->
    <section class="wpo-video-section pb-0 section-padding">
        <h2 class="hidden">some</h2>
        <div class="container-fluid">
            <div class="video-wrap">
                <img src="{{ asset('template') }}/images/video-img/img-1.jpg" alt="">
                <a href="https://www.youtube.com/embed/s4dWp9_nNYk" class="video-btn" data-type="iframe"><i
                        class="fi flaticon-play"></i></a>
            </div>
        </div>
    </section>
    <!-- end wpo-video-section-->
    <!-- start wpo-story-section-s4 -->
    <section class="wpo-story-section-s4 section-padding" id="story">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Our Story</span>
                    <h2>How It Happened</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="story-timeline">
                        <div class="round-shape"></div>
                        <div class="row">
                            <div class="col col-lg-6 col-12">
                                <div class="img-holder right-align-text left-site">
                                    <img src="{{ asset('template') }}/images/story/10.jpg" alt class="img img-responsive">
                                    <div class="story-shape-img-1">
                                        <img src="{{ asset('template') }}/images/story/s-shape1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12 text-holder">
                                    <span class="heart">
                                        <i class="ti ti-heart"></i>
                                    </span>
                                <div class="story-text">
                                    <span class="date">22 Feb, 2019</span>
                                    <h3>How we meet</h3>
                                    <p>Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed.
                                        Enim tortor, faucibus netus orci donec volutpat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6 col-12 order-lg-1 order-2 text-holder right-heart">
                                    <span class="heart">
                                        <i class="ti ti-heart"></i>
                                    </span>
                                <div class="story-text right-align-text">
                                    <span class="date">02 Nov, 2020</span>
                                    <h3>He proposed, I said Yes</h3>
                                    <p>Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed.
                                        Enim tortor, faucibus netus orci donec volutpat adipiscing.</p>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12 order-lg-2 order-1">
                                <div class="img-holder right-align-img">
                                    <img src="{{ asset('template') }}/images/story/11.jpg" alt class="img img-responsive">
                                    <div class="story-shape-img-1">
                                        <img src="{{ asset('template') }}/images/story/s-shape2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end wpo-story-section-s3 -->
    <!-- start of wpo-contact-section -->
    <section class="wpo-contact-section-s3 section-padding" id="rsvp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-xl-5 col-lg-5 col-md-12 col-12">
                    <div class="wpo-contact-section-wrapper wow fadeInLeftSlow" data-wow-duration="1700ms">
                        <div class="wpo-contact-form-area">
                            <div class="wpo-section-title">
                                <h2>Are You Attending?</h2>
                            </div>
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Name">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Email">
                                </div>
                                <div class="radio-buttons">
                                    <p>
                                        <input type="radio" id="attend" name="radio-group" checked>
                                        <label for="attend">Yes, I will be there</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="not" name="radio-group">
                                        <label for="not">Sorry, I can’t come</label>
                                    </p>
                                </div>
                                <div>
                                    <select name="guest" class="form-control">
                                        <option disabled="disabled" selected>Number Of Guests</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="what" id="what"
                                           placeholder="What Will You Be Attending">
                                </div>
                                <div>
                                    <select name="meal" class="form-control last">
                                        <option disabled="disabled" selected>Meal Preferences</option>
                                        <option>Chicken Soup</option>
                                        <option>Motton Kabab</option>
                                        <option>Chicken BBQ</option>
                                        <option>Mix Salad</option>
                                        <option>Beef Ribs</option>
                                    </select>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">RSVP</button>
                                    <div id="c-loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-7 col-lg-7 col-md-12 col-12">
                    <div class="contact-img wow fadeInRightSlow" data-wow-duration="1700ms">
                        <div class="contact-img-left">
                            <img src="{{ asset('template') }}/images/rsvp/img-1.jpg" alt="">
                            <img src="{{ asset('template') }}/images/rsvp/img-2.jpg" alt="">
                        </div>
                        <div class="contact-img-right">
                            <img src="{{ asset('template') }}/images/rsvp/img-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-contact-section -->

    <!-- start wpo-event-section -->
    <section class="wpo-event-section-s2 section-padding pt-0" id="event">
        <div class="container">
            <div class="wpo-section-title">
                <span>Our Wedding</span>
                <h2>When & Where</h2>
            </div>
            <div class="wpo-event-wrap">
                <div class="row">
                    @forelse($events as $event)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="{{ asset('storage/') }}/{{ $event->images  }}" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>{{ $event->event_name  }}</h2>
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    {{--                                    <ul>--}}
                                    {{--                                        <li>Monday, 12 Apr. 2022 <br>--}}
                                    {{--                                            1:00 PM – 2:30 PM--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li>4517 Washington Ave. Manchester, Kentucky 39495</li>--}}
                                    {{--                                        <li>+1 234-567-8910</li>--}}
                                    {{--                                        <li><a class="popup-gmaps"--}}
                                    {{--                                               href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See--}}
                                    {{--                                                Location</a></li>--}}
                                    {{--                                    </ul>--}}
                                    {!! $event->event_description !!}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col col-lg-4 col-md-6 col-12 mx-auto text-center mt-4">
                            Event Tidak Ada !
                        </div>
                    @endforelse
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end wpo-event-section -->
@endsection
