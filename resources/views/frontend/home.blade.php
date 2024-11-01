@extends('frontend.base')
@section('content')
    <div
        class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary custom-slider-container mb-0"
        data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}"
        data-dynamic-height="['991px','991px','991px','750px','750px']" style="height: 991px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                         data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                         data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                         style="background-image: url({{asset('frontend/images/banner1.jpg')}}); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row justify-content-center justify-content-lg-start align-items-center pb-5 h-100">
                            <div class="col-sm-9 col-lg-7 text-center text-lg-start pb-5 mb-5">
                                {{--                            <h2 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Business Consulting services located in Los Angeles, CA</h2>--}}
                                <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                    data-plugin-options="{'minWindowWidth': 0}">Trusted UK Immigration Experts </h1>
                                {{--                            <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Professional helping you design success!</p>--}}
                                <a href="#"
                                   class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250"
                                   data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                         data-appear-animation="kenBurnsToRight" data-appear-animation-duration="30s"
                         data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                         style="background-image: url({{asset('frontend/images/banner2.jpg')}}); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row align-items-center justify-content-center justify-content-lg-end pb-5 h-100">
                            <div class="col-sm-9 col-lg-7 text-center text-lg-start pb-5 mb-5">
                                {{--                            <h3 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Business Consulting services located in Los Angeles, CA</h3>--}}
                                <h2 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                    data-plugin-options="{'minWindowWidth': 0}">Trusted UK Immigration Experts</h2>
                                {{--                            <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Professional helping you design success!</p>--}}
                                <a href="#"
                                   class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250"
                                   data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
    </div>

    <section class="bg-color-light p-relative z-index-2">
        <div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation"
             data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
            <div
                class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
                <div class="col-sm-12 col-md-6 col-xl-3 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                            <img src="{{asset('frontend/images/work-visa-small.png')}}" alt="Strategic Planning"
                                 class="appear-animation" data-appear-animation="fadeInUpShorter"
                                 data-appear-animation-delay="100">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Work
                                Visas </h4>
                            <p class="card-text text-center pt-2 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus
                                tincidunt ut...</p>
                            <a href="{{route('services')}}"
                               class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">read more +</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                            <img src="{{asset('frontend/images/family-visa-small.png')}}" alt="Financial Clean-Up"
                                 class="appear-animation" data-appear-animation="fadeInUpShorter"
                                 data-appear-animation-delay="500">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Family
                                Visas</h4>
                            <p class="card-text text-center pt-2 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus
                                tincidunt ut...</p>
                            <a href="{{route('services')}}"
                               class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">read more +</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div
                            class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
                            <img src="{{asset('frontend/images/study-visa-small.png')}}" alt="Cash Flow Planning"
                                 class="appear-animation" data-appear-animation="fadeInUpShorter"
                                 data-appear-animation-delay="900">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Study
                                Visas</h4>
                            <p class="card-text text-center pt-2 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus
                                tincidunt ut...</p>
                            <a href="{{route('services')}}"
                               class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">read more
                                +</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div
                            class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
                            <img src="{{asset('frontend/images/inv-visa-small.png')}}"
                                 alt="Cash Flow Planning"
                                 class="appear-animation" data-appear-animation="fadeInUpShorter"
                                 data-appear-animation-delay="900">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Business
                                Visas</h4>
                            <p class="card-text text-center pt-2 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus
                                tincidunt ut...</p>
                            <a href="{{route('services')}}"
                               class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">read more
                                +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pb-4">
        <div class="container py-xl-5">
            <div class="row justify-content-between align-items-center pt-5 py-xl-5 mt-3">
                <div class="col-xl-6 mb-5 pb-5 mb-xl-0 pb-xl-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                        <div class="owl-carousel owl-theme m-0"
                             data-plugin-options="{'items': 1, 'autoplay': false, 'animateOut': 'fadeOut', 'autoHeight': true}">
                            <div class="custom-testimonial-container bg-color-light">
                                <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                    <div
                                        class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                        <img src="{{asset('frontend/images/user2.jpg')}}" alt="Bullseye" class="rounded">
                                    </div>
                                    <blockquote class="px-0 pb-5">
                                        <h4 class="text-color-secondary font-weight-bold text-start">Client Story</h4>
                                        <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor.
                                            Suspendisse potenti.
                                    </blockquote>
                                </div>
                            </div>
                            <div class="custom-testimonial-container bg-color-light">
                                <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                    <div
                                        class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                        <img src="{{asset('frontend/images/user1.jpg')}}" alt="Bullseye" class="rounded">
                                    </div>
                                    <blockquote class="px-0 pb-5">
                                        <h4 class="text-color-secondary font-weight-bold text-start">Client Story</h4>
                                        <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor.
                                            Suspendisse potenti.
                                    </blockquote>
                                </div>
                            </div>
                            <div class="custom-testimonial-container bg-color-light">
                                <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                    <div
                                        class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                        <img src="{{asset('frontend/images/user2.jpg')}}" alt="Bullseye" class="rounded">
                                    </div>
                                    <blockquote class="px-0 pb-5">
                                        <h4 class="text-color-secondary font-weight-bold text-start">Client Story</h4>
                                        <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor.
                                            Suspendisse potenti.
                                    </blockquote>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5 mb-5 mb-xl-0">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"
                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"><span
                            class="line-pre-title bg-color-primary"></span>What Our Clients Say</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Client Testimonials</h2>
                    <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a
                        elit sit amet leo accumsan volutpat.</p>
                </div>
            </div>
        </div>
    </section>

   @include('frontend.partials.cta')



    <section class="our-blog py-5">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">

                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation animated fadeInRightShorter appear-animation-visible"
                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                       style="animation-delay: 100ms;"><span class="line-pre-title bg-color-primary"></span>Get
                        in Touch</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-2 custom-letter-spacing-2 custom-text-1 appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                        style="animation-delay: 200ms;">Send Us a Message</h2>

                    <form
                        class="contact-form custom-form-style-1 appear-animation animated fadeIn appear-animation-visible"
                        data-appear-animation="fadeIn" data-appear-animation-delay="100"
                        action="php/contact-form.php" method="POST" novalidate="novalidate"
                        style="animation-delay: 100ms;">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" placeholder="Your Name" value=""
                                       data-msg-required="Please enter your name." maxlength="100"
                                       class="form-control" name="name" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" placeholder="Your E-mail" value=""
                                       data-msg-required="Please enter your email address."
                                       data-msg-email="Please enter a valid email address." maxlength="100"
                                       class="form-control" name="email" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input placeholder="Subject" type="text" value=""
                                       data-msg-required="Please enter the subject." maxlength="100"
                                       class="form-control" name="subject" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                        <textarea placeholder="Your Message..." maxlength="5000"
                                                  data-msg-required="Please enter your message." rows="10"
                                                  class="form-control" name="message" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message"
                                       class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold"
                                       data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-6 text-center">
                    <img class="c-image" alt="logo" src="{{asset('frontend/images/logo2.png')}}" style="margin-left: 6rem;margin-top: 10rem;height: 80px">
                </div>
            </div>


        </div>

    </section>

