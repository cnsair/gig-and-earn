<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GigAndEarn') }}</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>

            //FORMS
            // Disable buttons when clicked
            //Upload Video
            function uploadF(form) {
                form.uploadIn.disabled = true;
                form.uploadIn.value = "Uploading...";
                return true;
            }

            //Edit video
            function EditUploadF(form) {
                form.editUpload.disabled = true;
                form.editUpload.value = "Please wait...";
                return true;
            }
            
            //Post Job
            function postjobF(form) {
                form.postIn.disabled = true;
                form.postIn.value = "Posting...";
                return true;
            }

            //edit Job
            function editjobF(form) {
                form.editJob.disabled = true;
                form.editJob.value = "Please wait...";
                return true;
            }

        </script>
    </body>
</html>
