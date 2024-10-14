@php
    $active = route('job.show');
@endphp

<x-app-layout>
    <x-slot name="header">
        <x-admin-nav :active="$active"></x-admin-nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <!-- Begins here --> 

                    <div class="container mx-auto p-4">
                        <!-- Loop through the job list -->
                        @forelse ($post_jobs as $job)
                            <div class="border-b border-gray-200 py-4 hover:bg-gray-100 transition duration-300 ease-in-out">

                                <div class="flex space-x-4">
                                    <div class="w-1/4">
                                        @php
                                            $file = $job->file;
                                            $photo_path  = asset('storage/' . $file);
                                        @endphp

                                        @if ($file)
                                            <img class="me-3 company-logo" src="{{ asset($photo_path) }}" alt="partner-img" alt="Logo">
                                        @else
                                            <img class="me-3 company-logo" src="{{ asset('assets/img/logo/favicon.png') }}" alt="Logo">
                                        @endif
                                    </div>
                                
                                    <div class="w-3/4">
                                        <!-- Job Title -->
                                        <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                                            <a target="_blank" href="https://{{ $job->web_address }}" class="text-blue-500 hover:underline">
                                                {{ $job->title }}
                                            </a>
                                        </h3>

                                        <!-- Company Name and Location -->
                                        <p class="text-gray-600">
                                            {{ $job->company }} &mdash; {{ $job->location }}
                                        </p>

                                        <!-- Job Description -->
                                        <p class="text-sm text-gray-500 mt-2">
                                            {{ Str::limit($job->description, 100) }} <!-- Truncate description to 100 characters -->
                                        </p>

                                        <!-- Job Details (Date Posted and Application Link) -->
                                        <div class="mt-3 flex justify-between items-center">
                                            <span class="text-xs text-gray-400 font-bold">
                                                {{ $job->category }}
                                            |
                                                Posted on {{ $job->created_at->format('M d, Y') }}
                                            </span>
                                            <a target="_blank" href="https://{{ $job->web_address }}" class="text-blue-500 hover:underline">
                                                View Details
                                            </a>

                                            @if ( Auth::user()->isAdmin() )
                                                <a class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" href="{{ route('job.edit', ['job' => $job->id]) }}">Edit</a>

                                                <form action="{{ route('job.destroy', ['job' => $job->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <x-danger-button type="submit"  onclick="return confirm('Are you sure you want to permanently delete this job record?');" class="ms-3">
                                                        {{ __('Delete') }}
                                                    </x-danger-button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                       
                        @empty
                            <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                Nothing to display! Please reload page.
                            </p>
                        @endforelse

                        @if($post_jobs)
                            <!-- Pagination Links -->
                            <div class="mt-6">
                                {{ $post_jobs->links() }}
                            </div>
                        @endif

                    </div>
                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>