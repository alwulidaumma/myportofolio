@extends('layouts.app')

@section('content')
<div class="w-full bg-white p-8">
    <h1>Add Experience</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600 mb-1" for="image">Image:</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="file" name="image" id="image" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1l" for="brand">Judul:</label>
            <input  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" name="brand" id="brand" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1l" for="desk">Deskripsi:</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" name="desk" id="desk" required>
        </div>
        <div class="mb-6"> <!-- Menambahkan jarak lebih besar dengan mb-6 -->
            <label class="block text-sm font-medium text-gray-600 mb-1" for="desk">Deskripsi:</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" name="desk" id="desk" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Submit
        </button>
    </form>
@endsection
