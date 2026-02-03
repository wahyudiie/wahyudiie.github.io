<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- AOS ANIMATION --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-[#0a0a0c] text-white scroll-smooth font-sans">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 left-0 w-full bg-[#0a0a0c]/80 backdrop-blur-md z-50">
        <div class="max-w-7xl mx-auto px-10 py-6 flex justify-between items-center">
            <h1 class="text-xl font-bold tracking-widest text-orange-500">PORTFOLIO</h1>

            <ul class="hidden md:flex gap-10 text-xs font-bold tracking-[0.2em] transition-all">
                <li><a href="#home" class="hover:text-orange-500">HOME</a></li>
                <li><a href="#portfolio" class="hover:text-orange-500">PORTOFOLIO</a></li>
                <li><a href="#blog" class="hover:text-orange-500">BLOG</a></li>
                <li><a href="#contact" class="hover:text-orange-500">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- AOS SCRIPT --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
        });
    </script>

</body>
</html>
