<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo & Menu Items -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('skills')" :active="request()->routeIs('skills')">
                        {{ __('Skills') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link :href="route('experience')" :active="request()->routeIs('experience')">
                        {{ __('Experience') }}
                    </x-nav-link>
                    <x-nav-link :href="route('certifications')" :active="request()->routeIs('certifications')">
                        {{ __('Certifications') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center">
                <!-- Language Switcher -->
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ App::getLocale() === 'en' ? 'EN' : 'ID' }}
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('language.switch', 'en') }}">English</x-dropdown-link>
                        <x-dropdown-link href="{{ route('language.switch', 'id') }}">Indonesia</x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <!-- Dark/Light Mode Toggle -->
                <button @click="darkMode = !darkMode" class="ml-4 text-gray-500 dark:text-gray-400">
                    <svg x-show="!darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                    <svg x-show="darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav> 