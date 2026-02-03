@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section id="home" class="min-h-screen flex items-center px-10 pt-20">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center w-full">

        {{-- TEXT --}}
        <div class="space-y-8" data-aos="fade-right">
            <div class="space-y-4">
                <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-orange-500">Hello,</h2>
                <h1 class="text-6xl md:text-7xl font-extrabold tracking-tight leading-tight">
                    I Am <span class="text-white">Wahyudi Syaputra</span>
                </h1>
                <p class="text-lg text-gray-400 font-medium tracking-wide" data-aos="fade-up" data-aos-delay="200">
                    Web Developer <span class="text-orange-500">||</span> Full Stack Developer <span class="text-orange-500">||</span> Laravel Enthusiast
                </p>
                <p class="text-gray-500 text-lg" data-aos="fade-up" data-aos-delay="300">
                 study in university of mercu buana yogyakarta <span class="text-orange-500 font-bold">Informatics Engineering</span>
                </p>
            </div>

            <a href="#contact"
               class="inline-flex items-center gap-3 bg-orange-500 text-black px-10 py-5 rounded-xl font-extrabold text-xl hover:bg-orange-400 transition-all duration-300 transform hover:-translate-y-1 shadow-[0_10px_30px_rgba(249,115,22,0.4)] active:scale-95 group">
                Let's Talk
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>

            <div class="pt-10 space-y-6">
                <div class="flex gap-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
                <div class="pt-2">
                    <a href="#" class="text-orange-500 font-bold hover:underline transition-all underline-offset-8">
                        Download <span class="text-white">Curriculum Vitae</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- IMAGE --}}
        <div class="relative flex justify-center lg:justify-end items-center" data-aos="fade-left">
            
            {{-- Profile Image --}}
            <img
                src="{{ asset('assets/images/profile_clean.png') }}"
                alt="Profile Wahyudi Syaputra"
                class="relative z-10 w-[300px] md:w-[400px] object-cover filter contrast-110 brightness-105"
                style="mask-image: radial-gradient(circle, black 60%, transparent 95%); -webkit-mask-image: radial-gradient(circle, black 60%, transparent 95%);"
            >
        </div>

    </div>
</section>

{{-- ABOUT --}}
<section id="about" class="px-10 py-24 bg-slate-800">
    <div class="max-w-4xl mx-auto" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-6">About Me</h2>
        <p class="text-gray-300 leading-relaxed">
            Saya adalah seorang Web Developer yang berfokus pada pengembangan aplikasi web
            menggunakan Laravel. Saya terbiasa membangun struktur project yang rapi, logis,
            dan mudah dikembangkan, mulai dari perancangan tampilan hingga pengelolaan data
            menggunakan database. Saya memiliki ketertarikan pada pengembangan sistem yang
            efisien, modern, dan sesuai dengan kebutuhan pengguna.
        </p>
    </div>
</section>

{{-- SKILLS --}}
<section id="skills" class="px-10 py-24">
    <div class="max-w-4xl mx-auto" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-6">Skills</h2>
        <ul class="grid grid-cols-2 gap-4 text-gray-300">
            <li>✔ HTML, CSS, JavaScript</li>
            <li>✔ Laravel</li>
            <li>✔ Tailwind CSS</li>
            <li>✔ MySQL</li>
        </ul>
    </div>
</section>

{{-- CERTIFICATE --}}
<section id="certificates" class="px-10 py-24 bg-slate-800">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-white">Certificates</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Certificate 1 (PNG) --}}
            <div class="bg-slate-900 border border-slate-700 rounded-xl overflow-hidden group hover:border-orange-500 transition-all shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset('assets/images/2.PNG') }}" alt="Certificate 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Sertifikat 1</h3>
                    <a href="{{ asset('assets/images/2.PNG') }}" target="_blank" class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-400">
                        View Full Image
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Certificate 2 (PDF) --}}
            <div class="bg-slate-900 border border-slate-700 rounded-xl p-6 group hover:border-orange-500 transition-all shadow-lg flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="w-12 h-12 bg-red-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Sertifikat 2 (PDF)</h3>
                    <p class="text-gray-400 text-sm mb-4">Dokumen sertifikasi dalam format PDF.</p>
                </div>
                <a href="{{ asset('assets/images/3.pdf') }}" target="_blank" class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-400 mt-auto">
                    Open PDF
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

            {{-- Certificate 3 (PDF) --}}
            <div class="bg-slate-900 border border-slate-700 rounded-xl p-6 group hover:border-orange-500 transition-all shadow-lg flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="w-12 h-12 bg-red-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Sertifikat 3 (PDF)</h3>
                    <p class="text-gray-400 text-sm mb-4">Dokumen sertifikasi dalam format PDF.</p>
                </div>
                <a href="{{ asset('assets/images/4.pdf') }}" target="_blank" class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-400 mt-auto">
                    Open PDF
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

            {{-- Certificate 4 (PDF) --}}
            <div class="bg-slate-900 border border-slate-700 rounded-xl p-6 group hover:border-orange-500 transition-all shadow-lg flex flex-col justify-between" data-aos="fade-up" data-aos-delay="400">
                <div>
                    <div class="w-12 h-12 bg-red-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Sertifikat 4 (PDF)</h3>
                    <p class="text-gray-400 text-sm mb-4">Dokumen sertifikasi dalam format PDF.</p>
                </div>
                <a href="{{ asset('assets/images/5.pdf') }}" target="_blank" class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-400 mt-auto">
                    Open PDF
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- PORTFOLIO --}}
<section id="portfolio" class="px-10 py-24">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-10">Portfolio</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-slate-800 p-6 rounded-lg hover:scale-105 transition" data-aos="zoom-in" data-aos-delay="100">
                Project 1
            </div>
            <div class="bg-slate-800 p-6 rounded-lg hover:scale-105 transition" data-aos="zoom-in" data-aos-delay="200">
                Project 2
            </div>
            <div class="bg-slate-800 p-6 rounded-lg hover:scale-105 transition" data-aos="zoom-in" data-aos-delay="300">
                Project 3
            </div>
        </div>
    </div>
</section>

{{-- THANK YOU --}}
<section id="contact" class="px-10 py-24 bg-slate-800 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold mb-4">Thank You</h2>
    <p class="text-gray-300 max-w-xl mx-auto">
        Terima kasih telah meluangkan waktu untuk membaca portofolio saya.
    </p>
</section>

@endsection
