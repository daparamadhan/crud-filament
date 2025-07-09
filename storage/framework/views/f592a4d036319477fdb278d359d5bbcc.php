<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Swa Buana</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link 
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" 
    rel="stylesheet" 
  />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body class="font-['Plus Jakarta Sans','Noto Sans',sans-serif] bg-white text-[#111618]">

<header class="flex items-center justify-between border-b px-10 py-3">
  <div class="flex items-center gap-4">
    <div class="size-4 text-[#47c1ea]">
      <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M24 4C25.8 14.2 33.8 22.2 44 24C33.8 25.8 25.8 33.8 24 44C22.2 33.8 14.2 25.8 4 24C14.2 22.2 22.2 14.2 24 4Z"/>
      </svg>
    </div>
    <h2 class="text-lg font-bold tracking-tight">Swa Buana</h2>
  </div>
  <nav class="flex gap-8">
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="/about">About</a>
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="/services">Services</a>
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="/contact">Contact</a>
  </nav>
  <div class="flex gap-2">
    <a href="/track" 
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Track Package
    </a>

    <a href="/login" 
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Login
    </a>
  </div>
</header>

<!-- Hero -->
<section class="flex items-center justify-center py-16 px-4 bg-cover bg-center"
  style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1588269842570-7c74bc08f0b4?fit=crop&w=1600&q=80');">
  <div class="text-center max-w-xl space-y-4">
    <h1 class="text-4xl font-black text-white tracking-tight">Your Trusted Shipping Partner</h1>
    <p class="text-white text-base">Secure delivery from Bandung to anywhere in the world.</p>
    <div class="flex w-full max-w-md mx-auto rounded-xl overflow-hidden border border-white">
      <div class="flex items-center justify-center px-3 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
          <path d="M229.66 218.34l-50.07-50.06a88.11 88.11 0 1 0-11.31 11.31l50.06 50.07a8 8 0 0 0 11.32-11.32ZM40 112a72 72 0 1 1 72 72A72.08 72.08 0 0 1 40 112Z"/>
        </svg>
      </div>
      <input type="text" placeholder="Enter tracking code"
        class="flex-1 h-12 px-3 text-sm bg-transparent text-white placeholder-white focus:outline-none">
      <button class="h-12 px-4 bg-[#47c1ea] text-white font-bold text-sm tracking-wide hover:bg-[#3bb2d5] transition">Track</button>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="px-10 py-12 max-w-4xl mx-auto space-y-8">
  <div>
    <h2 class="text-3xl font-bold mb-2">Why Choose Swa Buana?</h2>
    <p>We go beyond just delivering packages — we deliver trust and peace of mind.</p>
  </div>
  <div class="grid sm:grid-cols-3 gap-6">
    <div class="p-4 border rounded-lg space-y-2 hover:border-[#47c1ea] transition">
      <h3 class="font-bold text-[#47c1ea]">Safe Handling</h3>
      <p class="text-sm text-[#637f88]">Every item is carefully managed to reach its destination intact.</p>
    </div>
    <div class="p-4 border rounded-lg space-y-2 hover:border-[#47c1ea] transition">
      <h3 class="font-bold text-[#47c1ea]">Affordable Rates</h3>
      <p class="text-sm text-[#637f88]">Competitive prices without compromising service quality.</p>
    </div>
    <div class="p-4 border rounded-lg space-y-2 hover:border-[#47c1ea] transition">
      <h3 class="font-bold text-[#47c1ea]">Dedicated Support</h3>
      <p class="text-sm text-[#637f88]">Friendly team ready to assist your shipping needs.</p>
    </div>
  </div>
</section>

<!-- Our Services -->
<section class="px-10 py-12 max-w-4xl mx-auto">
  <h2 class="text-2xl font-bold mb-6">Our Services</h2>
  <div class="grid sm:grid-cols-3 gap-6">
    <div class="p-4 border rounded-lg hover:border-[#47c1ea] transition space-y-2">
      <h4 class="font-bold text-[#47c1ea]">📦 Standard Shipping</h4>
      <p class="text-sm text-[#637f88]">Reliable delivery within Indonesia at the best value.</p>
    </div>
    <div class="p-4 border rounded-lg hover:border-[#47c1ea] transition space-y-2">
      <h4 class="font-bold text-[#47c1ea]">✈️ International Shipping</h4>
      <p class="text-sm text-[#637f88]">Send your packages worldwide with complete customs handling.</p>
    </div>
    <div class="p-4 border rounded-lg hover:border-[#47c1ea] transition space-y-2">
      <h4 class="font-bold text-[#47c1ea]">🚀 Express Delivery</h4>
      <p class="text-sm text-[#637f88]">For urgent needs, we guarantee the fastest route possible.</p>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="px-10 py-12 max-w-4xl mx-auto">
  <h2 class="text-2xl font-bold mb-6">What Our Clients Say</h2>
  <div class="space-y-6">
    <div class="p-4 border rounded-lg hover:border-[#47c1ea] transition">
      <p class="font-medium">Citra Mulyani <span class="text-[#637f88] text-sm">(June 10, 2025)</span></p>
      <p class="text-sm mt-2">"Swa Buana made my move to Singapore hassle-free. All items arrived perfectly!"</p>
    </div>
    <div class="p-4 border rounded-lg hover:border-[#47c1ea] transition">
      <p class="font-medium">Rendy Pratama <span class="text-[#637f88] text-sm">(May 28, 2025)</span></p>
      <p class="text-sm mt-2">"Highly professional service. The team updated me regularly until my parcel was received."</p>
    </div>
    <div class="p-4 border rounded-lg hover:border-[#47c1ea] transition">
      <p class="font-medium">Farah Syifa <span class="text-[#637f88] text-sm">(May 5, 2025)</span></p>
      <p class="text-sm mt-2">"Fast delivery and excellent customer support. Will definitely use Swa Buana again."</p>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-50 mt-12 border-t">
  <div class="max-w-4xl mx-auto px-10 py-8 text-center space-y-4">
    <div class="flex justify-center gap-6 flex-wrap text-sm">
      <a href="/about" class="hover:text-[#47c1ea] transition">About</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Services</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Contact</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Privacy Policy</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Terms of Service</a>
    </div>
    <p class="text-xs text-[#637f88]">&copy; 2025 Swa Buana. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
<?php /**PATH D:\Jejak Tugas\crud-filament\resources\views/welcome.blade.php ENDPATH**/ ?>