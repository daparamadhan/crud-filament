<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Swa Buana</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/Logo.jpg') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body class="font-['Plus Jakarta Sans','Noto Sans',sans-serif] bg-white text-[#111618]">

    <header class="fixed top-0 left-0 right-0 z-50 bg-[#47c1ea] border-b shadow-md">
        <div class="flex items-center justify-between px-10 py-3 max-w-screen-xl mx-auto">
            <div class="flex items-center gap-4">
                <div class="size-4 text-white">
                    <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 4C25.8 14.2 33.8 22.2 44 24C33.8 25.8 25.8 33.8 24 44C22.2 33.8 14.2 25.8 4 24C14.2 22.2 22.2 14.2 24 4Z" />
                    </svg>
                </div>
                <a href="{{ route('home') }}"
                    class="text-lg font-bold tracking-tight text-white hover:text-[#bbf7ff] transition">Swa Buana</a>
            </div>
            <nav class="flex gap-8">
                <a href="{{ route('home') }}"
                    class="text-sm font-medium transition {{ request()->routeIs('home') ? 'text-[#bbf7ff]' : 'text-white hover:text-[#bbf7ff]' }}">
                    Home
                </a>
                <a href="{{ route('services') }}"
                    class="text-sm font-medium transition {{ request()->routeIs('services') ? 'text-[#bbf7ff]' : 'text-white hover:text-[#bbf7ff]' }}">
                    Services
                </a>
                <a href="{{ route('contact') }}"
                    class="text-sm font-medium transition {{ request()->routeIs('contact') ? 'text-[#bbf7ff]' : 'text-white hover:text-[#bbf7ff]' }}">
                    Contact
                </a>
            </nav>
            <div class="flex gap-2">
                <a href="{{ route('shipments.index') }}"
                    class="h-10 px-4 rounded-xl bg-white text-[#47c1ea] text-sm font-bold tracking-wide flex items-center justify-center hover:bg-gray-100 transition">
                    Send Now
                </a>
                <a href="{{ route('login') }}"
                    class="h-10 px-4 rounded-xl bg-white text-[#47c1ea] text-sm font-bold tracking-wide flex items-center justify-center hover:bg-gray-100 transition">
                    Login
                </a>
            </div>
        </div>
    </header>

    <section class="flex items-center justify-center pt-24 pb-16 px-4 bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1588269842570-7c74bc08f0b4?fit=crop&w=1600&q=80');">
        <div class="text-center max-w-xl space-y-4">
            <h1 class="text-4xl font-black text-white tracking-tight">Your Trusted Shipping Partner</h1>
            <p class="text-white text-base">Secure delivery from Bandung to anywhere in the world.</p>
            <div class="flex w-full max-w-md mx-auto rounded-xl overflow-hidden border border-white">
                <div class="flex items-center justify-center px-3 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M229.66 218.34l-50.07-50.06a88.11 88.11 0 1 0-11.31 11.31l50.06 50.07a8 8 0 0 0 11.32-11.32ZM40 112a72 72 0 1 1 72 72A72.08 72.08 0 0 1 40 112Z" />
                    </svg>
                </div>
                <input type="text" placeholder="Enter tracking code"
                    class="flex-1 h-12 px-3 text-sm bg-transparent text-white placeholder-white focus:outline-none">
                <button
                    class="h-12 px-4 bg-[#47c1ea] text-white font-bold text-sm tracking-wide hover:bg-[#3bb2d5] transition">Track</button>
            </div>
        </div>
    </section>

    <section class="px-10 py-12 max-w-4xl mx-auto">
        <div class="p-6 bg-white border rounded-xl shadow-md">
            <h2 class="text-3xl font-bold text-[#47c1ea] mb-4">Swa Buana Delivery Service</h2>
            <p class="text-gray-700 mb-6">
                At Swa Buana, we ensure your goods are delivered safely, affordably, and with a personal touch.
                Experience delivery that’s fast, secure, and supported by our dedicated team.
            </p>
            <a href="#delivery-process"
                class="inline-block bg-[#47c1ea] hover:bg-[#3ba8cd] text-white font-semibold px-5 py-2 rounded-lg transition">
                Discover Our Delivery Process
            </a>
        </div>
    </section>

    <section class="px-10 py-12 max-w-6xl mx-auto">
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-[#47c1ea] mb-2">Our Services</h2>
            <p class="text-gray-700">We continually expand our services to better meet your needs.</p>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            {{-- Loop melalui data layanan dari database --}}
            @foreach ($services as $service)
                <div class="p-6 bg-white border rounded-xl shadow-sm hover:border-[#47c1ea] transition">
                    <h4 class="text-lg font-semibold text-[#47c1ea] mb-1">{{ $service->nama_service }}</h4>
                    <p class="text-sm text-gray-600">{{ $service->deskripsi }}</p>
                    {{-- Opsional: Anda bisa menambahkan ikon/gambar di sini jika ada di model Service --}}
                    {{-- @if ($service->image_path)
                        <img src="{{ asset('storage/app/public/' . $service->image_path) }}" alt="{{ $service->nama_service }}" class="w-10 h-10 mb-2">
      @endif --}}
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            <a href="{{ route('services') }}"
                class="inline-flex items-center gap-2 bg-[#47c1ea] hover:bg-[#3ba8cd] text-white font-semibold px-5 py-2 rounded-lg transition">
                Learn More →
            </a>
        </div>
    </section>

    <section class="px-4 py-12 max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-[#47c1ea] mb-6">Our Promos</h2>
        <div class="flex gap-6 overflow-x-auto pb-4 scroll-smooth snap-x">
            @foreach ($promos as $promo)
                <div
                    class="flex-none w-96 bg-[#e8f8ff] border border-blue-200 rounded-xl shadow-sm overflow-hidden snap-startactive:scale-95 active:shadow-inner transition duration-200 ease-in-out">
                    <img src="{{ asset('storages/' . $promo->image_path) }}" alt="{{ $promo->title }}"
                        class="w-full h-36 object-cover transition duration-200 ease-in-out active:brightness-90">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-[#47c1ea] mb-2">{{ $promo->title }}</h3>
                        <p class="text-sm text-gray-700">
                            {{ $promo->description }}
                        </p>
                        <p class="text-xs text-gray-500 mt-2">*Terms apply</p>
                        <p class="text-xs text-[#6a9db2] mt-1">{{ $promo->hashtags }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-gradient-to-br from-[#47c1ea] to-[#3bb2d5] text-white pt-16">
        <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-10 px-6 pb-16">

            <div>
                <h3 class="font-bold text-lg mb-3">About Us</h3>
                <p class="text-sm leading-relaxed">
                    PT. Swa Buana Pratama is a logistics company providing fast expedition, air-sea cargo, customs
                    clearance (PPJK), and aircraft charter services since 2008.
                </p>
                <p class="mt-4 font-semibold text-sm">Operating Hours:</p>
                <p class="text-sm">Monday - Saturday, 08:00 AM - 10:00 PM</p>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-3">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-3">Contact</h3>
                <p class="text-sm">Jl. Abdul Rahman Saleh No.1A, Cicendo, Bandung 40174</p>
                <p class="text-sm mt-2">Phone: (022) 86060352</p>
                <p class="text-sm">WA: 0813-2197-0383</p>
                <p class="text-sm">Email: sbpcargo@swabuana.co.id</p>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-3">Send Message</h3>
                <form class="space-y-3">
                    <input type="text" placeholder="Your Name"
                        class="w-full px-3 py-2 rounded bg-white text-sm text-black" />
                    <input type="email" placeholder="Your Email"
                        class="w-full px-3 py-2 rounded bg-white text-sm text-black" />
                    <textarea rows="3" placeholder="Your Message" class="w-full px-3 py-2 rounded bg-white text-sm text-black"></textarea>
                    <button type="submit"
                        class="w-full bg-white text-[#47c1ea] font-bold py-2 rounded hover:bg-blue-100 transition">Send</button>
                </form>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 mb-12">
            <h3 class="font-bold text-center text-lg mb-4">Our Location</h3>
            <div class="overflow-hidden rounded-xl shadow-lg border border-white">
                <iframe class="w-full h-72" frameborder="0" style="border:0" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63351.30953992406!2d107.54342184379637!3d-6.894070949623741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f246cda16f%3A0x67bd34f9a49a4f64!2sJl.%20Abdul%20Rahman%20Saleh%20No.1A%2C%20Husen%20Sastranegara%2C%20Kec.%20Cicendo%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040174!5e0!3m2!1sen!2sid!4v1625060252672!5m2!1sen!2sid">
                </iframe>
            </div>
        </div>

        <div class="text-center text-xs py-4 text-white bg-[#289bc4]">
            © 2025 PT. Swa Buana Pratama. All rights reserved.
        </div>
    </footer>

</body>

</html>
