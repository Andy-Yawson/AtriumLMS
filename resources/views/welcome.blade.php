@extends('layouts.app')
@section('content')
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro text-white text-center"
         style="background: url({{asset('images/bgg.jpg')}}) no-repeat top;background-size: cover">
    <div class="container d-flex flex-column" style="min-height:80vh;">

        <div class="row" style="margin-top: 15%">
            <div class="col-lg-8 col-sm-12 text-center mx-auto">
                <h1 class="display-4 mb-3">Education is the key</h1>
                <p class="lead mb-5">Cempus amet donec, egestas pulvinar amet semper accusamus commod</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto text-center">
                <form class="form-noborder">
                    <div class="form-row mb-5">
                        <div class="col-lg-9 col-sm-12 form-group">
                            <input class="form-control form-control-lg"
                                   placeholder="What do you want to learn?" type="text">
                        </div>
                        <div class="col-lg-3 col-sm-12 form-group">
                            <button class="btn btn-primary btn-block btn-lg" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="small my-5">Cempus amet donec, egestas pulvinar amet semper accusamus commod</p>

            </div> <!-- col.// -->
        </div> <!-- row.// -->

    </div>
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ======================== PETTY INFO ========================== -->
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3 mb-2 mb15">
                <article class="box h-100">
                    <figure class="itembox text-center">
                        <span class="mt-2 icon-wrap rounded icon-sm bg-success"><i class="fa fa-user white"></i></span>
                        <figcaption class="text-wrap">
                            <h5 class="title">Creative Strategy &amp; solution</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div><!-- col // -->
            <div class="col-md-3 mb-2 mb15">
                <article class="box h-100">
                    <figure class="itembox text-center">
						<span class="mt-2 icon-wrap rounded icon-sm bg-warning"><i
                                class="fa fa-cogs white"></i>  </span>
                        <figcaption class="text-wrap">
                            <h5 class="title">Some good title</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div> <!-- col // -->
            <div class="col-md-3 mb-2 mb15">
                <article class="box h-100">
                    <figure class="itembox text-center">
						<span class="mt-2 icon-wrap rounded icon-sm bg-primary"><i
                                class="fa fa-clock white"></i> </span>
                        <figcaption class="text-wrap">
                            <h5 class="title">Lifetime Access</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div> <!-- col // -->
            <div class="col-md-3 mb-2 mb15">
                <article class="box h-100">
                    <figure class="itembox text-center">
                        <span class="mt-2 icon-wrap rounded icon-sm bg-secondary"><i class="fa fa-building white"></i>  </span>
                        <figcaption class="text-wrap">
                            <h5 class="title">Business Innovation</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div> <!-- col // -->
        </div> <!-- row.// -->
    </div>
</section>
<!-- ======================= END OF PETTY INFO ==================== -->

<!-- ======================== COURSES ============================ -->
<section>
    <div class="container">
        <div class="mt-5">
            <h2 class="div-header">Our Courses</h2>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap">
                        <img src="{{ asset('images/phoo.jpg') }}" style="height: 100%">
                    </div>
                    <figcaption class="info-wrap">
                        <h5 class="title text-truncate">
                            Adobe Photoshop
                        </h5>
                        <p class="desc">Andrews Offei Yawson</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Enroll Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$1280</span>
                            <del class="price-old">$1980</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure> <!-- card // -->
            </div> <!-- col // -->
        </div>
    </div>
</section>
<!-- ======================== END OFCOURSES ============================ -->

<!--==================== Recommendation Section ======================-->
<section class="mb-5 recommend-section">
    <div class="bg-dark" style="height: auto;width: 100%">
        <div class="recommend-container">
            <div class="row recommend-div py-3">
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/coins-white.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/checklist.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/scale.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/report.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/syncronization.svg') }}" height="30px" width="30px">
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/training.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-4 vector-img">
                    <div align="center">
                        <h6 class="recommend-title">Invest whiles studying</h6>
                        <p class="recommend-para">Use digital tokens earned to invest in agriculture and smile with money
                            received back in cash.</p>
                        <button class="btn btn-outline-primary ">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/social-media.svg') }}" height="30px" width="30px">
                    </div>
                </div>
            </div>
            <div class="row recommend-div py-3">
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/slideshare-logotype.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/video-player.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/syncronization.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/scale.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/slideshare-logotype.svg') }}" height="30px" width="30px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================== End of Recommendation Section ======================-->

