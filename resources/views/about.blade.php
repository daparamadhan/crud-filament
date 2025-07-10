<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Swa Buana - Services</title>
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
    <a href="/shipment" 
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Send Now
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
  </div>
</section>

<!-- About Swa Buana Logistic -->
<section class="bg-gray-50 px-6 py-16">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-bold mb-4">About Us</h2>
    <p class="text-[#637f88] max-w-3xl mx-auto text-sm">
      PT. Swa Buana Pratama (Buana Logistic) berdiri pada tahun 2008 di Bandung.
      Dari tim kecil, kini berkembang menjadi penyedia layanan logistik terintegrasi
      mencakup ekspedisi express, cargo udara & laut, bea cukai (PPJK),
      hingga sewa pesawat kargo untuk menjangkau pelosok Indonesia & mancanegara.
    </p>
  </div>

  <div class="grid sm:grid-cols-3 gap-6 max-w-6xl mx-auto mb-12">
    <div class="p-6 bg-white rounded-xl border hover:shadow-lg transition space-y-3 text-center">
      <div class="text-4xl">🎯</div>
      <h4 class="font-bold text-[#47c1ea] text-base">Visi & Misi</h4>
      <p class="text-xs text-[#637f88]">
        Menjadi perusahaan logistik terpercaya di Indonesia dengan pelayanan
        cepat, aman, transparan, memanfaatkan teknologi & bermitra luas.
      </p>
    </div>
    <div class="p-6 bg-white rounded-xl border hover:shadow-lg transition space-y-3 text-center">
      <div class="text-4xl">🚀</div>
      <h4 class="font-bold text-[#47c1ea] text-base">Layanan Utama</h4>
      <p class="text-xs text-[#637f88]">
        Express "1 Hari Pasti Sampai", door-to-door, pickup service,
        tracking real-time, PPJK, hingga charter pesawat cargo.
      </p>
    </div>
    <div class="p-6 bg-white rounded-xl border hover:shadow-lg transition space-y-3 text-center">
      <div class="text-4xl">🤝</div>
      <h4 class="font-bold text-[#47c1ea] text-base">Jaringan & Partner</h4>
      <p class="text-xs text-[#637f88]">
        Mitra maskapai Garuda, Citilink, Lion Air, AirAsia & lainnya,
        dengan distribusi ke seluruh Indonesia & luar negeri.
      </p>
    </div>
  </div>

  <div class="max-w-5xl mx-auto mb-12 grid sm:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl border hover:shadow-lg transition text-center space-y-3">
      <div class="text-4xl">📦</div>
      <h4 class="font-bold text-[#47c1ea] text-base">+100.000 Paket</h4>
      <p class="text-xs text-[#637f88]">Terkirim cepat & aman ke berbagai tujuan.</p>
    </div>
    <div class="bg-white p-6 rounded-xl border hover:shadow-lg transition text-center space-y-3">
      <div class="text-4xl">🌐</div>
      <h4 class="font-bold text-[#47c1ea] text-base">+150 Kota</h4>
      <p class="text-xs text-[#637f88]">Jaringan distribusi di seluruh Indonesia & Asia.</p>
    </div>
    <div class="bg-white p-6 rounded-xl border hover:shadow-lg transition text-center space-y-3">
      <div class="text-4xl">👥</div>
      <h4 class="font-bold text-[#47c1ea] text-base">+1.000 Pelanggan</h4>
      <p class="text-xs text-[#637f88]">Telah mempercayakan pengiriman ke kami.</p>
    </div>
  </div>

  <div class="max-w-4xl mx-auto mb-12">
    <h5 class="font-bold text-[#47c1ea] text-center mb-6">Partner Maskapai Kami</h5>
    <div class="flex flex-wrap justify-center items-center gap-6 opacity-80">
      <img src="garuda-logo.png" alt="Garuda" class="h-8" />
      <img src="citilink-logo.png" alt="Citilink" class="h-8" />
      <img src="lion-logo.png" alt="Lion Air" class="h-8" />
      <img src="airasia-logo.png" alt="AirAsia" class="h-8" />
      <img src="sriwijaya-logo.png" alt="Sriwijaya" class="h-8" />
    </div>
  </div>

  <div class="text-center">
    <p class="text-xs max-w-xl mx-auto mb-4">
      PT. Swa Buana Pratama terus berinovasi melalui teknologi mobile booking,
      pelacakan real-time, serta layanan customer service responsif
      untuk pengalaman pengiriman yang terbaik.
    </p>
    <a href="/contact" class="inline-block bg-[#47c1ea] text-white font-bold px-6 py-3 rounded-xl hover:bg-[#3bb2d5] transition">
      Hubungi Kami
    </a>
  </div>
</section>

<div class="grid sm:grid-cols-2 gap-8 max-w-5xl mx-auto mb-12 text-sm text-[#637f88]">
    <div class="space-y-4">
      <h5 class="font-bold text-[#47c1ea] text-base">Kantor Pusat</h5>
      <p>Jl. Abdul Rahman Saleh No.1A, Husen Sastranegara, Cicendo, Bandung 40174</p>
      <p>Telp: (022) 86060352</p>
      <p>WA: 0813-2197-0383</p>
      <p>Email: sbpcargo@swabuana.co.id</p>
    </div>
    <div class="space-y-4">
      <h5 class="font-bold text-[#47c1ea] text-base">Cabang Bandung</h5>
      <ul class="list-disc list-inside space-y-1">
        <li>Bandara Husein - Jl. Pajajaran 156</li>
        <li>Biz Park Kopo Blok 1A No.2</li>
        <li>Padalarang - Ruko Kota Bali No.8</li>
        <li>Rancaekek - Ruko Duta Family Blok F7</li>
        <li>Andir - Jl. Dadali No.35</li>
      </ul>
    </div>
  </div>

<!-- Footer -->
<footer class="bg-gray-50 mt-12 border-t">
  <div class="max-w-4xl mx-auto px-10 py-8 text-center space-y-4">
    <div class="flex justify-center gap-6 flex-wrap text-sm">
      <a href="/about" class="hover:text-[#47c1ea] transition">About</a>
      <a href="/services" class="hover:text-[#47c1ea] transition">Services</a>
      <a href="/contact" class="hover:text-[#47c1ea] transition">Contact</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Privacy Policy</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Terms of Service</a>
    </div>
    <p class="text-xs text-[#637f88]">&copy; 2025 Swa Buana. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
