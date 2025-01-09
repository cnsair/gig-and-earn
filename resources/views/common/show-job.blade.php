<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Job Details') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <!-- Begins here --> 

                    <div class="container mx-auto p-4">
                        <!-- Loop through the job list -->
                        @if ($job)
                            <div class="container mx-auto p-6">
                                <!-- Job Header -->
                                <div class="border-b border-gray-300 pb-4 mb-6">
                                    <h1 class="text-3xl font-bold text-gray-800">{{ $job->title }}</h1>
                                    <p class="text-lg text-gray-600 mt-2">
                                        {{ $job->company }} &mdash; {{ $job->location }}
                                    </p>
                                    <p class="text-sm text-gray-400 mt-1">
                                        Posted {{ $job->created_at->diffForHumans() }}
                                    </p>
                                </div>

                                <!-- Job Overview -->
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <!-- Company Logo -->
                                    <div class="flex justify-center md:justify-start">
                                        @php
                                            $file = $job->file;
                                            $photo_path = $file ? asset('storage/' . $file) : asset('assets/images/logo/favicon.png');
                                        @endphp
                                        <img class="w-25 h-25 md:w-48 md:h-48 object-contain" src="{{ $photo_path }}" alt="{{ $job->company ?? 'Company' }} Logo">
                                    </div>

                                    <!-- Job Details -->
                                    <div class="col-span-2">
                                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Job Details</h2>
                                        <p class="text-gray-600 mb-2">
                                            <span class="font-bold">Category:</span> {{ $job->category->category }}
                                        </p>
                                        <p class="text-gray-600 mb-2">
                                            <span class="font-bold">Type:</span> {{ $job->type }}
                                        </p>
                                        <p class="text-gray-600 mb-2">
                                            <span class="font-bold">Salary:</span> {{ $job->price_range }}
                                        </p>
                                        @if ($job->web_address)
                                            <p class="text-gray-600">
                                                <span class="font-bold">Website:</span> 
                                                <a href="https://{{ $job->web_address }}" target="_blank" class="text-blue-500 hover:underline">
                                                    {{ $job->web_address }}
                                                </a>
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Job Description -->
                                <div class="mt-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Job Description</h2>
                                   
                                    <ul class="list-disc list-inside text-gray-600">
                                        @foreach (explode("\n", $job->description) as $description)
                                            <li>{{ $description }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- Job Benefits -->
                                <div class="mt-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Benefits</h2>
                                    <ul class="list-disc list-inside text-gray-600">
                                        @foreach (explode("\n", $job->benefit) as $benefit)
                                            <li>{{ $benefit }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- Job Requirements -->
                                <div class="mt-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Requirements</h2>
                                    <ul class="list-disc list-inside text-gray-600">
                                        @foreach (explode("\n", $job->requirement) as $requirement)
                                            <li>{{ $requirement }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- Apply Now Button -->
                                <div class="mt-8">
                                    <a href="https://{{ $job->web_address ?? '#' }}" target="_blank" class="inline-block bg-blue-500 text-white text-lg font-semibold py-3 px-6 rounded-md shadow hover:bg-blue-600 transition duration-300">
                                        Apply Now
                                    </a>
                                </div>
                            </div>

                        @else
                            <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                Nothing to display! Please reload page.
                            </p>
                        @endif

                    </div>
                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>