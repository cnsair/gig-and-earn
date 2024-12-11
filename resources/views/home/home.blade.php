@extends('layouts.app-home')

@section('content')
    
    <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('assets/images/bg_2.jpg') }})"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
				data-scrollax-parent="true">
				<div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
					<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have links to
						<span class="number" data-number="6027">0</span> great job offers you deserve!
                    </p>
					<h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        Your Dream <br><span>Job is Waiting</span>
                    </h1>

					<div class="ftco-search">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
									aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
										href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                                        Find your Gig
                                    </a>

									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
										role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate
                                    </a>
								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								<div class="tab-content p-4" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
										aria-labelledby="v-pills-nextgen-tab">
                                        <!-- form -->
										<form action="#" class="search-job">
											<div class="row">
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-briefcase"></span></div>
															<input type="text" class="form-control"
																placeholder="eg. Web Developer">
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon">
                                                                    <span class="ion-ios-arrow-down"></span>
                                                                </div>
																<select name="" id="" class="form-control">
																	<option value="none">Category</option>
																	<option value="full-time">Full Time</option>
																	<option value="part-time">Part Time</option>
																	<option value="freelance">Freelance</option>
																	<option value="internship">Internship</option>
																	<option value="temporary">Temporary</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-map-marker"></span>
															</div>
															<input type="text" class="form-control"
																placeholder="Location">
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
                                                            <a href="{{ route('login') }}" class="form-control btn btn-primary d-flex justify-content-center align-items-center text-decoration-none text-primary hover:text-success">
                                                                search
                                                            </a>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>

									<div class="tab-pane fade" id="v-pills-2" role="tabpanel"
										aria-labelledby="v-pills-performance-tab">
                                        <!-- form -->
										<form action="#" class="search-job">
											<div class="row">
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-user"></span></div>
															<input type="text" class="form-control"
																placeholder="eg. Adam Scott">
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span
																		class="ion-ios-arrow-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="none">Category</option>
																	<option value="full-time">Full Time</option>
																	<option value="part-time">Part Time</option>
																	<option value="freelance">Freelance</option>
																	<option value="internship">Internship</option>
																	<option value="temporary">Temporary</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-map-marker"></span>
															</div>
															<input type="text" class="form-control"
																placeholder="Location">
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
                                                            <a href="{{ route('login') }}" class="form-control btn btn-primary d-flex justify-content-center align-items-center text-decoration-none text-primary hover:text-success">
                                                                search
                                                            </a>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section services-section bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-resume"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Search Thousands of Jobs</h3>
							<p>We are sure you would find what you're looking for.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-collaboration"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Easy To Manage Jobs</h3>
							<p>GigAndEarn manages jobs contracted on this platform between clients and freelancers.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-promotions"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Grow Your Career</h3>
							<p>Our duty is to help you find that dream job that elevates you to the peek of the industry.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-employee"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Search Expert Candidates</h3>
							<p>We are mandated to provide you with the best person for the job.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Current Job Posts count -->
    <x-current-job-count />

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Recently Added Jobs</span>
					<h2 class="mb-4"><span>Recent</span> Jobs</h2>
				</div>
			</div>

			<div class="row">
                @forelse ( $find_jobs as $find_job )
                    @php
                        $file = $find_job->file;
                        $photo_path  = $file ? asset('storage/' . $file) : asset('assets/images/logo/favicon.png');
                    @endphp

                    <div class="col-md-12 ftco-animate">
                        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                            <div class="mb-4 mb-md-0 mr-5">
                                <div class="job-post-item-header d-flex align-items-center">
                                    <h2 class="mr-3 text-black h3">
                                        {{ Str::limit($find_job->title, 40) }}
                                    </h2>
                                    <div class="badge-wrap">
                                        <span class="bg-success text-white badge py-2 px-3">Remote | Fulltime | Partime</span>
                                    </div>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span> 
                                        <a href="#category">{{ Str::limit($find_job->company, 30) }}</a>
                                    </div>
                                    <div>
                                        <span class="icon-my_location"></span> 
                                        <span>{{ Str::limit($find_job->location, 30) }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="ml-auto d-flex">
                                <a href="{{ route('login') }}" class="btn btn-primary py-2 mr-1">Apply Job</a>
                                <!-- <a href="#"
                                    class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                                    <span class="icon-heart"></span>
                                </a> -->
                            </div>
                        </div>
                    </div><!-- end -->

                @empty
                    <div class="container">
                        There's nothing to display yet. Please check back later.
                    </div>
                @endforelse

			</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<a class="btn btn-primary rounded btn-lg" href="{{ route('find-job') }}">See more</a>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- App Product Count -->
	<x-app-product-count />

    <!-- Testimonials -->
	<x-testimonial />

@endsection