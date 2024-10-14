@php
    $active = route('job.create');
@endphp

<x-app-layout>
    <x-slot name="header">
        <x-admin-nav :active="$active"></x-admin-nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="max-w-xl">
                      
                        <h1 class="mt-3 text-2xl font-medium text-gray-900">
                            Post Job
                        </h1>
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('job.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return postjobF(this);">
                            @csrf

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Job Post Uploaded.') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Something went wrong!') }}
                                </x-failed-msg>
                            @endif

                            <div>
                                <x-label for="category" value="{{ __('Job Category') }}" />
                                <select class="block mt-1 w-full" required name="category">
                                    <option selected value="digital-marketing">Digital Marketing</option>
                                    <option value="sales">Sales</option>
                                    <option value="content-marketing">Content Marketing</option>
                                    <option value="graphic-design">Graphics Design</option>
                                    <option value="software-engineering">Software Engineering</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="mobile-development">Mobile Development</option>
                                    <option value="web-development">Web Development</option>
                                    <option value="information-technology">Information Technology</option>
                                    <option value="database-management">Database Management</option>
                                    <option value="cyber-security">Cyber Security</option>
                                    <option value="dev-ops">Dev Ops</option>
                                </select>
                                <x-input-error for="category" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="title" value="{{ __('Job Title') }}" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" placeholder="e.g. Senior Marketing Manager" />
                                <x-input-error for="title" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="company" value="{{ __('Company Name') }}" />
                                <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required placeholder="e.g. GigAndEarn Inc" />
                                <x-input-error for="company" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="web_address" value="{{ __('Web Address') }}" />
                                <x-input id="web_address" class="block mt-1 w-full" type="text" name="web_address" :value="old('web_address')" required placeholder="e.g. gigandearn.com/en/careers" />
                                <x-input-error for="web_address" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="location" value="{{ __('Location') }}" />
                                <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required placeholder="e.g. Remote" />
                                <x-input-error for="location" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="price_range" value="{{ __('Price Range (e.g. $1000 - $2000)') }}" />
                                <x-input id="price_range" class="block mt-1 w-full" type="text" name="price_range" :value="old('price_range')" required />
                                <x-input-error for="price_range" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="description" value="{{ __('Job Description') }}" />
                                <textarea id="description" class="block mt-1 w-full" type="text" name="description" >{{ old('description') }}</textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="file" value="{{ __('Company Logo') }}" />
                                <x-input id="file" class="block mt-1 w-full" type="file" name="file" :value="old('file')" required />
                                <x-input-error for="file" class="mt-2" />
                            </div>
                        
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="postIn">
                                    {{ __('Post Job') }}
                                </x-button>
                            </div>
                        </form>
                    
                    </div>
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
