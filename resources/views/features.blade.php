@extends('master')
@section('title', 'Features')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>TechPro Laptop Features</h1>
                            <span class="subheading">Everything you need for professional success</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="product-feature">
                            <h2>Performance Specifications</h2>
                            <ul class="specification-list">
                                <li>Intel Core i9-13900H Processor (14 cores, up to 5.4GHz)</li>
                                <li>32GB DDR5 RAM (expandable to 64GB)</li>
                                <li>1TB NVMe SSD (up to 4TB available)</li>
                                <li>NVIDIA GeForce RTX 4070 Graphics Card</li>
                                <li>Windows 11 Pro pre-installed</li>
                            </ul>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Display & Audio</h2>
                            <ul class="specification-list">
                                <li>15.6-inch 4K UHD IPS Display (3840 x 2160)</li>
                                <li>100% sRGB color accuracy</li>
                                <li>400 nits brightness with anti-glare coating</li>
                                <li>Dolby Atmos 4-speaker audio system</li>
                                <li>Built-in HD webcam with privacy shutter</li>
                            </ul>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Connectivity & Ports</h2>
                            <ul class="specification-list">
                                <li>2x USB-C Thunderbolt 4 ports</li>
                                <li>2x USB-A 3.2 Gen 2 ports</li>
                                <li>1x HDMI 2.1 port</li>
                                <li>1x 3.5mm headphone jack</li>
                                <li>1x SD card reader</li>
                                <li>Wi-Fi 6E and Bluetooth 5.3</li>
                            </ul>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Battery & Power</h2>
                            <ul class="specification-list">
                                <li>90Wh lithium-polymer battery</li>
                                <li>Up to 12 hours of continuous usage</li>
                                <li>Fast charging: 50% in 30 minutes</li>
                                <li>180W USB-C power adapter included</li>
                                <li>Power delivery for charging other devices</li>
                            </ul>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Security & Build</h2>
                            <ul class="specification-list">
                                <li>Fingerprint reader for secure login</li>
                                <li>Windows Hello facial recognition</li>
                                <li>TPM 2.0 security chip</li>
                                <li>Aircraft-grade aluminum construction</li>
                                <li>MIL-STD-810H durability testing</li>
                                <li>Backlit keyboard with 1.5mm key travel</li>
                            </ul>
                        </div>
                        
                        <div class="text-center mt-5">
                            <div class="price-tag mb-3">Starting at $1,299</div>
                            <a class="btn btn-primary text-uppercase" href="/contact">Get Your Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection('content')
