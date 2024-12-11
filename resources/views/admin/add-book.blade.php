<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Add Book') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="max-w-xl">
                      
                        <h1 class="mt-3 text-2xl font-medium text-gray-900">
                            Start Here
                        </h1>
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('book.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return addBookF(this);">
                            @csrf

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Book added successfully!') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Something went wrong!') }}
                                </x-failed-msg>
                            @endif

                            <div><small>Fields with asterisks (*) are mandatory</small></div>
                            
                            <div>
                                <x-label for="title" value="{{ __('Title*') }}" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                                <x-input-error for="title" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="author" value="{{ __('Author*') }}" />
                                <x-input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author')" required />
                                <x-input-error for="author" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="isbn" value="{{ __('ISBN (Intl Serial Book Number)') }}" />
                                <x-input id="isbn" class="block mt-1 w-full" type="number" name="isbn" :value="old('isbn')" />
                                <x-input-error for="isbn" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="description" value="{{ __('Description') }}" />
                                <textarea id="description" class="block mt-1 w-full" type="text" name="description" >{{ old('description') }}</textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="cover_art" value="{{ __('Cover Art') }}" />
                                <x-input id="cover_art" class="block mt-1 w-full" type="file" name="cover_art" :value="old('cover_art')" />
                                <x-input-error for="cover_art" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="book_file" value="{{ __('File*') }}" />
                                <x-input id="book_file" class="block mt-1 w-full" type="file" name="book_file" :value="old('book_file')" required />
                                <x-input-error for="book_file" class="mt-2" />
                            </div>
                        
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="postIn">
                                    {{ __('Add Book') }}
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
