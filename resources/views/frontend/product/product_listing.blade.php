<!-- Wrapper for AJAX content -->
<div id="ajax-products-wrapper">

    <!-- Blog Posts Section -->
    <section class="blog-posts section">
        <div class="container">
            <div class="row gy-4">
                @foreach($products as $product)
                <div class="col-lg-4 col-sm-12">
                    <article>
                        <div id="lightgallery" class="lightgallery post-img">
                            @foreach($product->media as $media)
                            <a href="{{ media_file($media->media_url) }}">
                                <img src="{{ media_file($media->media_url) }}" alt="" class="img-fluid" />
                            </a>
                            @endforeach
                        </div>
                        <h2 class="title"><a href="#">{{ $product->title }}</a></h2>
                        <div class="content">
                            {!! short_text($product->description,180) !!}
                            <div class="read-more"><a href="{{route('frontend.product-detail',$product->slug)}}" target="__blank">Read More</a></div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section class="blog-pagination section">
        <div class="container">
            {{ $products->links('vendor.pagination.custom') }}
        </div>
    </section><!-- /Blog Pagination Section -->

</div><!-- /AJAX Wrapper -->
