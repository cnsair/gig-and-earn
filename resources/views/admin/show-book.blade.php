<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Listed Books') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <!-- Begins here --> 

                    <div class="container mx-auto p-4">
                        <!-- Loop through the job list -->
                        @forelse ($books as $book)
                            <div class="border-b border-gray-200 py-4 hover:bg-gray-100 transition duration-300 ease-in-out">

                                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                                    <!-- Company Logo -->
                                    <div class="w-full md:w-1/6">
                                        @php
                                            $cover_art = $book->cover_art;
                                            $book_file = $book->book_file;
                                            $cover_path = $cover_art ? asset('storage/' . $cover_art) : asset('assets/img/logo/favicon.png');
                                        @endphp
                                        <img class="mx-auto book-art w-full object-cover" src="{{ $cover_path }}" alt="N/A">
                                    </div>

                                    <!-- Job Details -->
                                    <div class="w-full md:w-5/6">
                                        <!-- Job Title -->
                                        <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                                            <a target="_blank" href="" class="text-blue-500 hover:underline">
                                                {{ $book->title }}
                                            </a>
                                        </h3>

                                        <!-- Company Name and Location -->
                                        <p class="text-gray-600">
                                            {{ $book->author }}
                                        </p>

                                        <!-- Job Description -->
                                        <p class="text-sm text-gray-500 mt-2">
                                            {{ Str::limit($book->description, 200) }}
                                        </p>

                                        <!-- Job Details (Date Posted and Application Link) -->
                                        <div class="mt-3 flex flex-col md:flex-row md:justify-between items-start md:items-center space-y-3 md:space-y-0">
                                            <span class="text-xs text-gray-400 font-bold">
                                                {{ $book->created_at->diffForHumans() }}
                                            </span>
                                            <div class="flex space-x-2">
                                                <a download href="{{ asset('storage/' . $book_file) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-xs font-semibold rounded-md hover:bg-blue-600">
                                                    Download
                                                </a>
                                                @if (Auth::user()->isAdmin())
                                                    <a href="{{ route('book.edit', ['book' => $book->id]) }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white text-xs font-semibold rounded-md hover:bg-gray-700">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('book.destroy', ['book' => $book->id]) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-danger-button type="submit" onclick="return confirm('Are you sure you want to permanently delete this book and its records?');">
                                                            {{ __('Delete') }}
                                                        </x-danger-button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       
                        @empty
                            <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                Whoops.. No book to display now. Please check back later.
                            </p>
                        @endforelse

                        @if($books->hasPages())
                            <!-- Pagination Links -->
                            <div class="mt-6">
                                {{ $books->links() }}
                            </div>
                        @endif

                    </div>
                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>