<aside class="fixed bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <!-- Header Sidebar -->
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">
            Welcome, Alwulida
        </a>
    </div>
    <!-- Navigasi Sidebar -->
    <nav class="text-white text-base font-semibold pt-3">

        <!-- Projects -->
        <a href="{{ route('dashboard.projects.index') }}" 
           class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-folder-open mr-3"></i>
            Projects
        </a>

        <!-- Experience -->
        <a href="{{ route('dashboard.products.index') }}" 
           class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Experience
        </a>

    <!-- Divider -->
    <hr class="border-t mx-6 my-2 border-gray-600">

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item w-full">
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
        </button>
    </form>
</aside>
