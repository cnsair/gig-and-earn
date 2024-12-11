<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Feedbacks') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Begins here --> 

               <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div class="mt-6 overflow-x-auto">
                            <div class="px-6 py-3 text-left text-sm font-bold uppercase flex-auto">{{ $feedback->name }}</div>
                            <div class="px-6 py-3 text-left text-sm font-bold uppercase flex-auto">{{ $feedback->email }}</div>
                            <div class="px-6 py-3 text-left text-sm font-bold uppercase flex-auto">{{ $feedback->subject }}</div>
                        </div>
                        <hr/>
                        <div class="mt-4">
                            <div class="px-6 py-3 text-left flex-auto">{{ $feedback->message }}</div>
                        </div>
                    </div>
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
