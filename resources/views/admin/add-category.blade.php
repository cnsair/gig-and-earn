<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Add Category') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="max-w-xl">
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('category.store') }}"class="mt-6 space-y-6">
                            @csrf

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Category created successfully!') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Whoops.. Something went wrong!') }}
                                </x-failed-msg>
                            @endif

                            <div>
                                <x-label for="category" value="{{ __('Category') }}" />
                                <x-input id="category" class="block mt-1 w-full" type="text" placeholder="e.g. Digital Marketing" name="category" :value="old('category')" />
                                <x-input-error for="category" class="mt-2" />
                            </div>
                        
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="postIn">
                                    {{ __('Add Category') }}
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
