@extends('frontend.layouts.app')
@section('title')Contact Us @endsection
@section('description')Contact Us @endsection
@section('head-section')
<style>
    .contact-card{
        height: 250px;
    }
</style>
@endsection
@section('main-content')
<!-- Contact Section -->
<section id="contact" class="contact section mt-5">

    <!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item contact-card" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Block No. 108, Building No. 9,
                            Lokmanya Nagar, Sadashiv Peth,
                            Pune - 411030 , Maharashtra, India</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item contact-card" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+91 70208 93551</p>
                            <p>+91 20 2999 1103</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item contact-card" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p><a href="mailto:legeconeximpvtltd@gmail.com">legeconeximpvtltd@gmail.com</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item contact-card" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Saturday</p>
                            <p>10:00 Am - 6:30 Pm</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-6">
                <form action="{{route('frontend.store-contact-us')}}" method="post" class="php-email-form" >
                    <div class="row gy-4">
                        @csrf
                        <div class="col-6">
                            <input type="text" class="form-control" name="name" id="inputFirstName" value="{{old('name')}}" placeholder="Enter Name" required>
                            @error('name')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                        
                        <div class="col-6">
                            <input type="email" class="form-control" name="email" id="inputEmail4" value="{{old('email')}}" placeholder="Enter Email" required>
                            @error('email')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                        <div class="col-12">
                            
                            <input type="text" class="form-control" id="inputPhoneNumber" name="phone_no" value="{{old('phone_no')}}" placeholder="Enter Phone Number" required>
                            @error('phone_no')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                        <div class="col-12">
                            
                            <input type="text" class="form-control" name="company" id="inputEmail4" value="{{old('company')}}" placeholder="Enter company" required>
                            @error('company')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            
                            <input type="text" class="form-control" name="location" id="inputEmail4" value="{{old('location')}}" placeholder="Enter location" required>
                            @error('location')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Enter Your Message" required>{{old('message')}}</textarea>
                            @error('message')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>

                        <div class="col-12" id="RecaptchaField2">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
@include('sweetalert::alert') 
@endsection