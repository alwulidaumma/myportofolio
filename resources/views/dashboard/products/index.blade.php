@extends('layouts.app')

@section('content')
<!-- Experience Section -->
<div class="content w-2/3 ml-64 p-6">
    <h1 class="text-2xl font-semibold mb-6">Experience</h1>

    <!-- Form untuk menambah produk -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-600 mb-1">Image :</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="brand" class="block text-sm font-medium text-gray-600 mb-1">Title :</label>
            <input type="text" name="brand" id="brand" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="desk" class="block text-sm font-medium text-gray-600 mb-1">Description :</label>
            <input type="text" name="desk" id="desk" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>
        @csrf
    <!-- Tambahkan input atau field lainnya -->
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Submit
        </button>
    </form>

    <h2 class="text-xl font-semibold mt-6">Experience List</h2>

@if($products->isEmpty())
    <p class="text-gray-600">No products added yet.</p>
@else
    <table class="min-w-full border-collapse mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left border-b">Image</th>
                <th class="px-4 py-2 text-left border-b">Title</th>
                <th class="px-4 py-2 text-left border-b">Description</th>
                <th class="px-4 py-2 text-left border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="border-b">
                <td class="px-4 py-2">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->brand }}" class="w-20 h-20 object-cover rounded-md">
                </td>
                <td class="px-4 py-2">{{ $product->brand }}</td>
                <td class="px-4 py-2 text-gray-600 text-sm">{{ $product->desk }}</td>
                <td class="px-4 py-2">
                <div class="flex items-center justify-start space-x-2">
                 <!-- Tombol Edit -->
                <a href="{{ route('products.edit', $product->id) }}"
                class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Edit
                </a>

                <!-- Tombol Delete -->
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
<!-- Experience Section End -->
@endsection
