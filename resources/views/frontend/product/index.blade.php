@extends('frontend.layouts.app')
@section('title') Product @endsection
@section('description') Product @endsection
@section('head-section')
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet">
@endsection
@section('main-content')
<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up" style="padding-bottom: 0px;">
        <h2>Products</h2>
        <p>Products</p>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="widgets-container">


                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">

                        <h3 class="widget-title">Search</h3>
                        <form id="product-search-form" method="GET">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 mt-2">
                                    <select name="category" class="form-control" id="category">
                                        <option value="">--Select Category--</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                                {{$category->category_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-5 col-sm-12 mt-2">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request('search') }}">
                                </div>
                                <div class="col-lg-2 col-sm-12 mt-2">
                                    <button type="submit" class="form-control btn btn-primary">Search</button>
                                </div>
                                <div class="col-lg-1 col-sm-12 mt-2">
                                    <a href="{{route('frontend.product')}}" class="form-control btn btn-warning"><i class="bi bi-arrow-clockwise"></i></a>
                                </div>
                            </div>
                        </form>

                    </div><!--/Categories Widget -->
                </div>

            </div>
            <div id="post-data" class="col-lg-12">
                @include('frontend.product.product_listing', ['products' => $products])
            </div>
        </div>
    </div>

</section><!-- /About Section -->
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>

<script>
    $(document).ready(function () {
        // AJAX fetch function
        function fetchProducts(url = "{{ route('frontend.product') }}") {
            let formData = $('#product-search-form').serialize();

            $.ajax({
                url: url,
                type: 'GET',
                data: formData,
                success: function (res) {
                    $('#ajax-products-wrapper').html(res.html); // Correct way to inject rendered HTML
                    initializeLightGallery();
                },
                error: function () {
                    alert('Failed to fetch products.');
                }
            });
        }

        // Reinitialize LightGallery
        function initializeLightGallery() {
            $('.lightgallery').each(function () {
                if (!$(this).hasClass('lg-processed')) {
                    lightGallery(this, {
                        plugins: [lgZoom, lgThumbnail],
                        speed: 500,
                    });
                    $(this).addClass('lg-processed');
                }
            });
        }

        // Search form submit handler
        $('#product-search-form').on('submit', function (e) {
            e.preventDefault();
            fetchProducts();
        });

        // Handle pagination clicks
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            const url = $(this).attr('href');
            fetchProducts(url);
        });

        // Optional: reset button via JS (if you want to keep it AJAX-based)
        $('.btn-warning').on('click', function (e) {
            e.preventDefault();
            $('#product-search-form')[0].reset();
            fetchProducts("{{ route('frontend.product') }}");
        });

        // Init on load
        initializeLightGallery();
    });
</script>

@endsection