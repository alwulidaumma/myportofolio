@extends('layouts.app')

@section('content')
<div class="container mx-64 p-6">
    <h1 class="text-3xl font-semibold mb-6">Edit Project</h1>

    <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT') <!-- Menambahkan method PUT untuk melakukan update -->

        <!-- Title Field -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="title" value="{{ old('title', $project->title) }}" required>
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
            <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="description" required>{{ old('description', $project->description) }}</textarea>
        </div>

        <!-- Image Field -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-600">Image</label>
            @if($project->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="w-40 h-40 object-cover rounded-lg shadow-md">
                </div>
            @endif
            <input type="file" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="image">
            <small class="text-sm text-gray-500">Leave this blank if you don't want to change the image.</small>
        </div>

        <!-- Project Link Field -->
        <div class="mb-4">
            <label for="link" class="block text-sm font-medium text-gray-600">Project Link</label>
            <input type="url" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="link" value="{{ old('link', $project->link) }}" required>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-between">
            <button type="submit" class="w-48 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Update Project
            </button>
            
            <!-- Cancel Button -->
            <a href="{{ route('dashboard.projects.index') }}" class="w-48 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 text-center">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
