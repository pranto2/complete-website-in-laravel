@extends('layouts.homemaster')
@section('content')
    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-me-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- START ABOUT TEXT AREA -->
                    <div class="about-text">
                        <h2 class="wow fadeInUp text-center" data-wow-delay="0.6s">{{$about->title}}</h2>
                        <p class="wow fadeInUp text-center" data-wow-delay="0.8s">{{$about->description}}</p>
                    </div>
                    <!-- / END ABOUT TEXT AREA -->
                    <!-- START SOCIAL AREA -->
                    <div class="social-links text-center">
                        <ul>
                            @foreach($social as $socials)
                                <li><a href="{{$socials->link}}"><i class="fa fa-{{$socials->icon}}"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- END SOCIAL AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->

    <!-- START SKILL DESIN AREA -->
    <section id="skills" class="my-skill-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="section-title">
                        <h2>{{$service->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START KEY SKILL DESIGN AREA -->
                <p class="wow fadeInUp text-center" data-wow-delay="0.8s">{{$service->detail}}</p>
                <!-- / END KEY SKILL DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SKILL DESIN AREA -->


    <!-- START SERVICES DESIGN AREA -->
    <section class="work-process-area section-padding">
        <div class="container">
            <div class="row">
            @foreach($tserv as $serv)
                <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-md-3 col-sm-6 text-center single-process-box-left">
                        <div class="single-process wow fadeInUp" data-wow-delay="0.2s">
                            <i class="fa fa-{{$serv->icon}}"></i>
                            <h2>{{$serv->title}}</h2>
                            <p>{{$serv->link}}</p>
                        </div>
                    </div>
                    <!-- / END SINGLE SERVICE DESIGN AREA -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- / END SERVICES DESIGN AREA -->


    <!-- START WORK DESIGN AREA -->
    <section id="work" class="work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My recent works.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="work">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".webdesign">webdesign</li>
                    <li class="filter" data-filter=".development">development</li>
                    <li class="filter" data-filter=".photography">photography</li>
                </ul>
            </div>
            <div class="work-inner">
                <div class="row work-posts">
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix webdesign">
                        <div class="item wow fadeInUp" data-wow-delay="0.2s">
                            <a href="assets/boss/images/portfolio/1.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/1.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix development">
                        <div class="item wow fadeInUp" data-wow-delay="0.4s">
                            <a href="assets/boss/images/portfolio/2.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/2.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix web">
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <a href="assets/boss/images/portfolio/3.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/3.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix development photography">
                        <div class="item wow fadeInUp" data-wow-delay="0.8s">
                            <a href="assets/boss/images/portfolio/4.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/4.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix typography web">
                        <div class="item wow fadeInUp" data-wow-delay="1s">
                            <a href="assets/boss/images/portfolio/5.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/5.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-4 mix webdesign development photography">
                        <div class="item wow fadeInUp" data-wow-delay="1.2s">
                            <a href="assets/boss/images/portfolio/6.jpg" class="work-popup">
                                <img src="assets/boss/images/portfolio/6.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END START WORK DESIGN AREA -->

    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>What people say.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-list">
                @foreach($testi as $test)
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial text-center">
                            <img src="{{asset('images/testimonial/'. $test->image)}}" class="img-circle" alt="">
                            <h2>{{$test->name}}</h2>
                            <i class="fa fa-quote-left"></i>
                            <h3>{{$test->title}}</h3>
                            <p>{{$test->comment}}</p>
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START PRICING DESIGN AREA -->
    <section id="pricing" class="pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Statistics.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($sta as $data)
                <!-- START SINGLE PRICING DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="pricing-box">
                            <div class="pricing-header">
                                <div class="plan-title">
                                    <h4>{{$data->b_text}}</h4>
                                </div>
                                <div class="plan-price">
                                    <i class="fa fa-{{$data->icon}}"></i>

                                </div>
                                <div class="plan-month text-muted">
                                    {{$data->s_text}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PRICING DESIGN AREA -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- / END PRICING DESIGN AREA -->


    <!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>my Latest blog.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($blog as $post)
                <!-- START SINGLE BLOG DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-blog">
                            <div class="blog-description text-center">
                                <img src="{{asset('images/'. $post->image)}}" alt="">
                                <h4>{{$post->title}}</h4>
                                <h6>{{ $post->created_at  }}</h6>
                                <p>{!! $post->description !!}</p>
                                <a href="" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE BLOG DESIGN AREA -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-me-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Do you have any project?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="contact-form">
                        <form id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="actions">
                                        <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA -->
                </div>

                <div class="col-md-12">
                    <!-- START CONTACT DETAILS DESIGN AREA -->
                    <div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
                        <div class="col-md-12 col-sm-6">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-phone-handset"></span>
                                <h4>phone</h4>
                                <p class="text-muted">{{$general->mobile}}</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-envelope"></span>
                                <h4>E-mail</h4>
                                <p class="text-muted">{{$general->email}}</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-envelope"></span>
                                <h4>Paypal E-mail</h4>
                                <p class="text-muted">{{$general->pay_email}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- / END CONTACT DETAILS DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="1s">
                    <p>{{$general->footer_text}}</p>
                    <p>{{$general->footer}}</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END FOOTER DESIGN AREA -->
@endsection