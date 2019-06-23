@extends('layouts.app')
@section('content')

<!-- ========================= COURSE HEADER PAGETOP ========================= -->
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-7">
                <h2 class="title-page detail-header-h2">
                    Learn Ethical Hacking From Scratch
                </h2>
                <p class="detail-header-p">
                    Become an ethical hacker that can hack computer systems
                    like black hat hackers and secure them like security experts.
                </p>
                <div class="course-rating-text">
                    <p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>

                        <span class="rating">4.5 ratings with</span>
                        <span class="enrolled">(203,439) students enrolled</span>
                    </p>
                </div>
                <div>
                    <button class="btn btn-primary">
                        <i class="fa fa-hand-point-right"></i>
                        Take Course Now
                    </button>
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('images/phoo.jpg') }}" width="100%" height="100%">
            </div>
        </div>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION COURSE HEADER// ========================= -->

<!--=============== Main Content =================-->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="content-course">
                <div class="mb-4">
                    <h2 class="div-header">Course Topics</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <article class="card card-product mt-5">
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="div-header">Course Content</h2>
                    </div>
                    <div class="about-course">
                        <h3>Description</h3>
                        <p>
                            Welcome this comprehensive course on Ethical Hacking! This course
                            assumes you have NO prior knowledge in hacking and by the end of it
                            you'll be able to  hack systems like black-hat hackers and secure them
                            like security experts!<br><br>

                            This course is highly practical but it won't neglect the theory,
                            so we'll start with ethical hacking basics and the different fields
                            in penetration testing, installing the needed software (works on Windows,
                            Linux and Mac OS X) and then we'll dive and start hacking systems straight
                            away. From here onwards you'll learn everything by example, by analysing
                            and exploiting computer systems such as networks, servers, clients,
                            websites .....etc, so we'll never have any boring dry theoretical lectures.<br><br>

                            The course is divided into a number of sections, each section covers
                            a penetration testing / hacking field, in each of these sections you'll
                            first learn how the target system works, the weaknesses of this system,
                            and how to practically exploit theses weaknesses and hack into it, not only
                            that but you'll also learn how to secure this system from the discussed attacks.
                            This course will take you from a beginner to a more advanced level by the time you
                            finish, you will have knowledge about most penetration testing fields.
                        </p>
                    </div>
                </div>
            </article>

            <article class="card card-product mt-5">
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="div-header">About Instructor</h2>
                    </div>
                    <div class="about-course">
                        <article class="">
                            <figure class="itemside">
                                <div class="aside">
									<span class="icon-wrap icon-md round">
										<img src="{{ asset('images/computer.svg') }}" height="50px" width="50px">
									</span>
                                </div>
                                <figcaption class="text-wrap">
                                    <h5 class="title">Andrews Yawson</h5>
                                    <p class="text-muted">
                                        My name is Zaid Al-Quraishi, I am an ethical hacker,
                                        a computer scientist, and the founder and CTO of zSecurity.
                                        I just love hacking and breaking the rules, but don’t get me
                                        wrong as I said I am an ethical hacker.<br><br>

                                        I have tremendous experience in ethical hacking, I started
                                        making video tutorials back in 2009 in an ethical hacking
                                        community (iSecuri1ty), I also worked as a pentester for the
                                        same company. In 2013 I started teaching my first course live
                                        and online, this course received amazing feedback which motivated
                                        me to publish it on Udemy.
                                    </p>
                                    <p>
                                        <span style="margin-right: 15px"><i class="fa fa-play-circle"></i> 10 courses</span>
                                        <span><i class="fa fa-users"></i> 25,000 students</span>
                                    </p>
                                </figcaption>
                            </figure> <!-- iconbox // -->
                        </article> <!-- panel-lg.// -->
                    </div>
                </div>
            </article>

            <article class="card card-product mt-5">
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="div-header">More courses by Andrews Yawson</h2>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
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
                        </div>
                    </div>
                </div>
            </article>

        </div>
        <div class="col-md-4">

            <div class="card">
                <div>
                    <img class="card-img-top img-responsive" src="{{ asset('images/phoo.jpg') }}" alt="course-demo-video">
                    <a class="play-button" href="#"><i class="fa fa-play-circle fa-3x"></i></a>
                </div>
                <div class="card-body course-vid">
                    <h5 class="card-title">GHS 17.00</h5>
                    <button class="btn btn-primary btn-lg btn-block">ENROLL NOW</button>
                    <div class="mt-2">
                        <p>This course includes</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">14 hours demand video</li>
                            <li class="list-group-item">21 downloadable resources</li>
                            <li class="list-group-item">Full lifetime access</li>
                            <li class="list-group-item">Digital Token after completion</li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <div align="center">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>  <!-- card.// -->
            <!-- Tokens -->
            <div class="card  mt-5 px-2 py-2">
                <img class="card-img-top" src="{{ asset('images/coins.svg') }}" height="100px" align="center">
                <div class="card-body">
                    <h5 class="card-title">Digital Token Coins</h5>
                    <p class="card-text">
                        Dightcode learning management system provide digital online token coins
                        which can be used to invest in the biggest online agriculture farming business <b>KWIDEX</b>
                        which gives you physical earnings that you can withdraw on any mobile money wallet.
                    </p>
                    <p class="card-text"><small class="text-muted">Visit www.kwidex.com for more information</small></p>
                </div>
            </div>  <!-- card.// -->

        </div>
    </div>
</div>
<!--============== End of Main Content =================-->

@endsection
