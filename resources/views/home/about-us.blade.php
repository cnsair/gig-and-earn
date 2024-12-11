@extends('layouts.app-home')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('assets/images/bg_2.jpg') }});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5"
                data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <span class="mr-3">
                        <a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span>About</span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-about d-md-flex">
    <div class="one-half img object-cover" style="background-image: url({{ asset('assets/images/about.jpg') }})"></div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4"><span>We Are The Job-Finding Agency</span></h2>
        </div>
        <div>
            <p>
                Welcome to GigAndEarn.com, the ultimate destination for professionals seeking to transform their financial future. Are you tired of the traditional job hunt, endless interviews, and limited opportunities? Frustrated with the lack of financial growth despite your hard work and dedication? Imagine discovering a hidden side hustle so lucrative and under-the-radar that few even know it exists. Picture yourself earning significantly more each month, working on your own terms, and enjoying the freedom to live life to the fullest. <br/><br/>

                At GigAndEarn.com, we reveal the best-kept secrets to unlocking incredible income opportunities across various professions. Whether you're an accountant, artisan, consultant, digital marketer, graphic designer, online teacher, project manager, software developer, virtual assistant, or writer, we have the strategies and insider knowledge to help you achieve financial success beyond your wildest dreams. Join our community of like-minded professionals who have already changed their financial stories and are thriving in today's challenging economic climate. With our guidance, you can increase your earnings, achieve financial stability, and build a resilient future.<br/><br/>
            </p>
        </div>
    </div>
</section>

<!-- Testimonials -->
<x-testimonial />

<!-- App Product Count -->
<x-app-product-count />


@endsection