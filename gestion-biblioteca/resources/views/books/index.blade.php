@extends('layouts.app') <!-- Asegúrate de que extienda el layout correcto -->

@section('content') <!-- Esta es la sección que se reemplazará en app.blade.php -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Lista de Libros</h1>
        <!-- Enlace para crear un nuevo libro -->
        <div class="mb-4 text-right">
            <a href="{{ route('books.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
                Crear Nuevo Libro
            </a>
        </div>

        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('books.index') }}" class="mb-6">
            <div class="flex flex-wrap justify-between gap-4">
                <input 
                    type="text" 
                    name="title" 
                    placeholder="Buscar por título" 
                    class="flex-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                >
                <input 
                    type="text" 
                    name="author" 
                    placeholder="Buscar por autor" 
                    class="flex-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                >
                <input 
                    type="number" 
                    name="year" 
                    placeholder="Año" 
                    class="flex-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                >
                <button 
                    type="submit" 
                    class="p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200"
                >
                    Buscar
                </button>
            </div>
        </form>

        <!-- Lista de Libros -->
        <ul class="space-y-4">
            @foreach($books as $book)
                <li class="p-4 border border-gray-300 rounded-md hover:shadow-lg transition duration-200 bg-gray-50">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $book->title }}</h2>
                    <p class="text-gray-600">Autor: {{ $book->author }}</p>
                    <p class="text-gray-600">Año: {{ $book->year }}</p>

                    <!-- Formulario para eliminar el libro -->
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mt-2 text-red-600 hover:text-red-800 transition duration-200" onclick="return confirm('¿Estás seguro de que deseas eliminar este libro?');">
                            Eliminar
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Mensaje si no hay libros -->
        @if($books->isEmpty())
            <p class="mt-4 text-center text-gray-500">No se encontraron libros.</p>
        @endif
    </div>
@endsection
