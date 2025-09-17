@extends('master')
@section('title', 'Home')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>TechPro Laptop</h1>
                            <span class="subheading">The Ultimate Professional Laptop for Modern Work</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Product preview-->
                    <div class="post-preview">
                        <a href="/features">
                            <h2 class="post-title">Revolutionary Performance</h2>
                            <h3 class="post-subtitle">Powered by the latest Intel Core i9 processor and 32GB RAM</h3>
                        </a>
                        <p class="post-meta">
                            Experience lightning-fast performance for all your professional tasks
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Product preview-->
                    <div class="post-preview">
                        <a href="/features">
                            <h2 class="post-title">Stunning 4K Display</h2>
                            <h3 class="post-subtitle">15.6-inch Ultra HD display with 100% sRGB color accuracy</h3>
                        </a>
                        <p class="post-meta">
                            Perfect for creative professionals and content creators
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Product preview-->
                    <div class="post-preview">
                        <a href="/features">
                            <h2 class="post-title">All-Day Battery Life</h2>
                            <h3 class="post-subtitle">Up to 12 hours of continuous usage on a single charge</h3>
                        </a>
                        <p class="post-meta">
                            Stay productive throughout your entire workday
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Product preview-->
                    <div class="post-preview">
                        <a href="/features">
                            <h2 class="post-title">Premium Build Quality</h2>
                            <h3 class="post-subtitle">Aircraft-grade aluminum construction with military-grade durability</h3>
                        </a>
                        <p class="post-meta">
                            Built to last with premium materials and craftsmanship
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Price and CTA-->
                    <div class="text-center">
                        <div class="price-tag mb-3">Starting at $1,299</div>
                        <a class="btn btn-primary text-uppercase" href="/contact">Get Quote Now</a>
                    </div>
                </div>
            </div>
        </div>
@endsection('content')
