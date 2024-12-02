<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="max-w-xl">
                      
                        <h1 class="mt-3 text-2xl font-medium text-gray-900">
                            Edit Book
                        </h1>
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('book.update', ['book' => $book->id]) }}" 
                            enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return editjobF(this);">
                            @csrf
                            @method('patch')

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Book info successfully updated.') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Whoops.. Something went wrong! Please try again.') }}
                                </x-failed-msg>
                            @endif

                            <div><small>Fields with asterisks (*) are mandatory</small></div>
                            
                            <div>
                                <x-label for="title" value="{{ __('Title*') }}" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $book->title)" required autofocus autocomplete="title" />
                                <x-input-error for="title" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="author" value="{{ __('Author*') }}" />
                                <x-input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author', $book->author)" required />
                                <x-input-error for="author" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="isbn" value="{{ __('ISBN (Intl Serial Book Number)') }}" />
                                <x-input id="isbn" class="block mt-1 w-full" type="number" name="isbn" :value="old('isbn', $book->isbn)" />
                                <x-input-error for="isbn" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="description" value="{{ __('Description') }}" />
                                <textarea id="description" class="block mt-1 w-full" type="text" name="description" >{{ old('description', $book->description) }}</textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="cover_art" value="{{ __('Cover Art') }}" />
                                <x-input id="cover_art" class="block mt-1 w-full" type="file" name="cover_art" :value="old('cover_art', $book->cover_art)" />
                                <x-input-error for="cover_art" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="book_file" value="{{ __('File*') }}" />
                                <x-input id="book_file" class="block mt-1 w-full" type="file" name="book_file" :value="old('book_file', $book->book_file)" />
                                <x-input-error for="book_file" class="mt-2" />
                            </div>
                                                  
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4">
                                    {{ __('Update Book') }}
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
