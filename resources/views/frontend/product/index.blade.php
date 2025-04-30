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
                                <div class="col-lg-9 col-sm-12 mt-2">
                                    <input type="text" name="search" class="form-control" placeholder="search">
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
        // Function to fetch products via AJAX
        function fetchProducts(url = null) {
            url = url || "{{ route('frontend.product') }}"; 
            let formData = $('#product-search-form').serialize();

            $.ajax({
                url: url,
                data: formData,
                type: 'GET',
                success: function (res) {
                    // Inject the new products into the wrapper
                    $('#ajax-products-wrapper').html(res.html);

                    // Re-initialize LightGallery after new content is loaded
                    initializeLightGallery();
                },
                error: function () {
                    alert('Failed to fetch products');
                }
            });
        }

        // Initialize LightGallery for new products
        function initializeLightGallery() {
            // Re-initialize LightGallery for newly loaded products
            $('.lightgallery').each(function() {
                if (!$(this).hasClass('lg-processed')) {
                    lightGallery(this, {
                        plugins: [lgZoom, lgThumbnail],
                        speed: 500,
                    });
                    $(this).addClass('lg-processed'); // Prevent re-initialization
                }
            });
        }

        // Trigger search via AJAX
        $('#product-search-form').on('submit', function (e) {
            e.preventDefault();
            fetchProducts();
        });

        // AJAX Pagination handling
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            let url = $(this).attr('href');
            fetchProducts(url);
        });

        // Initialize LightGallery when the page is loaded (first time)
        initializeLightGallery();
    });
</script>

@endsection