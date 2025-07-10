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
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
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
    <a href="/" 
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Send Now
    </a>

    <a href="/login" 
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Login
    </a>
  </div>
</header>

<section class="bg-gray-50 px-6 py-16">
  <div class="max-w-4xl mx-auto space-y-8 bg-white p-8 rounded-xl border shadow-sm">
    <h2 class="text-2xl font-bold text-center text-[#1e293b]">Shipment Detail</h2>

<form method="POST" action="{{ route('shipments.store') }}">
  @csrf

  <!-- Sender Detail -->
  <div class="grid sm:grid-cols-2 gap-4">
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Sender Name</label>
      <input type="text" name="sender_name" required class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Sender Phone</label>
      <input type="text" name="sender_phone" required class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
  </div>

  <!-- Receiver Detail -->
  <div class="grid sm:grid-cols-2 gap-4 mt-6">
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Receiver Name</label>
      <input type="text" name="receiver_name" required class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Receiver Phone</label>
      <input type="text" name="receiver_phone" required class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
  </div>

  <!-- Pickup Time & Arrival -->
  <div class="grid sm:grid-cols-2 gap-4 mt-6">
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Pickup Time</label>
      <input type="datetime-local" name="pickup_time" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Estimated Arrival</label>
      <input type="datetime-local" name="estimated_arrival" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
  </div>

  <!-- Paket Size -->
  <div x-data="{ size: 'small' }" class="mt-6">
  <label class="block text-xs font-bold mb-2 text-[#47c1ea]">Ukuran Paket *</label>
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
    <template x-for="option in [
      { id: 'small', name: 'Small', price: 12000, dimension: '20×20×8 cm' },
      { id: 'medium', name: 'Medium', price: 18000, dimension: '30×22×12 cm' },
      { id: 'large', name: 'Large', price: 23000, dimension: '35×30×25 cm' },
      { id: 'custom', name: 'Custom', price: null, dimension: 'Max 50×50×50 cm' }
    ]" :key="option.id">
      <label
        :class="[
          'border rounded-lg p-4 text-center cursor-pointer hover:border-[#47c1ea]',
          size === option.id ? 'border-[#47c1ea] ring-2 ring-[#47c1ea]' : 'border-gray-300'
        ]"
        @click="size = option.id"
      >
        <input type="radio" class="sr-only" name="ukuran_paket" :value="option.id" :checked="size === option.id">
        <div class="font-bold text-sm" x-text="option.name"></div>
        <div class="text-sm text-gray-600" x-show="option.price !== null" x-text="`Rp. ${option.price.toLocaleString('id-ID')}`"></div>
        <div class="text-xs text-gray-500" x-text="option.dimension"></div>
      </label>
    </template>
  </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4" x-show="size === 'custom'" x-transition>
      <input type="number" name="panjang" placeholder="Panjang (cm)" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
      <input type="number" name="lebar" placeholder="Lebar (cm)" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
      <input type="number" name="tinggi" placeholder="Tinggi (cm)" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
    </div>
  </div>

  <!-- Item Type & Fragile -->
  <div class="grid sm:grid-cols-2 gap-4 mt-6">
    <div>
      <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Item Type</label>
      <select name="item_type" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]">
        <option value="">Pilih jenis barang</option>
        <option value="dokumen">Dokumen</option>
        <option value="elektronik">Elektronik</option>
        <option value="pakaian">Pakaian</option>
        <option value="sepatu">Sepatu</option>
        <option value="makanan_kering">Makanan Kering</option>
        <option value="makanan_basah">Makanan Basah</option>
        <option value="ikan_hias">Ikan Hias</option>
        <option value="tanaman">Tanaman</option>
        <option value="kosmetik">Kosmetik / Skincare</option>
        <option value="obat">Obat-obatan</option>
        <option value="aksesoris">Aksesoris</option>
        <option value="peralatan_rumah">Peralatan Rumah</option>
        <option value="lainnya">Lainnya</option>
      </select>
    </div>
    <label class="inline-flex items-center space-x-2 mt-6 sm:mt-0">
      <input type="checkbox" name="fragile" value="1" class="rounded text-[#47c1ea] focus:ring-[#47c1ea]">
      <span class="text-sm">Fragile</span>
    </label>
  </div>

  <!-- Extra Services -->
<div x-data="{ insurance: false }" class="mt-6">
  <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Insurance</label>
  <label class="inline-flex items-center space-x-2">
    <input type="checkbox" x-model="insurance" class="rounded text-[#47c1ea] focus:ring-[#47c1ea]">
    <span class="text-sm">Enable Insurance (Rp. 500)</span>
  </label>
  <input type="hidden" name="insurance" :value="insurance ? 1 : 0">

  <!-- Shown only when insurance is checked -->
  <p class="text-xs text-gray-500 mt-2" x-show="insurance">
    Insurance provides protection against damage or loss during shipment.
  </p>
</div>

  <!-- Extra Packaging -->
  <div x-data="{ showOptions: false, selectedPackaging: null }" class="mt-6">
    <label class="block text-xs font-bold mb-1 text-[#47c1ea]">Extra Packaging</label>
    <div class="flex gap-2">
      <input type="text" readonly 
        class="w-full rounded-md border-gray-300 bg-gray-100 cursor-not-allowed"
        :value="selectedPackaging ? selectedPackaging.name + ' - Rp. ' + selectedPackaging.price : 'None'">
      <button type="button" @click="showOptions = !showOptions" class="text-xs bg-[#47c1ea] text-white px-3 py-1 rounded-md">Add</button>
    </div>

    <div x-show="showOptions" x-transition class="mt-2 bg-gray-50 border rounded-md p-4">
      <template x-for="option in [
        { name: 'Box Ramah Lingkungan S (20×20×8cm)', price: 3000 },
        { name: 'Box Ramah Lingkungan M (30×22×12cm)', price: 4000 },
        { name: 'Box Ramah Lingkungan L (35×30×25cm)', price: 6000 }
      ]" :key="option.name">
        <div class="flex justify-between items-center border-b pb-2 mb-2">
          <div>
            <div class="text-sm font-medium" x-text="option.name"></div>
            <div class="text-xs text-gray-500" x-text="'Rp. ' + option.price"></div>
          </div>
          <button type="button" @click="selectedPackaging = option; showOptions = false" class="text-[#47c1ea] text-lg font-bold">+</button>
        </div>
      </template>
    </div>

    <input type="hidden" name="extra_packaging" :value="selectedPackaging?.name">
    <input type="hidden" name="extra_packaging_price" :value="selectedPackaging?.price">
  </div>

  <!-- Submit Button -->
  <div class="mt-6 text-right">
    <button type="submit" class="bg-[#47c1ea] text-white font-bold px-6 py-2 rounded-xl hover:bg-[#3bb2d5] transition">
      Continue
    </button>
  </div>
</form>

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
<script>
  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for contacting us!');
  });