@extends('master')
@section('title', 'About')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About TechPro Laptop</h1>
                            <span class="subheading">Innovation meets reliability</span>
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
                            <h2>Our Mission</h2>
                            <p>At TechPro Solutions, we believe that technology should empower professionals to achieve their best work. The TechPro Laptop represents our commitment to delivering cutting-edge technology wrapped in elegant design.</p>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Why Choose TechPro?</h2>
                            <p>With over 10 years of experience in the technology industry, we understand what professionals need from their devices. Our laptops are designed by professionals, for professionals.</p>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Quality Assurance</h2>
                            <p>Every TechPro Laptop undergoes rigorous testing to ensure it meets our high standards. We offer a comprehensive 3-year warranty and 24/7 customer support to give you peace of mind.</p>
                        </div>
                        
                        <div class="product-feature">
                            <h2>Environmental Responsibility</h2>
                            <p>We're committed to sustainability. Our laptops are made with recycled materials where possible, and we offer a trade-in program to help reduce electronic waste.</p>
                        </div>
                        
                        <div class="text-center mt-5">
                            <a class="btn btn-primary text-uppercase" href="/features">View Features</a>
                            <a class="btn btn-outline-primary text-uppercase ms-3" href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection('content')
