@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Agregar Libro</h1>

        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Título</label>
                <input type="text" name="title" id="title" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Autor</label>
                <input type="text" name="author" id="author" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Año</label>
                <input type="number" name="year" id="year" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
            <button type="submit" class="p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
                Agregar Libro
            </button>
        </form>
    </div>
@endsection
