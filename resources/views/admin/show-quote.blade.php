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
                        
                        @forelse ($quotes as $quote)
                            <div class="border-b border-gray-200 py-4 hover:bg-gray-100 transition duration-300 ease-in-out">

                                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">

                                    <!-- Quote Details -->
                                    <div class="w-full md:w-6/6">
                                        <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                                            <a target="_blank" href="" class="text-blue-500 hover:underline">
                                                {{ $quote->author ?? "Anonymous" }}
                                            </a>
                                        </h3>

                                        <p class="text-sm text-gray-500 mt-2">
                                            {{ Str::limit($quote->description, 501) }}
                                        </p>

                                        <div class="mt-3 flex flex-col md:flex-row md:justify-between items-start md:items-center space-y-3 md:space-y-0">
                                            <span class="text-xs text-gray-400 font-bold">
                                                {{ $quote->created_at->diffForHumans() }}
                                            </span>
                                            <div class="flex space-x-2">
                                                @if (Auth::user()->isAdmin())
                                                    <form action="{{ route('quote.destroy', ['quote' => $quote->id]) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-danger-button type="submit" onclick="return confirm('Are you sure you want to permanently delete this quote?');">
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

                        @if($quotes->hasPages())
                            <!-- Pagination Links -->
                            <div class="mt-6">
                                {{ $quotes->links() }}
                            </div>
                        @endif

                    </div>
                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>