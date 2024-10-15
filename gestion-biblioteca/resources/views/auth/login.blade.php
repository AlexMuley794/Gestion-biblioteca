<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 p-6 border border-gray-300 rounded-lg shadow-md bg-white">
        <h1 class="text-2xl font-semibold text-center text-gray-800">Iniciar Sesión</h1>

        <!-- Mensaje de error o éxito -->
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Correo electrónico" 
                    required 
                    autofocus 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>
            <div class="mb-4">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Contraseña" 
                    required 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>
            <button 
                type="submit" 
                class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200"
            >
                Iniciar Sesión
            </button>
        </form>

        <p class="text-center mt-4 text-gray-600">
            ¿No tienes una cuenta? 
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Regístrate aquí</a>
        </p>
    </div>
</x-guest-layout>
