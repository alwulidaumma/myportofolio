<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Portfolio</title>
</head>
<body>
    <header class="p-6 bg-white border-b-2 border-gray-300 fixed top-0 left-0 right-0 z-10 backdrop-blur bg-opacity-70">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-sky-600 block">alwldaumma.</a>
                </div>
                <nav class="flex items-center px-4">
                    <ul class="flex space-x-8">
                        <li>
                            <a href="#home" class="font-semibold text-base text-black py-2 hover:text-sky-600">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="font-semibold text-base text-black py-2 hover:text-sky-600">About Me</a>
                        </li>
                        <li>
                            <a href="#project" class="font-semibold text-base text-black py-2 hover:text-sky-600">Project</a>
                        </li>
                        <li>
                            <a href="#experience" class="font-semibold text-base text-black py-2 hover:text-sky-600">Experience</a>
                        </li>
                        <li>
                            <a href="#contact" class="font-semibold text-base text-black py-2 hover:text-sky-600">Contact</a>
                        </li>
                        <li>
                        <a href="{{ route('login') }}" class="text-base font-semibold text-white bg-sky-600 py-3 px-6 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
  <!-- Home Section Start -->
  <section id="home" class="pt-36">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-sky-600 md:text-2xl">
                Hallo Everyone, I'm 
                <span class="block font-bold text-slate-900 text-4xl mt-1 lg:text-5xl">Alwulida Nur Aini Umma</span>
            </h1>
            <h2 class="font-medium text-slate-700 text-lg mb-5 lg:text-2xl">
                Associate Degree Student
            </h2>
            <p class="font-medium text-slate-600 mb-10 leading-relaxed">
                I am a student at the Vocational Faculty at Brawijaya University, Information Technology study program.
            </p>
            <a href="#contact" class="text-base font-semibold text-white bg-sky-600 py-3 px-6 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                Contact me
            </a>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2 flex justify-center items-center mt-10">
            <img src="{{asset('image/profil.png')}}" alt="Alwulida Umma" class="max-w-md h-50 object-cover rounded-lg mt-5" />
        </div>
    </div>
  </section>
  <!-- Home Section End -->
  <!-- About Section Start -->
  <section id="about" class="pt-36 pb-32 bg-slate-100">
  <div class="container mx-auto flex flex-wrap">
      <div class="w-full px-4 mb-10 lg:w-1/2">
          <h4 class="font-bold uppercase text-sky-600 text-lg mb-3">About Me</h4>
          <h3 class="font-semibold text-slate-900 text-2xl mb-4 lg:text-4xl">Get to know more about me!</h3>
          <p class="font-medium text-base text-slate-700 max-w-xl lg:text-lg">
              I am interested in data science and database management. I enjoy team discussions, which helps me adapt easily to new people. I also love working with numbers and data, and I am someone who doesn't give up easily. I have skills in Canva, Figma, and MySQL, and I actively participate in various online skill-building activities.
          </p>
      </div>
      <div class="w-full px-4 lg:w-1/2">
          <h3 class="font-semibold text-slate-900 text-2xl mb-4 lg:text-3xl lg:pt-10">Let's Connect!</h3>
          <p class="font-medium text-base text-slate-700 mb-6 lg:text-lg">
              To establish a connection, please reach out to me on the social media below!
          </p>
          <div class="flex items-center">
              <a href="https://www.linkedin.com/in/alwldaumma" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-sky-600 hover:bg-sky-600 hover:text-white transition duration-300">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title>LinkedIn</title>
                      <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
              </a>
              <a href="https://instagram.com/alwldaumma" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-sky-600 hover:bg-sky-600 hover:text-white transition duration-300">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title>Instagram</title>
                      <path d="M7.0301 1.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/>
                  </svg>
              </a>
              <a href="https://github.com/alwulidaumma" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-sky-600 hover:bg-sky-600 hover:text-white transition duration-300">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title>GitHub</title>
                      <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                  </svg>
              </a>
          </div>
      </div>
  </div>
  </section>
  <!-- About Section End -->
  <!--Project Start-->
     @php
    use App\Models\Project;
    // Mengambil proyek dengan pagination (9 per halaman)
    $projects = Project::paginate(9);
    @endphp
    <section id="project" class="pt-36 pb-16">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-sky-600 mb-2">My Project</h4>
                    <h2 class="font-bold text-black text-3xl mb-4">Portfolio of Excellence</h2>
                </div>
            </div>

            <!-- Project Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
            <div class="bg-white rounded-lg shadow-md overflow-hidden mx-auto flex flex-col lg:flex-row lg:w-96"> <!-- Menambah lebar kotak -->
                <!-- Teks di kiri -->
                <div class="p-6 flex flex-col justify-between lg:w-1/2">
                    <h3 class="text-xl font-semibold">{{ $project->title }}</h3> <!-- Membesarkan ukuran font -->
                    <p class="text-sm text-gray-500 mb-3">{{ $project->description }}</p> <!-- Membesarkan ukuran font -->
                    <a href="{{ $project->link }}" 
                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 ease-in-out" 
                    target="_blank">
                    Go to Project
                    </a>
                </div>
                
                <!-- Gambar di kanan -->
                <div class="relative w-full lg:w-1/2 h-64"> <!-- Menambah tinggi gambar -->
                    <img src="{{ asset('storage/' . $project->image) }}" 
                        alt="{{ $project->title }}" 
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-md">
                </div>
            </div>
        @endforeach
    </div>


            <!-- Pagination Links -->
            <div class="mt-6 text-center">
                {{ $projects->links() }} <!-- Menampilkan pagination -->
            </div>
        </div>
    </section>
  <!--Project End-->
  <!-- Experience Section Start -->
  <section id="experience" class="pt-36 pb-16 bg-slate-100">
    <div class="container mx-auto">
        <!-- Judul Bagian -->
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-sky-600 mb-2">Experience</h4>
                <h2 class="font-bold text-black text-3xl mb-4">My Valuable Experience</h2>
            </div>
        </div>

        <!-- Kartu Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Gambar Produk -->
                <div class="w-full h-48 overflow-hidden"> <!-- Ukuran foto tetap -->
                    <img src="{{ asset('storage/' . $product->image) }}" 
                         alt="{{ $product->brand }}" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Placeholder jika gambar tidak tersedia -->
                @if(!$product->image)
                <div class="flex justify-center items-center h-48 bg-gray-400 opacity-75">
                    <span class="text-white">No Image</span>
                </div>
                @endif

                <!-- Deskripsi Produk -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                    <p class="text-sm text-gray-500 mb-3">Judul : {{ $product->brand }}</p>
                    <p class="text-sm text-gray-500 mb-3">{{ $product->desk }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-600">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
  <!-- Experience Section End -->
  <!-- Contact Section Start -->
  <section id="contact" class="pt-36 pb-32">
  <div class="container mx-auto">
      <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-semibold text-lg text-sky-600 mb-2">Contact Me</h4>
              <h2 class="font-bold text-black text-3xl mb-4">Contact Me For Further Information</h2>
          </div>
      </div>
      <form>
          <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full px-4 mb-8">
                  <label for="name" class="text-base font-bold text-sky-600">Name</label>
                  <input type="text" id="name" class="w-full bg-slate-200 text-black p-3 rounded-md focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600" required>
              </div>
              <div class="w-full px-4 mb-8">
                  <label for="email" class="text-base font-bold text-sky-600">Email</label>
                  <input type="email" id="email" class="w-full bg-slate-200 text-black p-3 rounded-md focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600" required>
              </div>
              <div class="w-full px-4 mb-8">
                  <label for="message" class="text-base font-bold text-sky-600">Message</label>
                  <textarea id="message" class="w-full bg-slate-200 text-black p-3 rounded-md focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600 h-32" required></textarea>
              </div>
              <div class="w-full px-4">
                  <button type="submit" class="text-base font-semibold text-white bg-sky-600 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Send</button>
              </div>
          </div>
      </form>
  </div>
  </section>
  <!-- Contact Section End -->
  <!--Footer Start-->
  <footer class="bg-gray-800 pt-24 pb-12">
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-between">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                <h2 class="font-bold text-4xl text-white mb-5">Malang</h2>
                <h3 class="font-bold text-2xl mb-2">Contact Me</h3>
                <p>alwulidaumma12@gmail.com</p>
                <p>Jl Blambangan, Dampit</p>
                <p>Kab Malang</p>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-bold text-xl text-white mb-5">News</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="https://kominfo.jatimprov.go.id/berita/ub-raih-14-kejuaraan-olimpiade-vokasi-indonesia-ix" class="font-semiblock text-base hover:text-sky-600 mb-3">Winner OLIVIA</a>
                    </li>
                    <li>
                        <a href="https://radarmalang.jawapos.com/kota-malang/815116901/festival-kampung-cempluk-malang-padukan-konsep-manusia-dan-alam" class="font-semiblock text-base hover:text-sky-600 mb-3">Festival Kampung Cempluk</a>
                    </li>
                </ul>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-bold text-xl text-white mb-5">Link</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="#home" class="font-semiblock text-base hover:text-sky-600 mb-3">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="font-semiblock text-base hover:text-sky-600 mb-3">About Me</a>
                    </li>
                    <li>
                        <a href="#experience" class="font-semiblock text-base hover:text-sky-600 mb-3">Experience</a>
                    </li>
                    <li>
                        <a href="#contact" class="font-semiblock text-base hover:text-sky-600 mb-3">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full pt-10 border-t border-slate-700">
            <div class="flex items-center justify-center mb-5">
                 <!-- LinkedIn -->
                 <a href="https://www.linkedin.com/in/alwldaumma" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-sky-600 hover:bg-sky-600 hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
              </a>
              <!-- Instagram -->
              <a href="https://instagram.com/alwldaumma" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-sky-600 hover:bg-sky-600 hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
              </a>
              <!-- GitHub -->
              <a href="https://github.com/alwulidaumma" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-sky-600 hover:bg-sky-600 hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
              </a>
          </div>
          <p class="font-medium text-sm text-slate-500 text-center">@alwulidaumma-uts-webframework</p>
      </div>
  </div>
</div>
</div>
</footer>
<!--Footer End-->
</body>
</html>
