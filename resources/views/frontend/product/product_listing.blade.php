<!-- Wrapper for AJAX content -->
<div id="ajax-products-wrapper">

    <!-- Blog Posts Section -->
    <section class="blog-posts section">
        <div class="container">
            <div class="row gy-4">
                @forelse($products as $product)
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
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-list-ul"></i> <a href="#">{{optional($product->category)->category_name}}</a></li>
                                <li class="d-flex align-items-center p-0"><i class="bi bi-tag"></i> <b>Starting From &nbsp;</b> <u>{{$product->price}}</u>/-</li>
                            </ul>
                        </div>
                        <div class="content">
                            {!! short_text($product->description,180) !!}
                            <div class="read-more"><a href="{{route('frontend.product-detail',$product->slug)}}" target="__blank">Read More</a></div>
                        </div>
                    </article>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>No products found.</p>
                </div>
                @endforelse
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