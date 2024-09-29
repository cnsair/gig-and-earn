<style>
    /* a.pass:hover{
        color: #f8e694;
    } */
</style>

@php
    $active = route('dashboard');
@endphp
<x-app-layout>
    <x-slot name="header">
        <x-admin-nav :active="$active"></x-admin-nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
               <!-- Begins here --> 
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

                    <h1 class="mt-3 text-2xl font-medium text-gray-900">
                        Welcome to Gig and Earn!
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        Welcome to GigAndEarn.com, the ultimate destination for professionals seeking to transform their financial future. Are you tired of the traditional job hunt, endless interviews, and limited opportunities? Frustrated with the lack of financial growth despite your hard work and dedication? Imagine discovering a hidden side hustle so lucrative and under-the-radar that few even know it exists. Picture yourself earning significantly more each month, working on your own terms, and enjoying the freedom to live life to the fullest. <br/><br/>

                        At GigAndEarn.com, we reveal the best-kept secrets to unlocking incredible income opportunities across various professions. Whether you're an accountant, artisan, consultant, digital marketer, graphic designer, online teacher, project manager, software developer, virtual assistant, or writer, we have the strategies and insider knowledge to help you achieve financial success beyond your wildest dreams. Join our community of like-minded professionals who have already changed their financial stories and are thriving in today's challenging economic climate. With our guidance, you can increase your earnings, achieve financial stability, and build a resilient future.<br/><br/>
                    </p>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('member.full-access') }}">Start Earning</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Video Plays Here
                        </p>

                        <p class="mt-4 text-sm">
                            <a href="{{ route('member.full-access') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                Pay a one-time fee of 20 USD to gain full access

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('member.full-access') }}">Course</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Video Plays Here
                        </p>

                        <p class="mt-4 text-sm">
                            <a href="{{ route('member.full-access') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                Start preparing

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>
                    
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
</x-app-layout>
