<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <!-- Cambiar el orden para que 'Inicio' sea el primero -->
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('books.index')" :active="request()->routeIs('books.index')">
                        {{ __('Libros') }}
                    </x-nav-link>
                    <x-nav-link :href="route('books.create')" :active="request()->routeIs('books.create')">
                        {{ __('Crear Libro') }}
                    </x-nav-link>
                    <!-- Opción de salir -->
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Salir') }}
                        </x-nav-link>
                    </form>
                </div>
            </div>

            <!-- ... el resto del código permanece igual ... -->

        </div>
    </div>
</nav>
