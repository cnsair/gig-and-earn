<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Create Quote') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="max-w-xl">
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('quote.store') }}"class="mt-6 space-y-6">
                            @csrf

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Quote created successfully!') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Whoops.. Something went wrong!') }}
                                </x-failed-msg>
                            @endif

                            <div><small>Fields with asterisks (*) are mandatory</small></div>

                            <div>
                                <x-label for="author" value="{{ __('Author') }}" />
                                <x-input id="author" class="block mt-1 w-full" type="text" placeholder="Leave blank if no author" name="author" :value="old('author')" />
                                <x-input-error for="author" class="mt-2" />
                            </div>

                            <div>
                                <x-label for="description" value="{{ __('Description*') }}" />
                                <textarea id="description" class="block mt-1 w-full" type="text" name="description" required >{{ old('description') }}</textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>
                        
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="postIn">
                                    {{ __('Create Quote') }}
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
