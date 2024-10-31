@extends('frontend.base')
@section('content')

    <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">About Us</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row align-items-center">
            {{--            <div class="col">--}}
            {{--                <p class="text-4 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet--}}
            {{--                    libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr--}}
            {{--                    vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum--}}
            {{--                    dolor sit amet, consectetur adipiscing elit.</p>--}}
            {{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="1200"
                        style="animation-delay: 1200ms;">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                </div>
                <p class="appear-animation animated fadeInUpShorter appear-animation-visible"
                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400"
                   style="animation-delay: 1400ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a
                        href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris
                    eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae
                    augue quam. Nullam ac laoreet libero.</p>
                <p class="mb-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"
                   style="animation-delay: 1600ms;">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac
                    sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <div class="card border-radius-0 box-shadow-1 border-0 mt-4 mt-lg-0 ms-lg-3 p-3 mb-3 mb-lg-0">
                    <img src="{{asset('frontend/images/2148017063.jpg')}}"
                         class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-3 mt-2">

            <div class="col-lg-6 p-0">
                <section class="section section-height-3 bg-color-primary-darken-1 h-100 m-0 border-0">
                    <div class="row justify-content-end m-0">
                        <div class="col-half-section col-half-section-right text-color-light">
                            <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation"
                               data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span
                                    class="line-pre-title bg-color-secondary ms-0 me-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Reliable
                                Services</p>
                            <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Budget
                                Friendly</h2>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-6 p-0">
                <section class="section section-height-3 bg-color-primary h-100 m-0 border-0">
                    <div class="row m-0">
                        <div class="col-half-section text-color-light text-end">
                            <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation"
                               data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100">coaching and
                                consulting<span class="line-pre-title me-0 ms-3 bg-color-secondary appear-animation"
                                                data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="200"></span></p>
                            <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Experienced
                                Team</h2>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>


    {{--    <section class="are-you-looking-for bg-color-secondary">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-between">--}}
    {{--                <div class="col-xl-5">--}}
    {{--                    <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation"--}}
    {{--                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span--}}
    {{--                            class="line-pre-title bg-color-primary appear-animation"--}}
    {{--                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you--}}
    {{--                        looking for a</p>--}}
    {{--                    <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation"--}}
    {{--                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan--}}
    {{--                        Consultant?</h2>--}}
    {{--                    <p class="font-weight-semibold text-color-light mb-0 appear-animation"--}}
    {{--                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your--}}
    {{--                        company strategy session right now!</p>--}}
    {{--                </div>--}}
    {{--                <div--}}
    {{--                    class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">--}}
    {{--								<span--}}
    {{--                                    class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation"--}}
    {{--                                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">--}}
    {{--									<span>--}}
    {{--										<img width="18" height="25"--}}
    {{--                                             src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">--}}
    {{--									</span>--}}
    {{--									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>--}}
    {{--								</span>--}}
    {{--                    <a href="demo-business-consulting-2-contact-us.html"--}}
    {{--                       class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation"--}}
    {{--                       data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial--}}
    {{--                        consultation</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <div class="container pt-5 pb-2">
        <div class="overflow-hidden">
            <h2 class="text-color-dark font-weight-normal text-6 mb-0 appear-animation" data-appear-animation="maskUp">
                <strong class="font-weight-extra-bold">Certifications & Accreditations </strong></h2>
        </div>
        <div class="overflow-hidden mb-3">
            <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem
                ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
        </div>
        <div class="row">
            <div class="col">

                <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
                     data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="owl-carousel owl-theme pb-3"
                         data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">


                        <div class="portfolio-item">
										<span
                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-2">
												<img src="{{asset('frontend/images/2149776027.jpg')}}"
                                                     class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span
                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
												</span>
												<span class="thumb-info-action">
													<a href="{{asset('frontend/images/2149776027.jpg')}}"
                                                       class="lightbox-portfolio">
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
                        </div>
                        <div class="portfolio-item">
										<span
                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-2">
												<img src="{{asset('frontend/img/projects/project.jpg')}}"
                                                     class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span
                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
												</span>
												<span class="thumb-info-action">
													<a href="{{asset('frontend/img/projects/project.jpg')}}"
                                                       class="lightbox-portfolio">
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
                        </div>
                        <div class="portfolio-item">
										<span
                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-2">
												<img src="{{asset('frontend/img/projects/project.jpg')}}"
                                                     class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span
                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
												</span>
												<span class="thumb-info-action">
													<a href="{{asset('frontend/img/projects/project.jpg')}}"
                                                       class="lightbox-portfolio">
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
                        </div>
                        <div class="portfolio-item">
										<span
                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-2">
												<img src="{{asset('frontend/images/2149776027.jpg')}}"
                                                     class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span
                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
												</span>
												<span class="thumb-info-action">
													<a href="{{asset('frontend/images/2149776027.jpg')}}"
                                                       class="lightbox-portfolio">
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
                        </div>
                        <div class="portfolio-item">
										<span
                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-2">
												<img src="{{asset('frontend/img/projects/project.jpg')}}"
                                                     class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span
                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
												</span>
												<span class="thumb-info-action">
													<a href="{{asset('frontend/img/projects/project.jpg')}}"
                                                       class="lightbox-portfolio">
														<span
                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-1.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Watch</span>--}}
{{--													<span class="thumb-info-type">Media</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-1.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-2.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Identity</span>--}}
{{--													<span class="thumb-info-type">Logo</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-2.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-27.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Screens</span>--}}
{{--													<span class="thumb-info-type">Website</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-27.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-4.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Three Bottles</span>--}}
{{--													<span class="thumb-info-type">Logo</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-4.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-5.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Company T-Shirt</span>--}}
{{--													<span class="thumb-info-type">Brand</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-5.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-6.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Mobile Mockup</span>--}}
{{--													<span class="thumb-info-type">Website</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-6.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-7.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Label</span>--}}
{{--													<span class="thumb-info-type">Media</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-7.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-23.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Business Folders</span>--}}
{{--													<span class="thumb-info-type">Logo</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-23.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-24.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Tablet Screen</span>--}}
{{--													<span class="thumb-info-type">Website</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-24.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-25.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Black Watch</span>--}}
{{--													<span class="thumb-info-type">Media</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-25.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}

{{--<div class="portfolio-item">--}}
{{--										<span--}}
{{--                                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">--}}
{{--											<span class="thumb-info-wrapper border-radius-0">--}}
{{--												<img src="img/projects/project-26.jpg" class="img-fluid border-radius-0"--}}
{{--                                                     alt="">--}}
{{--												<span class="thumb-info-title">--}}
{{--													<span--}}
{{--                                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Monitor Mockup</span>--}}
{{--													<span class="thumb-info-type">Website</span>--}}
{{--												</span>--}}
{{--												<span class="thumb-info-action">--}}
{{--													<a href="portfolio-single-wide-slider.html">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-primary"><i--}}
{{--                                                                class="fas fa-link"></i></span>--}}
{{--													</a>--}}
{{--													<a href="img/projects/project-26.jpg" class="lightbox-portfolio">--}}
{{--														<span--}}
{{--                                                            class="thumb-info-action-icon thumb-info-action-icon-light"><i--}}
{{--                                                                class="fas fa-search text-dark"></i></span>--}}
{{--													</a>--}}
{{--												</span>--}}
{{--											</span>--}}
{{--										</span>--}}
{{--</div>--}}
