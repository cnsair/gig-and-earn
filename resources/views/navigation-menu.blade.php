<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-white border-b shadow">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                    @if ( Auth::user()->isAdmin() )
                        <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('guest-message.show') }}" :active="request()->routeIs('guest-message.show') || request()->routeIs('guest-message.edit')" >
                            {{ __('Feedbacks') }}
                        </x-nav-link>
                        
                        <div class="relative group">
                            <x-nav-link href="#" :active="request()->routeIs('upload.create') || request()->routeIs('upload.show') || request()->routeIs('upload.edit')" >
                                {{ __('Videos') }} &#x25BE;
                            </x-nav-link>
        
                            <!-- Dropdown Menu -->
                            <div 
                                class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block">
                                <a href="{{ route('upload.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Upload Video') }}
                                </a>
                                <a href="{{ route('upload.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Show Videos') }}
                                </a>
                            </div>
                        </div>
                        
                        <div class="relative group">
                            <x-nav-link href="#" :active="request()->routeIs('job.create') || request()->routeIs('job.show') || request()->routeIs('job.edit')" >
                                {{ __('Jobs') }} &#x25BE;
                            </x-nav-link>
        
                            <!-- Dropdown Menu -->
                            <div 
                                class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block">
                                <a href="{{ route('job.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Post Job') }}
                                </a>
                                <a href="{{ route('job.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Show Jobs') }}
                                </a>
                                <a href="{{ route('category.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Categories') }}
                                </a>
                            </div>
                        </div>
                        
                        <div class="relative group">
                            <x-nav-link href="#" :active="request()->routeIs('book.create') || request()->routeIs('book.show') || request()->routeIs('book.edit') ">
                                {{ __('Books') }} &#x25BE;
                            </x-nav-link>

                            <!-- Dropdown Menu -->
                            <div 
                                class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block">
                                <a href="{{ route('book.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Add Book') }}
                                </a>
                                <a href="{{ route('book.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Show Books') }}
                                </a>
                            </div>
                        </div>
                        
                        <div class="relative group">
                            <x-nav-link href="#" :active="request()->routeIs('quote.create') || request()->routeIs('quote.show')" >
                                {{ __('Quotes') }} &#x25BE;
                            </x-nav-link>
        
                            <!-- Dropdown Menu -->
                            <div 
                                class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block">
                                <a href="{{ route('quote.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Create Quote') }}
                                </a>
                                <a href="{{ route('quote.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Show Quotes') }}
                                </a>
                            </div>
                        </div>

                    @elseif  ( Auth::user()->isMember() )
                        <x-nav-link href="{{ route('member.dashboard') }}" :active="request()->routeIs('member.dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        
                        <div class="relative group">
                            <x-nav-link href="#" :active="request()->routeIs('job.create') || request()->routeIs('job.show') || request()->routeIs('job.edit')" >
                                {{ __('Jobs') }} &#x25BE;
                            </x-nav-link>
        
                            <!-- Dropdown Menu -->
                            <div 
                                class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block">
                                <a href="{{ route('job.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Post Job') }}
                                </a>
                                <a href="{{ route('job.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    {{ __('Show Jobs') }}
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                @php
                                    $file = Auth::user()->profile_photo_path;
                                    $photo_path  = asset('storage/' . $file);
                                @endphp

                                @if ($file)
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ $photo_path }}" alt="{{ Auth::user()->firstname ." ". Auth::user()->lastname }}" />
                                    </button>
                                @else
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('assets/img/logo/avatar.png') }}">
                                    </button>
                                @endif
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->firstname ." ". Auth::user()->lastname }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Only Admin can use 2FA -->
                            @if ( Auth::user()->isAdmin() )
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu for Mobile and smaller screen sizes -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @if ( Auth::user()->isAdmin() )
                <x-responsive-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('guest-message.show') }}" :active="request()->routeIs('guest-message.show') || request()->routeIs('guest-message.edit')" >
                    {{ __('Feedbacks') }}
                </x-responsive-nav-link>
                        
                <div class="relative group">
                    <x-responsive-nav-link href="#" :active="request()->routeIs('upload.create') || request()->routeIs('upload.show') || request()->routeIs('upload.edit')" >
                        {{ __('Videos') }} &#x25BE;
                    </x-responsive-nav-link>

                    <!-- Dropdown Menu -->
                    <div 
                        class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block sm:hidden z-20">
                        <a href="{{ route('upload.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Upload Video') }}
                        </a>
                        <a href="{{ route('upload.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Show Videos') }}
                        </a>
                    </div>
                </div>
                        
                <div class="relative group">
                    <x-responsive-nav-link href="#" :active="request()->routeIs('job.create') || request()->routeIs('job.show') || request()->routeIs('job.edit')" >
                        {{ __('Jobs') }} &#x25BE;
                    </x-responsive-nav-link>

                    <!-- Dropdown Menu -->
                    <div 
                        class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block sm:hidden z-20">
                        <a href="{{ route('job.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Post Job') }}
                        </a>
                        <a href="{{ route('job.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Show Jobs') }}
                        </a>
                    </div>
                </div>
                        
                <div class="relative group">
                    <x-responsive-nav-link href="#" :active="request()->routeIs('book.create') || request()->routeIs('book.show') || request()->routeIs('book.edit') ">
                        {{ __('Books') }} &#x25BE;
                    </x-responsive-nav-link>

                    <!-- Dropdown Menu -->
                    <div 
                        class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block sm:hidden z-20">
                        <a href="{{ route('book.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Add Book') }}
                        </a>
                        <a href="{{ route('book.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Show Books') }}
                        </a>
                    </div>
                </div>

            @elseif ( Auth::user()->isMember() )
                <x-responsive-nav-link href="{{ route('member.dashboard') }}" :active="request()->routeIs('member.dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                        
                <div class="relative group">
                    <x-responsive-nav-link href="#" :active="request()->routeIs('job.create') || request()->routeIs('job.show') || request()->routeIs('job.edit')" >
                        {{ __('Jobs') }} &#x25BE;
                    </x-responsive-nav-link>

                    <!-- Dropdown Menu -->
                    <div 
                        class="absolute left-0 mt-2 hidden w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block group-focus-within:block sm:hidden z-20">
                        <a href="{{ route('job.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Post Job') }}
                        </a>
                        <a href="{{ route('job.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Show Jobs') }}
                        </a>
                    </div>
                </div>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    @php
                        $file = Auth::user()->profile_photo_path;
                        $photo_path  = asset('storage/' . $file);
                    @endphp
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ $photo_path }}" alt="{{ Auth::user()->firstname ." ". Auth::user()->lastname }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->firstname ." ". Auth::user()->lastname }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Only Admin can use 2FA -->
                @if ( Auth::user()->isAdmin() )
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>
