@extends('layouts.website')
@section('title', 'Contact Us')
@section('content')
<!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Contact Us</h2>
            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Privacy Policy Start  ======-->
    <section class="contact-info-section section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-info-items mb-md-gap-50">
                        <div class="contact-info-item text-center">
                            <i class="fal fa-phone"></i>
                            <h5 class="title">Phone Number</h5>
                            <p>{{ config('app.phone')}}</p>
                        </div>
                        <div class="contact-info-item text-center">
                            <i class="fal fa-envelope"></i>
                            <h5 class="title">Email Address</h5>
                            <p>{{ config('app.email')}}</p>
                        </div>
                        <div class="contact-info-item text-center">
                            <i class="fal fa-map"></i>
                            <h5 class="title">Office Location</h5>
                            <p>{{ config('app.address')}}</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-map-three">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2311.6430941379194!2d-5.92788308458578!3d54.59266268832825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486108fecc60760f%3A0x9322568bc1df2a4b!2s157%20Cromac%20St%2C%20Belfast%20BT2%208JE%2C%20UK!5e0!3m2!1sen!2sng!4v1639241436580!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Information End ======-->

@endsection