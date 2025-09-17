@extends('master')
@section('title', 'Contact')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contact Us</h1>
                            <span class="subheading">Get in touch for a personalized quote</span>
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
                        @isset($data)
                            <div class="alert alert-success">
                                <h4>Thank you for your inquiry!</h4>
                                <p>We have received your information and will contact you within 24 hours.</p>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Your Information</h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>Name:</strong> {{ $data->name }}</p>
                                    <p><strong>Email:</strong> {{ $data->email }}</p>
                                    <p><strong>Phone:</strong> {{ $data->phone }}</p>
                                    <p><strong>Company:</strong> {{ $data->company }}</p>
                                    <p><strong>Quantity:</strong> {{ $data->quantity }}</p>
                                    <p><strong>Message:</strong> {{ $data->message }}</p>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a class="btn btn-primary" href="/">Return to Home</a>
                            </div>
                        @else
                        <p>Ready to experience the power of TechPro Laptop? Fill out the form below and our sales team will contact you with a personalized quote and configuration options.</p>
                        <div class="my-5">
                            <form method="post" action="/contact">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="name" required />
                                    <label for="name">Full Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." name="email" required />
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." name="phone" required />
                                    <label for="phone">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="company" type="text" placeholder="Enter your company name..." name="company" />
                                    <label for="company">Company (Optional)</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-control" id="quantity" name="quantity" required>
                                        <option value="">Select quantity...</option>
                                        <option value="1">1 unit</option>
                                        <option value="2-5">2-5 units</option>
                                        <option value="6-10">6-10 units</option>
                                        <option value="11-25">11-25 units</option>
                                        <option value="25+">25+ units</option>
                                    </select>
                                    <label for="quantity">Quantity Needed</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" placeholder="Tell us about your specific requirements..." style="height: 12rem" name="message" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase" type="submit">Send Inquiry</button>
                            </form>
                        </div>
                        @endisset
                    </div>
                </div>
            </div>
        </main>
@endsection('content')
