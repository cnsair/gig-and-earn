@extends('layouts.app-home')

@section('content')
    
    <!-- slider Area Start-->
    <div class="slider-area">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('assets/img/hero/h1_hero.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting startup jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" name="job" placeholder="Job Tittle or keyword">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option selected  value="#">Location</option>
                                                <option value="remote">Remote</option>
                                                <option value="portugal">Portugal</option>
                                                <option value="germnay">Germany</option>
                                                <option value="australia">Australia</option>
                                                <option value="united-state">United State</option>
                                                <option value="united-kingdom">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <a href="{{ route('login') }}">Find job</a>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
         
         
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{ asset('assets/img/gallery/how-applybg.png') }}">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Register</h5>
                               <p>Let us know a bit about you. Things like your skills and qualifications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Pay a token</h5>
                               <p>Make a one-time 20 USD payment. This payment covers for everything including a skill-up course if we think you need one.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Get your Job</h5>
                               <p>And that's all! Get your dream job completely online.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->

        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Available categories</span>
                            <h2>Browse Top Categories </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{ route('find-job') }}">Art & Creative</a></h5>
                                <span>(204)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{ route('find-job') }}">Web Design & Development</a></h5>
                                <span>(197)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{ route('find-job') }}">Sales & Marketing</a></h5>
                                <span>(256)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{ route('find-job') }}">Mobile Application</a></h5>
                                <span>(105)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{ route('find-job') }}">Information Technology</a></h5>
                                <span>(41)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{ route('find-job') }}">Content Writer</a></h5>
                                <span>(205)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="{{ route('find-job') }}" class="border-btn2">Browse All Sectors</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->

        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="{{ asset('assets/img/gallery/cv_bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            <a href="{{ route('home') }}" class="border-btn2 border-btn4">Upload your cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->

        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('assets/img/icon/job-list1.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('login') }}"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Mallorca, Spain</li>
                                        <li>$1500 - $3000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('login') }}">Full Time</a>
                                <span>30 mins ago</span>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('assets/img/icon/job-list2.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('login') }}"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Colorado, USA</li>
                                        <li>$1500 - $2000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('login') }}">Full Time</a>
                                <span>35 mins ago</span>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('assets/img/icon/job-list3.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('login') }}"><h4>Graphic Designer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Lisbon, Portugal</li>
                                        <li>$2000 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('login') }}">Full Time</a>
                                <span>37 mins ago</span>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('assets/img/icon/job-list4.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('login') }}"><h4>PHP Developer</h4></a>
                                    <ul>
                                        <li>Outsourcing IT Company</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Texas, USA</li>
                                        <li>$3000 - $5000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('login') }}">Full Time</a>
                                <span>40 mins ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img class="rounded-corner" src="assets/img/testmonial/michael.webp" alt="">
                                            <span>Michael T.</span>
                                            <p>Web Development</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“This platform was a game-changer for me. After applying for several web development positions, I got multiple interviews and was hired by a growing tech company. I’m grateful for the career boost!”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img class="rounded-corner" src="assets/img/testmonial/amanda.webp" alt="">
                                            <span>Amanda J. Lawson</span>
                                            <p>Creative Arts</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I was looking for a platform that could connect me with companies seeking creative minds, and I found exactly that! Within two weeks of applying through [Platform Name], I landed my dream job as a Creative Arts Director. I couldn’t be happier!”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img class="rounded-corner" src="assets/img/testmonial/james.webp" alt="">
                                            <span>James B.</span>
                                            <p>Digital Marketing</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“Thanks to gigandearn.com, I secured a role in digital marketing with a top firm! The process was smooth, and I found openings tailored to my skills. It’s been an incredible journey, and I highly recommend it to other job seekers!”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img class="rounded-corner" src="assets/img/testmonial/samantha.png" alt="">
                                            <span>Samantha L. John</span>
                                            <p>Graphic Design</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I had been searching for the right opportunity as a graphic designer for months. [Platform Name] not only made it easy to apply but connected me with a great company. Now, I’m working in a creative, inspiring environment.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

         <!-- Support Company Start-->
         <div class="support-company-area support-padding fix mb-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>Are you an Hirer?</span>
                                <h2>Post your opening here</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">
                                    Unlock Top Talent by Posting Your Openings Here! <br/>
                                    Reach thousands of potential employees when you post your company openings. Our process is fast and easy to give you a seamless posting experience.
                                </p>

                                <p>Are you looking for highly skilled professionals to join your team? Our platform connects you with a diverse pool of talents across digital industries. With our streamlined process, your job listings will reach qualified candidates who are ready to contribute to your company's success.<br/><br/>

                                Post your openings today and discover the right talent for your business!.</p>
                                <a href="{{ route('register') }}" class="btn post-btn">Post a job</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="{{ asset('assets/img/service/support-img.jpg') }}" alt="">
                            <div class="support-img-cap text-center">
                                <p>Only</p>
                                <span>Top Talents!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
      
@endsection