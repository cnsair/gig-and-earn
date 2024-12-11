<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Listed Jobs') }}
        </x-sub-header>
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

                                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                                    <!-- Company Logo -->
                                    <div class="w-full md:w-1/6">
                                        @php
                                            $file = $job->file;
                                            $photo_path = $file ? asset('storage/' . $file) : asset('assets/img/logo/favicon.png');
                                        @endphp
                                        <img class="mx-auto company-logo" src="{{ $photo_path }}" alt="{{ $job->company ?? 'Company' }} Logo">
                                    </div>

                                    <!-- Job Details -->
                                    <div class="w-full md:w-5/6">
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
                                            {{ Str::limit($job->description, 100) }}
                                        </p>

                                        <!-- Job Details (Date Posted and Application Link) -->
                                        <div class="mt-3 flex flex-col md:flex-row md:justify-between items-start md:items-center space-y-3 md:space-y-0">
                                            <span class="text-xs text-gray-400 font-bold">
                                                {{ $job->category }} | Posted on {{ $job->created_at->format('M d, Y') }}
                                            </span>
                                            <div class="flex space-x-2">
                                                <a target="_blank" href="https://{{ $job->web_address }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-xs font-semibold rounded-md hover:bg-blue-600">
                                                    Details
                                                </a>
                                                
                                                <!-- Allow authorized users to edit a job -->
                                                @can('update', $job)
                                                    <a href="{{ route('job.edit', ['job' => $job->id]) }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white text-xs font-semibold rounded-md hover:bg-gray-700">
                                                        Edit
                                                    </a>
                                                @endcan

                                                <!-- Allow authorized to delete a job -->
                                                @can('delete', $job)
                                                    <form action="{{ route('job.destroy', ['job' => $job->id]) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-danger-button type="submit" onclick="return confirm('Are you sure you want to permanently delete this job record?');">
                                                            {{ __('Delete') }}
                                                        </x-danger-button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       
                        @empty
                            <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                Nothing to display! Please reload page.
                            </p>
                        @endforelse

                        @if($post_jobs->hasPages())
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