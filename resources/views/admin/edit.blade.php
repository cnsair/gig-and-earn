@php
    $active = route('upload.create');
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
                            Edit Video Advert 
                        </h1>
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('upload.update', ['upload' => $upload->id]) }}" 
                            enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return uploadF(this);">
                            @csrf
                            @method('patch')

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('File Successfully Uploaded.') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Something went wrong! Please try again.') }}
                                </x-failed-msg>
                            @endif

                            <div>
                                <x-label for="type" value="{{ __('Video For') }}" />
                                <select class="block mt-1 w-full" required name="type">
                                    <option value="1" {{ (old('type', $upload->type) == 1) ? 'selected' : '' }}>
                                        Professionals
                                    </option>
                                    <option value="2" {{ (old('type', $upload->type) == 2) ? 'selected' : '' }}>
                                        Courses
                                    </option>
                                </select>
                                <x-input-error for="type" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="title" value="{{ __('Title') }}" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $upload->title)" required autofocus autocomplete="title" />
                                <x-input-error for="title" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="description" value="{{ __('Description (Optional)') }}" />
                                <textarea id="description" class="block mt-1 w-full" type="text" name="description" autocomplete="description">{{ old('description', $upload->description) }}</textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="file" value="{{ __('File') }}" />
                                <x-input id="file" class="block mt-1 w-full" type="file" name="file"/>
                                <x-input-error for="file" class="mt-2" />
                            </div>
                        
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="uploadIn">
                                    {{ __('Upload') }}
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
