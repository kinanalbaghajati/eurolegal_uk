<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100">
                                <ul class="nav nav-pills justify-content-between w-100 h-100">
                                    <li class="nav-item py-2 d-inline-flex">
													<span class="header-top-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase">
														<span>
															<img width="15" height="18" src="{{asset('frontend/img/demos/business-consulting-2/icons/phone.svg')}}" alt="Phone">
														</span>
														<a class="text-color-secondary text-color-hover-primary text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>
													</span>
                                        <span class="header-top-email px-0 font-weight-normal align-items-center d-none d-xl-flex">
														<span>
															<img width="25" height="18" src="{{asset('frontend/img/demos/business-consulting-2/icons/mail.svg')}}" alt="Mail">
														</span>
														<a class="text-color-secondary text-color-hover-primary text-decoration-none" href="#">business@gmail.com</a>
													</span>
{{--                                        <span class="header-top-opening-hours px-0 font-weight-normal align-items-center text-color-secondary d-none d-xl-flex">--}}
{{--														<span>--}}
{{--															<img width="19" height="18" src="img/demos/business-consulting-2/icons/calendar.svg" alt="Calendar">--}}
{{--														</span>--}}
{{--														Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED--}}
{{--													</span>--}}
                                    </li>
                                    <li class="nav-item nav-item-header-top-socials d-none d-md-flex justify-content-between h-100">
													<span class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
														<a href="{{route('contact-us')}}" class="btn-primary d-flex align-items-center justify-content-center h-100 w-100 text-color-light font-weight-semibold text-decoration-none text-uppercase custom-button-header-top">free initial consultation</a>
													</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container bg-color-light">
            <div class="header-row">
                <div class="header-column header-column-logo">
                    <div class="header-row">
                        <div class="header-logo py-1">
                            <a href="{{route('home')}}" >
                                <img alt="Porto" width="210" height="47" src="{{asset('frontend/images/logo1.png')}}" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column header-column-nav-menu justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-secondary">
                                            <a class="nav-link active" href="{{route('home')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link" href="{{route('about-us')}}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link" href="{{route('services')}}">
                                                Services
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link" href="{{route('success.stories')}}">
                                                Success Stories
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link" href="{{route('blog')}}">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link" href="{{route('faq')}}">
                                                FAQ
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link" href="{{route('contact-us')}}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-column header-column-search justify-content-center align-items-end">
                    <div class="header-nav-features">
                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                            <a href="#" class="header-nav-features-toggle" data-focus="headerSearch">
                                <i class="fas fa-search header-nav-top-icon text-color-secondary text-3"></i>
                            </a>
                            <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
                                <form role="search" action="page-search-results.html" method="get">
                                    <div class="simple-search input-group">
                                        <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                        <button class="btn" type="submit">
                                            <i class="fa fa-search header-nav-top-icon text-color-secondary"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
