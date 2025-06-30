@extends('layouts.app')

@section('content')
<!-- Projects Section -->
<div class="content w-2/3 ml-64 p-6">
    <h1 class="text-2xl font-semibold mb-6">Projects</h1>

    <!-- Tombol untuk mengarahkan ke halaman create project -->
    <a href="{{ route('dashboard.projects.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg mb-6">
        Create New Project
    </a>

    <h2 class="text-xl font-semibold mt-6">Project List</h2>

    @if($projects->isEmpty())
        <p class="text-gray-600">No projects added yet.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach($projects as $project)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">{{ $project->title }}</h3>
                        <p class="text-gray-600 text-sm">{{ $project->description }}</p>
                        <a href="{{ $project->link }}" target="_blank" class="text-blue-500 hover:underline mt-2 block">Go to Project</a>
                    </div>
                    <div class="p-4 flex items-center justify-start space-x-2">
                        <!-- Tombol Edit -->
                        <a href="{{ route('dashboard.projects.edit', $project->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            Edit
                        </a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('dashboard.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
<!-- Projects Section End -->
@endsection
