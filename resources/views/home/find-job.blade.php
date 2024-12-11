@extends('layouts.app-home')

@section('content')

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
                                        <span>{{ Str::limit( $find_job->location, 30) }}</span>
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

            @if($find_jobs->hasPages())
                <!-- Pagination Area -->
                <div class="pagination-area pb-115 text-center mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-wrap d-flex justify-content-center">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-start">
                                            {{ $find_jobs->links('pagination::bootstrap-5') }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
		</div>
	</section>
    
@endsection