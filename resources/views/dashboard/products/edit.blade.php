@extends('layouts.app')

@section('content')
<div class="container mx-64 px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold mb-6">Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Input Gambar -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-600 mb-1">Image:</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="w-24 h-24 mt-2 object-cover rounded">
            @endif
        </div>

        <!-- Input Brand -->
        <div class="mb-4">
            <label for="brand" class="block text-sm font-medium text-gray-600 mb-1">Title:</label>
            <input type="text" name="brand" id="brand" value="{{ $product->brand }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <!-- Input Deskripsi -->
        <div class="mb-4">
            <label for="desk" class="block text-sm font-medium text-gray-600 mb-1">Description:</label>
            <input type="text" name="desk" id="desk" value="{{ $product->desk }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Update
        </button>
    </form>
</div>
@endsection
