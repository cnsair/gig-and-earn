<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Edit Job') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="max-w-xl">
                        
                        <x-validation-errors class="mb-4" />

                        @if ($job)

                            <form method="POST" action="{{ route('job.update', ['job' => $job]) }}" 
                                enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return editjobF(this);">
                                @csrf
                                @method('patch')

                                @if (session('status') === 'success')
                                    <x-success-msg>
                                        {{ __('Job Successfully Updated.') }}
                                    </x-success-msg>
                                @elseif (session('status') === 'failed')
                                    <x-failed-msg>
                                        {{ __('Something went wrong! Please try again.') }}
                                    </x-failed-msg>
                                @endif

                                <div>
                                    <x-label for="category_id" value="{{ __('Category') }}" />
                                    <select class="block mt-1 w-full" required name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                {{ $job->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->category }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error for="category_id" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="title" value="{{ __('Title') }}" />
                                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $job->title)" required autofocus autocomplete="title" placeholder="e.g. Senior Marketing Manager" />
                                    <x-input-error for="title" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="company" value="{{ __('Company') }}" />
                                    <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company', $job->company)" required placeholder="e.g. GigAndEarn Inc" />
                                    <x-input-error for="company" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="web_address" value="{{ __('Web Address') }}" />
                                    <x-input id="web_address" class="block mt-1 w-full" type="text" name="web_address" :value="old('web_address', $job->web_address)" placeholder="e.g. gigandearn.com/en/careers" />
                                    <x-input-error for="web_address" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="location" value="{{ __('Location') }}" />
                                    <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location', $job->location)" required placeholder="e.g. Remote" />
                                    <x-input-error for="location" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="price_range" value="{{ __('Price Range (e.g. $1000 - $2000') }}" />
                                    <x-input id="price_range" class="block mt-1 w-full" type="text" name="price_range" :value="old('price_range', $job->price_range)" required />
                                    <x-input-error for="price_range" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="requirement" value="{{ __('Requirement') }}" />
                                    <textarea id="requirement" class="block mt-1 w-full" type="text" name="requirement" autocomplete="requirement">{{ old('requirement', $job->requirement) }}</textarea>
                                    <x-input-error for="requirement" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="benefit" value="{{ __('Benefit') }}" />
                                    <textarea id="benefit" class="block mt-1 w-full" type="text" name="benefit" autocomplete="benefit">{{ old('benefit', $job->benefit) }}</textarea>
                                    <x-input-error for="benefit" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="description" value="{{ __('Description') }}" />
                                    <textarea id="description" class="block mt-1 w-full" type="text" name="description" autocomplete="description">{{ old('description', $job->description) }}</textarea>
                                    <x-input-error for="description" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="file" value="{{ __('Company Logo') }}" />
                                    <x-input id="file" class="block mt-1 w-full" type="file" name="file"/>
                                    <x-input-error for="file" class="mt-2" />
                                </div>
                            
                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ms-4" name="editjobIn">
                                        {{ __('Update Job') }}
                                    </x-button>
                                </div>
                            </form>
                        @else
                            <p>Job not found.</p>
                        @endif
                    </div>
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
