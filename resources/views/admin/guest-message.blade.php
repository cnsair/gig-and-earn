<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Messages from Guests') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

                @include('admin.feedback-table-msg')

            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
