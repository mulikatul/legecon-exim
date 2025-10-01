@extends('frontend.layouts.app')
@section('title')About Us @endsection
@section('description')About Us @endsection
@section('head-section')

@endsection
@section('main-content')
<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up">
        <h2>About Us</h2>
        <p>About Us</p>
        <p class="mb-0" style="font-size: 20px;">Legecon Exim Pvt. Ltd. is a trusted name in the field of industrial automation, offering world-class products, innovative solutions, and turnkey project execution. With a strong focus on reliability and customer success, we empower industries to achieve higher efficiency, lower costs, and seamless digital transformation.</p>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h2>Who We Are</h2>
                    <!-- <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2> -->
                    <p>
                        We are authorized distributors of Crompton Greaves and RealiteQ (Israel), providing advanced automation solutions such as VFD Drives, PLCs, HMIs, SCADA Systems, Soft Starters, and IIoT platforms. Our team combines technical expertise with deep industry knowledge to deliver solutions tailored to each client’s needs.
                    </p>
                    <!-- <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
            </div>

        </div>
    </div>
    <!-- Alt Features Section -->
    <section id="alt-features" class="alt-features section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-12 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

                    <div class="row align-self-center gy-5 d-flex justify-content-evenly">

                        <div class="col-md-5 icon-box d-flex flex-column text-center content value">
                            <i class="bi bi-bullseye mb-2"></i>
                            <div>
                                <h4>Our Mission</h4>
                                <p style="text-align: justify;">To enable industries to harness the power of automation and digital technologies, ensuring operational excellence, safety, and sustainable growth.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-5 icon-box d-flex flex-column text-center content value">
                            <i class="bi bi-graph-up-arrow mb-2"></i>
                            <div>
                                <h4>Our Vision</h4>
                                <p style="text-align: justify;">To become a leading global automation partner by continuously innovating and delivering high-performance, reliable, and future-ready automation systems.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-8 icon-box d-flex flex-column text-center content value">
                            <i class="bi bi-shield-check mb-2"></i>
                            <div>
                                <h4>Our Strength</h4>
                                <p style="text-align: -webkit-match-parent;">Decades of combined experience in industrial automation <br/>
                                    Strong partnerships with global technology leaders<br/>
                                    Proven track record in turnkey projects and custom SCADA/PLC solutions<br/>
                                    Expertise across industries: Pharmaceutical, Water Treatment, Oil & Gas, Automotive, Solar, Food & Beverage, Packaging, OEM, and more<br/>
                                    Commitment to Industry 4.0 transformation through IIoT, predictive maintenance, and digital twin technologies</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <!-- End Feature Item -->

                    </div>

                </div>

                <!-- <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('frontend/assets/img/alt-features.png')}}" class="img-fluid" alt="">
            </div> -->

            </div>

        </div>

    </section><!-- /Alt Features Section -->
    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Our hard working team</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

</section><!-- /About Section -->
@endsection