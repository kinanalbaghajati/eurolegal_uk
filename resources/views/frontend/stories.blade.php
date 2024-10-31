@extends('frontend.base')
@section('content')



        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Success Stories</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="#">Home</a></li>
                            <li class="active">Success Stories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-4 mb-lg-0">
                        <img src="{{asset('frontend/images/success_story.jpg')}}" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div class="col-lg-8 pt-3 pt-lg-0">
                    <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="m-0 p-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida.</p>
                    <div class="counters custom-counters mt-5 d-flex">
                        <div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <strong data-to="240" data-append="+">0</strong>
                            <label class="text-color-primary font-weight-bold">Satisfied Clients</label>
                        </div>
                        <div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                            <strong data-to="500" data-append="+">0</strong>
                            <label class="text-color-primary font-weight-bold">Successfull Cases</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pt-5 pb-4">
            <div class="container">
                <div class="row justify-content-between pt-5 mb-2">
                    <div class="col-lg-6 position-relative">
                        <div class="custom-testimonial-container bg-color-light mb-5">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontend/images/user1.jpg')}}" alt="Bullseye" class="rounded">
{{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bold text-start">Name Story</h4>
                                    <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bold text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative">
                        <div class="custom-testimonial-container bg-color-light mb-5">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontend/images/user2.jpg')}}" alt="Bullseye" class="rounded">
                                    {{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bold text-start">Name Story</h4>
                                    <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative">
                        <div class="custom-testimonial-container bg-color-light mb-5">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontend/images/user2.jpg')}}" alt="Bullseye" class="rounded">
{{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bold text-start">Name Story</h4>
                                    <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative">
                        <div class="custom-testimonial-container bg-color-light mb-5">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontend/images/user1.jpg')}}" alt="Bullseye" class="rounded">
                                    {{--                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bold text-start">Name Story</h4>
                                    <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bold text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.partials.cta')



@endsection
