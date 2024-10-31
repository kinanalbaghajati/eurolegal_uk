@extends('frontend.base')
@section('content')

    <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Our Services</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-5">
        <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"
           data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span
                class="line-pre-title bg-color-primary"></span>Skilled Worker & Innovator  </p>
        <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"
            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Work Visa</h2>
        <div class="row align-items-center">
            <div class="col-lg-9">
                <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn"
                   data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr
                    vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.</p>

                <a  href="#"
                    class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 my-5 font-weight-semibold appear-animation animated fadeInLeftShorter appear-animation-visible"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"
                    style="animation-delay: 600ms;">Get consultation</a>
            </div>

            <div class="col-lg-3 pt-4 pt-lg-0">
                <div class="card border-radius-0  border-0 me-lg-3 p-3 mb-3 mb-lg-0">
                    <img src="{{asset('frontend/images/work-visa.png')}}" class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="accordion accordion-sm mb-3 appear-animation d-md-flex d-sm-block gap-3 py-5" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="500" id="accordionServices">

                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_first">
                                    Skilled Worker Visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_first" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_second">
                                    Innovator Visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_second" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col py-5">
                <hr class="m-0">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex flex-column align-items-end">
            <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"
               data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span
                    class="line-pre-title bg-color-primary"></span>Spouse & Dependent</p>
            <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Family Visas</h2>
        </div>
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-9 flex-row-reverse">
                <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn"
                   data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr
                    vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.</p>

                <a  href="{{asset('frontend/demo-business-consulting-2-contact-us.html')}}"
                    class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 my-5 font-weight-semibold appear-animation animated fadeInLeftShorter appear-animation-visible float-end"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"
                    style="animation-delay: 600ms;">Get consultation</a>
            </div>

            <div class="col-lg-3 pt-4 pt-lg-0 ">
                <div class="card border-radius-0 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
                    <img src="{{asset('frontend/images/family-visa.png')}}" class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="accordion accordion-sm mb-3 appear-animation d-md-flex d-sm-block gap-3 py-5" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="500" id="accordionServices">

                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_therd">
                                    Spouse Visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_therd" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_Four">
                                    Dependent visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_Four" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col py-5">
                <hr class="m-0">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"
           data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span
                class="line-pre-title bg-color-primary"></span>Student & Graduate  </p>
        <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"
            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Study Visas</h2>
        <div class="row align-items-center">
            <div class="col-lg-9">
                <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn"
                   data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr
                    vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.</p>

                <a  href="{{asset('frontend/demo-business-consulting-2-contact-us.html')}}"
                    class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 my-5 font-weight-semibold appear-animation animated fadeInLeftShorter appear-animation-visible"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"
                    style="animation-delay: 600ms;">Get consultation</a>
            </div>

            <div class="col-lg-3 pt-4 pt-lg-0">
                <div class="card border-radius-0 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
                    <img src="{{asset('frontend/images/study-visa.png')}}" class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="accordion accordion-sm mb-3 appear-animation d-md-flex d-sm-block gap-3 py-5" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="500" id="accordionServices">

                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_five">
                                    Graduate Visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_five" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_six">
                                    Graduate Visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_six" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col py-5">
                <hr class="m-0">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="d-flex flex-column align-items-end">
            <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"
               data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span
                    class="line-pre-title bg-color-primary"></span>Investor Visas & Sponsor Licenses  </p>
            <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Immigration</h2>
        </div>
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-9 flex-row-reverse">
                <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn"
                   data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr
                    vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.</p>

                <a  href="{{asset('frontend/demo-business-consulting-2-contact-us.html')}}"
                    class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 my-5 font-weight-semibold appear-animation animated fadeInLeftShorter appear-animation-visible float-end"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"
                    style="animation-delay: 600ms;">Get consultation</a>
            </div>

            <div class="col-lg-3 pt-4 pt-lg-0 ">
                <div class="card border-radius-0 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
                    <img src="{{asset('frontend/images/inv-visa.png')}}" class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="accordion accordion-sm mb-3 appear-animation d-md-flex d-sm-block gap-3 py-5" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="500" id="accordionServices">

                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_seven">
                                    Investor Visa
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_seven" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="border-radius mb-1 border-0 card-accordion-our-services-container col-md-6 col-lg-6 col-sm-12">
                        <div class="card-header py-2 bg-color-quaternary">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-tertiary font-weight-semibold"
                                   data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse_8">
                                    Sponsor Licenses
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_8" class="collapse card-accordion-our-services">
                            <div class="card-body">
                                <p class="font-weight-semibold mb-4">Ut consectetur sed velit sed dapibus. Nullam
                                    consectetur auctor condimentum. Morbi posuere nisi turpis, fringilla pulvinar dui
                                    volutpat eget. Integer tempor, turpis nec vestibulum rutrum, odio mi iaculis enim, a
                                    iaculis leo mi non erat. Pellentesque ac iaculis felis. Phasellus at augue a purus
                                    porttitor pulvinar. </p>
                                <p class="mb-4 pb-2">Integer cursus ex enim, vitae faucibus nisi ultrices ac.
                                    Pellentesque non tristique nunc. Fusce consectetur facilisis odio ut suscipit. Fusce
                                    ligula magna, accumsan et massa ac, rutrum elementum turpis. Suspendisse porta
                                    mattis massa vel ullamcorper. In id ligula quam. Aliquam ac odio ac eros gravida
                                    congue. Ut eu molestie tortor. In ut ullamcorper mauris, at volutpat dui.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum at mauris quis mi cursus consequat. Integer velit metus,
                                    scelerisque sed est vel, dapibus interdum quam.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col py-5">
                <hr class="m-0">
            </div>
        </div>
    </div>

    @include('frontend.partials.cta')

@endsection

