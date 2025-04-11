@extends('frontend.layouts.app')
@section('title') Product @endsection
@section('description') Product @endsection
@section('main-content')
<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up">
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
                        <form action="">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 mt-2">
                                    <select class="form-control" name="" id="">
                                        <option value="">Categories 1</option>
                                        <option value="">Categories 2</option>
                                        <option value="">Categories 3</option>
                                    </select>

                                </div>
                                <div class="col-lg-3 col-sm-12 mt-2">
                                    <select class="form-control" name="" id="">
                                        <option value="">Sub Categories 1</option>
                                        <option value="">Sub Categories 2</option>
                                        <option value="">Sub Categories 3</option>
                                    </select>

                                </div>
                                <div class="col-lg-3 col-sm-12 mt-2">

                                    <input type="text" class="form-control" placeholder="search">
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-2 product-search">

                                    <button type="submit" class="form-control" title="Search">Search</button>
                                </div>

                            </div>

                        </form>

                    </div><!--/Categories Widget -->
                </div>

            </div>
            <div class="col-lg-12">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">

                    <div class="container">

                        <div class="row gy-4">

                            <div class="col-lg-4 col-sm-12">
                                <article>

                                    <div class="post-img">
                                        <img src="{{asset('frontend/assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                                    </h2>

                                    
                                    <div class="content">
                                        <p>
                                        Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                                        </p>

                                        <div class="read-more">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>

                                </article>
                            </div><!-- End post list item -->

                            <div class="col-lg-4 col-sm-12">

                                <article>

                                    <div class="post-img">
                                        <img src="{{asset('frontend/assets/img/blog/blog-2.jpg')}}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui</a>
                                    </h2>

                                    

                                    <div class="content">
                                        <p>
                                        Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                                        </p>
                                        <div class="read-more">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>

                                </article>

                            </div><!-- End post list item -->

                            <div class="col-lg-4 col-sm-12">

                                <article>

                                    <div class="post-img">
                                        <img src="{{asset('frontend/assets/img/blog/blog-3.jpg')}}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui</a>
                                    </h2>

                                    

                                    <div class="content">
                                        <p>
                                        Dolorum optio tempore voluptas dignissimos cumque fuga qui
                                        </p>
                                        <div class="read-more">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>

                                </article>

                            </div><!-- End post list item -->

                            <div class="col-lg-4 col-sm-12">

                                <article>

                                    <div class="post-img">
                                        <img src="{{asset('frontend/assets/img/blog/blog-4.jpg')}}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="blog-details.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
                                    </h2>

                                    

                                    <div class="content">
                                        <p>
                                        Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                                        </p>
                                        <div class="read-more">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>

                                </article>

                            </div><!-- End post list item -->

                        </div><!-- End blog posts list -->

                    </div>

                </section><!-- /Blog Posts Section -->

                <!-- Blog Pagination Section -->
                <section id="blog-pagination" class="blog-pagination section">

                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </section><!-- /Blog Pagination Section -->

            </div>



        </div>
    </div>

</section><!-- /About Section -->
@endsection