<!--=================== Categories ===================-->
<section>
    <div class="container">
        <div class="mt-5 mb-4">
            <h2 class="div-header">Top Categories</h2>
        </div>
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">Mathematics</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">English Lang</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">Inter Science</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">IT and Software</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">Development</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">Economics</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">Marketing</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
            <div class="col-md-3 mb-3">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
                            <img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title category-h5">Hand Made</h5>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article>
            </div>
        </div>
    </div>
</section>
<!--=================== Categories ===================-->

<!--================ Testimonials ================-->
<section>
    <div class="container">
        <div class="mt-5 mb-4">
            <h2 class="div-header">Our Trusted Partners</h2>
        </div>
        <div class="slick-slider mb-5" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
            <div class="col-lg-2 col-sm-6 col-xs-6 mb-1">
                <img src="{{ asset('images/pinterest-logo.svg') }}" width="100px" height="70px">
            </div>
            <div class="col-lg-2 col-sm-6 col-xs-6 mb-1">
                <img src="{{ asset('images/pinterest-logo.svg') }}" width="100px" height="70px">
            </div>
            <div class="col-lg-2 col-sm-6 col-xs-6 mb-1">
                <img src="{{ asset('images/pinterest-logo.svg') }}" width="100px" height="70px">
            </div>
            <div class="col-lg-2 col-sm-6 col-xs-6 mb-1">
                <img src="{{ asset('images/pinterest-logo.svg') }}" width="100px" height="70px">
            </div>
        </div>
    </div>
</section>
<!--================ End of Testimonials ================-->

<!--============== Trusted clients ===================-->
<section>
    <div class="container">
        <div class="mt-5 mb-4">
            <h2 class="div-header">What some of our students think</h2>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 p-2">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
							<span class="icon-wrap icon-md round">
								<img src="{{ asset('images/computer.svg') }}" height="50px" width="50px"/>
							</span>
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title">Ernest Adjei</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut laborLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 p-2">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
							<span class="icon-wrap icon-md round">
								<img src="{{ asset('images/computer.svg') }}" height="50px" width="50px"/>
							</span>
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title">Kofi Kumi</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut laborLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 p-2">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
							<span class="icon-wrap icon-md round">
								<img src="{{ asset('images/computer.svg') }}" height="50px" width="50px"/>
							</span>
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title">Julian Draxler</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut laborLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 p-2">
                <article class="box">
                    <figure class="itemside">
                        <div class="aside">
							<span class="icon-wrap icon-md round">
								<img src="{{ asset('images/computer.svg') }}" height="50px" width="50px"/>
							</span>
                        </div>
                        <figcaption class="text-wrap">
                            <h5 class="title">Akwele Kwesi</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut laborLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labor </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </article> <!-- panel-lg.// -->
            </div>
        </div>
    </div>
</section>
<!--=============End of trusted clients ==================-->

<!--==================== Instructor Section ======================-->
<section class="recommend-section">
    <div class="bg-dark" style="height: auto;width: 100%">
        <div class="recommend-container">
            <div class="row recommend-div py-3">
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/coins-white.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/checklist.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/scale.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/report.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/syncronization.svg') }}" height="30px" width="30px">
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/training.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-4 vector-img">
                    <div align="center">
                        <h6 class="recommend-title">Become An Instructor Today</h6>
                        <p class="recommend-para">We give you the opportunity to assist millions of students to study</p>
                        <button class="btn btn-outline-primary ">Join To Start Now</button>
                    </div>
                </div>
                <div class="col-md-4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/social-media.svg') }}" height="30px" width="30px">
                    </div>
                </div>
            </div>
            <div class="row recommend-div py-3">
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/slideshare-logotype.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/video-player.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/syncronization.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/scale.svg') }}" height="30px" width="30px">
                    </div>
                </div>
                <div class="col-md-2dot4 vector-img">
                    <div align="center">
                        <img src="{{ asset('images/slideshare-logotype.svg') }}" height="30px" width="30px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================== End of Instructor Section ======================-->
@endsection