@endsection



{{--    <div class="container py-5">--}}
{{--        <div class="row mt-3 pt-5">--}}
{{--            <div class="col">--}}
{{--                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"--}}
{{--                   data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span--}}
{{--                        class="line-pre-title bg-color-primary"></span>our blog</p>--}}
{{--                <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"--}}
{{--                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">News and Articles</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 pt-3 mb-3 appear-animation animated appear-animation-visible"--}}
{{--                 data-appear-animation="fadeIn" data-appear-animation-delay="100">--}}
{{--                <div class="row align-items-center no-gutters">--}}
{{--                    <div class="col-lg-5">--}}
{{--                        <div class="card border-radius-0 box-shadow-1 border-0 me-lg-4 p-3 mb-3 mb-lg-0">--}}
{{--                            <a href="demo-business-consulting-2-team-detail.html" class="d-block p-relative">--}}
{{--                                <img src="{{asset('frontend/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-7 ps-2 ps-lg-0">--}}
{{--                        <p class="mb-0 text-uppercase">CEO</p>--}}
{{--                        <h4 class="mb-3 text-5 font-weight-bold"><a class="text-color-tertiary"--}}
{{--                                                                    href="demo-business-consulting-2-team-detail.html">John--}}
{{--                                Doe</a></h4>--}}
{{--                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem--}}
{{--                            ipsum erat orci, ac auctor lacus tincidunt ut...</p>--}}
{{--                        <a href="demo-business-consulting-2-team-detail.html"--}}
{{--                           class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 pt-3 mb-3 appear-animation animated appear-animation-visible"--}}
{{--                 data-appear-animation="fadeIn" data-appear-animation-delay="200">--}}
{{--                <div class="row align-items-center no-gutters">--}}
{{--                    <div class="col-lg-5">--}}
{{--                        <div class="card border-radius-0 box-shadow-1 border-0 me-lg-4 p-3 mb-3 mb-lg-0">--}}
{{--                            <a href="demo-business-consulting-2-team-detail.html" class="d-block p-relative">--}}
{{--                                <img src="img/team/team-2.jpg" class="img-fluid border-radius-0" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-7 ps-2 ps-lg-0">--}}
{{--                        <p class="mb-0 text-uppercase">Marketing</p>--}}
{{--                        <h4 class="mb-3 text-5 font-weight-bold"><a class="text-color-tertiary"--}}
{{--                                                                    href="demo-business-consulting-2-team-detail.html">Jessica--}}
{{--                                Doe</a></h4>--}}
{{--                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem--}}
{{--                            ipsum erat orci, ac auctor lacus tincidunt ut...</p>--}}
{{--                        <a href="demo-business-consulting-2-team-detail.html"--}}
{{--                           class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col py-5">--}}
{{--                <hr class="m-0">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

