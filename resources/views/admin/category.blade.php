<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Category') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <!-- Begins here --> 

                    <div class="container mx-auto p-4">
                        <!-- Back to Products Button -->
                        <div class="mb-6">
                            <a href="{{ route('category.create') }}">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg text-sm">
                                    Add Category
                                </button>
                            </a>
                        </div>
                        
                        @forelse ($categories as $category)
                            <div class="border-b border-gray-200 py-4 hover:bg-gray-100 transition duration-300 ease-in-out">
                                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">

                                    <!-- Quote Details -->
                                    <div class="w-full md:w-6/6">
                                        <a target="_blank" href="" class="text-blue-500 hover:underline">
                                            {{ $category->category }}
                                        </a>
                                        
                                        @if (Auth::user()->isAdmin())
                                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button type="submit" onclick="return confirm('Are you sure you want to permanently delete this category. This will make all associated jobs be without category and may hinder search and filter?');">
                                                    {{ __('Delete') }}
                                                </x-danger-button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                Whoops.. No Category to display now. Please add one using the button above.
                            </p>
                        @endforelse

                        @if($categories->hasPages())
                            <div class="mt-6">
                                {{ $categories->links() }}
                            </div>
                        @endif

                    </div>
                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>