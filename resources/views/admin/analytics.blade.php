@php
    $active = route('admin.analytics');
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

                    <h1 class="mt-3 text-2xl font-medium text-gray-900">
                        View Analytics Here!
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        List of testimonies
                    </p>
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
