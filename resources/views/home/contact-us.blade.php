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
                    <span>Contact</span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <p><span>Phone:</span> <a href="tel://17001001GAE">+17001001GAE</a></p>
            </div>
            <div class="col-md-4">
                <p>
                    <span>Emails:</span> <a href="mailto:info@gigandearn.com">info@gigandearn.com</a>
                                <a href="mailto:info@gigandearn.com">support@gigandearn.com</a>
                </p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-8 d-flex">

                <form method="POST" action="{{ route('guest-message.store') }}" class="bg-white p-5 contact-form" onsubmit="return guestMessageF(this);">
                    @csrf
                    
                    @if (session('status') === 'success')
                        <x-success-msg>
                            {{ __('Your message has been sent recieved. We will get back to you within 24 hours.') }}
                        </x-success-msg>
                    @elseif (session('status') === 'failed')
                        <x-failed-msg>
                            {{ __('Ooops.. Something went wrong. Please try again later.') }}
                        </x-failed-msg>
                    @endif
                
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="Your Name"> -->
                        <input type="text" name="name" class="form-control" placeholder="Your Name" :value="old('name')" required autofocus />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="Your Email"> -->
                        <input type="text" name="email" class="form-control" placeholder="Your Email" :value="old('email')" required />
                        <x-input-error for="email" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="Subject"> -->
                        <input type="text" name="subject" class="form-control" placeholder="Subject" :value="old('subject')" />
                        <x-input-error for="subject" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <!-- <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea> -->
                        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Your Message (1000 characters max)" required>{{ old('message') }}</textarea>
                        <x-input-error for="message" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <!-- <div class="col-md-6 order-md-last  d-flex">
                <div id="map" class="bg-white"></div>
            </div> -->
        </div>
    </div>
</section>

@endsection