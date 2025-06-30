@extends('layouts.app')

@section('content')
<!-- Create Project Section -->
<div class="content w-2/3 ml-64 p-6">
    <h1 class="text-2xl font-semibold mb-6">Add New Project</h1>

    <!-- Form untuk menambah proyek -->
    <form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-600 mb-1">Image :</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-600 mb-1">Title :</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-600 mb-1">Description :</label>
            <textarea name="description" id="description" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required></textarea>
        </div>
        <div class="mb-4">
            <label for="link" class="block text-sm font-medium text-gray-600 mb-1">Project Link :</label>
            <input type="url" name="link" id="link" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Submit
        </button>
        <!-- Cancel Button -->
        <a href="{{ route('dashboard.projects.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                Cancel
            </a>
    </form>
</div>
<!-- Create Project Section End -->
@endsection
