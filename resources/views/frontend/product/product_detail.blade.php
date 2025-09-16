@extends('frontend.layouts.app')
@section('title') {{$product->meta_title}} @endsection
@section('description') {{$product->meta_description}} @endsection
@section('head-section')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">
@endsection
@section('main-content')
<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up" style="padding-bottom: 0px;">
        <h2>Product Detail </h2>
        <p>Product Detail</p>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            @php
                            $mediaList = $product->media;
                            @endphp

                            <!-- Main Image -->
                            <div>
                                <a href="{{ media_file($mediaList[0]->media_url) }}" id="mainImageLink">
                                    <img src="{{ media_file($mediaList[0]->media_url) }}" alt="Main image" id="mainImage" class="img-fluid mb-3" style="max-width: 100%;">
                                </a>
                            </div>

                            <!-- Thumbnails -->
                            <div class="d-flex gap-2 flex-wrap">
                                @foreach($mediaList as $key => $media)

                                <img
                                    src="{{ media_file($media->media_url) }}"
                                    alt="Thumbnail {{ $key }}"
                                    class="img-thumbnail"
                                    style="width: 100px; height: auto; cursor: pointer;"
                                    onclick="swapMainImage('{{ media_file($media->media_url) }}')">

                                @endforeach
                            </div>

                            <h2 class="title">{{$product->title}}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-list-ul"></i> <a href="#">{{optional($product->category)->category_name}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-diagram-3"></i> <a href="#">{{optional($product->subCategory)->sub_category_name}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-cart-check"></i> <a href="{{$product->buy_link}}" target="_blank"><u><b>Buy Link</b></u></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-tag"></i> <b>Starting From &nbsp;</b> <u>{{$product->price}}</u>/-</li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {!! $product->description !!}

                            </div><!-- End post content -->
                        </article>

                    </div>
                </section><!-- /Blog Details Section -->
            </div>
        </div>
    </div>

</section><!-- /About Section -->
@endsection
@section('script')

<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script>
    // Store the media URLs in JS
    const mediaUrls = [
        @foreach($mediaList as $media)
            "{{ media_file($media->media_url) }}",
        @endforeach
    ];

    // Replace main image on thumbnail click
    function swapMainImage(newSrc) {
        const mainImg = document.getElementById('mainImage');
        const mainLink = document.getElementById('mainImageLink');
        mainImg.src = newSrc;
        mainLink.href = newSrc;
    }

    // LightGallery for main image only
    lightGallery(document.getElementById('mainImageLink'), {
        dynamic: true,
        dynamicEl: mediaUrls.map(url => ({
            src: url
        })),
        plugins: [lgZoom, lgThumbnail],
        thumbnail: true,
        zoom: true
    });
</script>

@endsection