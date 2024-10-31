@extends('frontend.base')
@section('content')

    <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Blog</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <article>
                    <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                        <div class="card-body p-4 z-index-1">
                            <a href="#">
                                <img class="card-img-top border-radius-0"
                                     src="{{asset('frontend/images/blog1.jpg')}}" style="height: 340px;object-fit: cover"
                                     alt="Card Image">
                            </a>
                            <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                <time pubdate datetime="2022-01-10">10 Jan 2022</time>
                                <span class="opacity-3 d-inline-block px-2">|</span> John Doe
                            </p>
                            <div class="card-body p-0">
                                <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                                                                                       href="#">An
                                        Interview with John Doe</a></h4>
                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                    efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                    sollicitudin...</p>
                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                    efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                    sollicitudin...</p>

{{--                                <a href="demo-business-consulting-2-blog-post.html"--}}
{{--                                   class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More--}}
{{--                                    +</a>--}}
                            </div>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                        <div class="card-body p-4 z-index-1">
                            <a href="#">
                                <img class="card-img-top border-radius-0" src="{{asset('frontend/images/blog2.jpg')}}" style="height: 340px;object-fit: cover"
                                     alt="Card Image">
                            </a>
                            <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                <time pubdate datetime="2022-01-10">10 Jan 2022</time>
                                <span class="opacity-3 d-inline-block px-2">|</span>  John Doe
                            </p>
                            <div class="card-body p-0">
                                <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                                                                                       href="demo-business-consulting-2-blog-post.html">How
                                        to Grow your Business</a></h4>
                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                    efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                    sollicitudin...</p>

                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                    efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                    sollicitudin...</p>
                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel
                                    efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis
                                    sollicitudin...</p>
                                {{--                                    <a href="demo-business-consulting-2-blog-post.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
                            </div>
                        </div>
                    </div>
                </article>

                <ul class="pagination pagination-rounded pagination-lg justify-content-center">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>

            </div>

        </div>
    </div>

    @include('frontend.partials.cta')
@endsection
{{--<div class="col-lg-3 pt-4 pt-lg-0">--}}
{{--    <aside class="sidebar">--}}
{{--        <div class="px-3 mb-4">--}}
{{--            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog</h3>--}}
{{--            <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat quis porta diam.</p>--}}
{{--        </div>--}}
{{--        <div class="py-1 clearfix">--}}
{{--            <hr class="my-2">--}}
{{--        </div>--}}
{{--        <div class="px-3 mt-4">--}}
{{--            <form action="page-search-results.html" method="get">--}}
{{--                <div class="input-group mb-3 pb-1">--}}
{{--                    <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">--}}
{{--                    <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="py-1 clearfix">--}}
{{--            <hr class="my-2">--}}
{{--        </div>--}}
{{--        <div class="px-3 mt-4">--}}
{{--            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>--}}
{{--            <div class="pb-2 mb-1">--}}
{{--                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>--}}
{{--                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>--}}
{{--                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>--}}
{{--                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>--}}
{{--                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>--}}
{{--                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="py-1 clearfix">--}}
{{--            <hr class="my-2">--}}
{{--        </div>--}}
{{--        <div class="px-3 mt-4">--}}
{{--            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Comments</h3>--}}
{{--            <div class="pb-2 mb-1">--}}
{{--                <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2022</span></a>--}}
{{--                <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2022</span></a>--}}
{{--                <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Consectetur adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2022</span></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="py-1 clearfix">--}}
{{--            <hr class="my-2">--}}
{{--        </div>--}}
{{--        <div class="px-3 mt-4">--}}
{{--            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0">Categories</h3>--}}
{{--            <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">--}}
{{--                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a></li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>--}}
{{--                    <ul>--}}
{{--                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos (3)</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle (2)</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology (1)</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </aside>--}}
{{--</div>--}}
