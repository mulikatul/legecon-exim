@extends('frontend.layouts.app')
@section('title')About Us @endsection
@section('description')About Us @endsection
@section('main-content')
<!-- About Section -->
<section id="about" class="about section">
<!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up">
        <h2>About Us</h2>
        <p>About Us</p>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Who We Are</h3>
                    <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                    <p>
                        Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section><!-- /About Section -->
@endsection