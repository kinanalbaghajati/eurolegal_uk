@extends('frontend.base')
@section('content')




        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Contact Us</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom-bg-color-lighter-grey">
            <div class="cards custom-cards h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <h4 class="card-title mb-4 font-weight-semibold text-color-primary">Get In Touch</h4>

                                <strong class="d-block text-secondary text-4">Work Inquiries</strong>
                                <p class="d-block m-0">(800) 123-4567</p>

                                <strong class="d-block text-secondary text-4 pt-4">Careers & Press</strong>
                                <p class="d-block m-0">(800) 123-4568</p>

                                <strong class="d-block text-secondary text-4 pt-4">Assistance Hours:</strong>
                                <p class="d-block m-0">Mon - Sat 9:00am - 6:00pm</p>
                                <p class="d-block m-0">Sunday - CLOSED</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <h4 class="card-title mb-4 font-weight-semibold text-color-primary">Address and Mail</h4>

                                <strong class="d-block text-secondary text-4">Address</strong>
                                <p class="d-block m-0">123 Street Name, City, England</p>

                                <strong class="d-block text-secondary text-4 pt-4">E-mail</strong>
                                <p class="d-block m-0">
                                    <a class="text-default" href="#">business@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
                                <h4 class="card-title mb-4 font-weight-semibold text-color-primary">Social Media</h4>
                                <ul class="social-icons custom-social-icons p-0 pt-3 m-0">
                                    <li class="m-0 d-block pb-2 social-icons-linkedin">
                                        <a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
                                            <i class="fab fa-linkedin-in text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="m-0 d-block pb-2 social-icons-twitter">
                                        <a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="m-0 d-block pb-2 social-icons-facebook">
                                        <a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Get in Touch</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-2 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Send Us a Message</h2>
                    <p class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat.</p>

                    <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input placeholder="Subject" type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <textarea placeholder="Your Message..." maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--        <section class="are-you-looking-for bg-color-secondary">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-between">--}}
{{--                    <div class="col-xl-5">--}}
{{--                        <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you looking for a</p>--}}
{{--                        <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan Consultant?</h2>--}}
{{--                        <p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your company strategy session right now!</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">--}}
{{--								<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">--}}
{{--									<span>--}}
{{--										<img width="18" height="25" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">--}}
{{--									</span>--}}
{{--									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>--}}
{{--								</span>--}}
{{--                        <a href="demo-business-consulting-2-contact-us.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial consultation</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}


@endsection
