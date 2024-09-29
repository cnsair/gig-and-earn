<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts

        <script>

            //FORMS
            // Disable buttons when clicked
            //SignIn
            function signInF(form) {
                form.signIn.disabled = true;
                form.signIn.value = "Signing in...";
                return true;
            }

            //Register
            function registerF(form) {
                form.registerIn.disabled = true;
                form.registerIn.value = "Please wait...";
                return true;
            }

        </script>
    </body>
</html>
