<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Swa Buana - Contact</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body class="font-['Plus Jakarta Sans','Noto Sans',sans-serif] bg-white text-[#111618]">

<header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between border-b px-10 py-3 bg-[#47c1ea] shadow-md">
  <div class="flex items-center gap-4">
    <div class="size-4 text-white">
      <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M24 4C25.8 14.2 33.8 22.2 44 24C33.8 25.8 25.8 33.8 24 44C22.2 33.8 14.2 25.8 4 24C14.2 22.2 22.2 14.2 24 4Z"/>
      </svg>
    </div>
    <a href="<?php echo e(route('home')); ?>" class="text-lg font-bold tracking-tight text-white hover:text-[#bbf7ff] transition">Swa Buana</a>
  </div>
  <nav class="flex gap-8">
    <a href="<?php echo e(route('home')); ?>" class="text-sm font-medium transition <?php echo e(request()->routeIs('home') ? 'text-[#bbf7ff]' : 'text-white hover:text-[#bbf7ff]'); ?>">Home</a>
    <a href="<?php echo e(route('services')); ?>" class="text-sm font-medium transition <?php echo e(request()->routeIs('services') ? 'text-[#bbf7ff]' : 'text-white hover:text-[#bbf7ff]'); ?>">Services</a>
    <a href="<?php echo e(route('contact')); ?>" class="text-sm font-medium transition <?php echo e(request()->routeIs('contact') ? 'text-[#bbf7ff]' : 'text-white hover:text-[#bbf7ff]'); ?>">Contact</a>
  </nav>
  <div class="flex gap-2">
    <a href="<?php echo e(route('shipments.index')); ?>" class="h-10 px-4 rounded-xl bg-white text-[#47c1ea] text-sm font-bold tracking-wide flex items-center justify-center hover:bg-gray-100 transition">Send Now</a>
    <a href="<?php echo e(route('login')); ?>" class="h-10 px-4 rounded-xl bg-white text-[#47c1ea] text-sm font-bold tracking-wide flex items-center justify-center hover:bg-gray-100 transition">Login</a>
  </div>
</header>

<section class="flex items-center justify-center py-16 px-4 bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1588269842570-7c74bc08f0b4?fit=crop&w=1600&q=80');">
  <div class="text-center max-w-xl space-y-4">
    <h1 class="text-4xl font-black text-white tracking-tight">Get in Touch With Us</h1>
    <p class="text-white text-base">We’re here to assist you with any questions or shipping needs.</p>
    <div class="flex w-full max-w-md mx-auto rounded-xl overflow-hidden border border-white">
      <div class="flex items-center justify-center px-3 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
          <path d="M229.66 218.34l-50.07-50.06a88.11 88.11 0 1 0-11.31 11.31l50.06 50.07a8 8 0 0 0 11.32-11.32ZM40 112a72 72 0 1 1 72 72A72.08 72.08 0 0 1 40 112Z"/>
        </svg>
      </div>
      <input type="text" placeholder="Write your message here" class="flex-1 h-12 px-3 text-sm bg-transparent text-white placeholder-white focus:outline-none">
      <button class="h-12 px-4 bg-[#47c1ea] text-white font-bold text-sm tracking-wide hover:bg-[#3bb2d5] transition">Send</button>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="bg-gray-50 px-6 py-16">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-bold mb-4 text-[#47c1ea]">Contact Us</h2>
    <p class="text-[#637f88] max-w-3xl mx-auto text-sm">Contact us for more information on shipping services, co-operation, or other enquiries. We are here to help you.</p>
  </div>

  <div class="grid sm:grid-cols-2 gap-12 max-w-5xl mx-auto">
    <form class="space-y-6 bg-white p-8 rounded-xl border shadow-sm">
      <div>
        <label class="block text-xs font-bold mb-2 text-[#47c1ea]" for="name">Name</label>
        <input type="text" id="name" name="name" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]" required>
      </div>
      <div>
        <label class="block text-xs font-bold mb-2 text-[#47c1ea]" for="email">Email</label>
        <input type="email" id="email" name="email" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]" required>
      </div>
      <div>
        <label class="block text-xs font-bold mb-2 text-[#47c1ea]" for="message">Message</label>
        <textarea id="message" name="message" rows="4" class="w-full rounded-md border-gray-300 focus:ring-[#47c1ea] focus:border-[#47c1ea]" required></textarea>
      </div>
      <button type="submit" class="bg-[#47c1ea] text-white font-bold px-6 py-3 rounded-xl hover:bg-[#3bb2d5] transition w-full">Send Message</button>
    </form>

<div class="space-y-6 bg-white p-8 rounded-xl border shadow-sm">
  <h3 class="text-xl font-bold text-[#47c1ea] mb-4">Frequently Asked Questions</h3>
  <div class="space-y-4 text-sm text-gray-700">

    <div class="border-b pb-2">
      <button class="w-full flex justify-between items-center font-semibold toggle-faq focus:outline-none">
        <span>What services does Swa Buana offer?</span>
        <span class="faq-icon text-xl text-[#47c1ea]">+</span>
      </button>
      <div class="faq-content hidden mt-2">
        <p>We offer fast delivery, air-sea cargo, customs clearance (PPJK), and aircraft charter services.</p>
      </div>
    </div>

    <div class="border-b pb-2">
      <button class="w-full flex justify-between items-center font-semibold toggle-faq focus:outline-none">
        <span>What are your working hours?</span>
        <span class="faq-icon text-xl text-[#47c1ea]">+</span>
      </button>
      <div class="faq-content hidden mt-2">
        <p>We operate Monday to Saturday from 08:00 to 22:00.</p>
      </div>
    </div>

    <div class="border-b pb-2">
      <button class="w-full flex justify-between items-center font-semibold toggle-faq focus:outline-none">
        <span>How do I track my shipment?</span>
        <span class="faq-icon text-xl text-[#47c1ea]">+</span>
      </button>
      <div class="faq-content hidden mt-2">
        <p>After booking, you’ll receive a tracking number via email or WhatsApp. Use it on our website to check status.</p>
      </div>
    </div>

    <div class="border-b pb-2">
      <button class="w-full flex justify-between items-center font-semibold toggle-faq focus:outline-none">
        <span>How can I contact customer support?</span>
        <span class="faq-icon text-xl text-[#47c1ea]">+</span>
      </button>
      <div class="faq-content hidden mt-2">
        <p>You can call (022) 86060352 or send a message via WhatsApp at 0813-2197-0383.</p>
      </div>
    </div>

  </div>
</div>

<script>
  document.querySelectorAll('.toggle-faq').forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector('.faq-icon');
      const isHidden = content.classList.contains('hidden');
      content.classList.toggle('hidden');
      icon.textContent = isHidden ? '−' : '+';
    });
  });
</script>
  
  </div>
</section>

  <!-- Footer -->
  <footer class="bg-gradient-to-br from-[#47c1ea] to-[#3bb2d5] text-white pt-16">
    <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-10 px-6 pb-16">

      <!-- Tentang Kami -->
      <div>
        <h3 class="font-bold text-lg mb-3">Tentang Kami</h3>
        <p class="text-sm leading-relaxed">
          PT. Swa Buana Pratama adalah perusahaan logistik yang melayani ekspedisi cepat, cargo udara-laut, PPJK, dan charter pesawat sejak 2008.
        </p>
        <p class="mt-4 font-semibold text-sm">Jam Operasional:</p>
        <p class="text-sm">Senin - Sabtu, 08:00 - 22:00</p>
      </div>

      <!-- Tautan Cepat -->
      <div>
        <h3 class="font-bold text-lg mb-3">Tautan Cepat</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="<?php echo e(route('home')); ?>" class="hover:underline">Beranda</a></li>
          <li><a href="<?php echo e(route('about')); ?>" class="hover:underline">Tentang Kami</a></li>
          <li><a href="<?php echo e(route('services')); ?>" class="hover:underline">Layanan</a></li>
          <li><a href="<?php echo e(route('contact')); ?>" class="hover:underline">Kontak</a></li>
        </ul>
      </div>

      <!-- Kontak -->
      <div>
        <h3 class="font-bold text-lg mb-3">Kontak</h3>
        <p class="text-sm">Jl. Abdul Rahman Saleh No.1A, Cicendo, Bandung 40174</p>
        <p class="text-sm mt-2">Telp: (022) 86060352</p>
        <p class="text-sm">WA: 0813-2197-0383</p>
        <p class="text-sm">Email: sbpcargo@swabuana.co.id</p>
      </div>

      <!-- Kirim Pesan -->
      <div>
        <h3 class="font-bold text-lg mb-3">Kirim Pesan</h3>
        <form class="space-y-3">
          <input type="text" placeholder="Nama Anda" class="w-full px-3 py-2 rounded bg-white text-sm text-black" />
          <input type="email" placeholder="Email Anda" class="w-full px-3 py-2 rounded bg-white text-sm text-black" />
          <textarea rows="3" placeholder="Pesan Anda" class="w-full px-3 py-2 rounded bg-white text-sm text-black"></textarea>
          <button type="submit" class="w-full bg-white text-[#47c1ea] font-bold py-2 rounded hover:bg-blue-100 transition">Kirim</button>
        </form>
      </div>
    </div>

    <!-- Google Maps -->
    <div class="max-w-6xl mx-auto px-6 mb-12">
      <h3 class="font-bold text-center text-lg mb-4">Lokasi Kami</h3>
      <div class="overflow-hidden rounded-xl shadow-lg border border-white">
        <iframe class="w-full h-72" frameborder="0" style="border:0" loading="lazy" allowfullscreen
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63351.30953992406!2d107.54342184379637!3d-6.894070949623741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f246cda16f%3A0x67bd34f9a49a4f64!2sJl.%20Abdul%20Rahman%20Saleh%20No.1A%2C%20Husen%20Sastranegara%2C%20Kec.%20Cicendo%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040174!5e0!3m2!1sen!2sid!4v1625060252672!5m2!1sen!2sid">
        </iframe>
      </div>
    </div>

    <!-- Footer Bawah -->
    <div class="text-center text-xs py-4 text-white bg-[#289bc4]">
      &copy; 2025 PT. Swa Buana Pratama. Seluruh hak cipta dilindungi.
    </div>
  </footer>

  <!-- Contact Form Handler -->
  <script>
    document.querySelector('form').addEventListener('submit', async function(e) {
      e.preventDefault();
      const name = document.getElementById('name')?.value;
      const email = document.getElementById('email')?.value;
      const message = document.getElementById('message')?.value;

      try {
        const response = await fetch('/api/contact', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
          body: JSON.stringify({ name, email, message })
        });

        const result = await response.json();

        if (response.ok) {
          alert(result.message);
          e.target.reset();
        } else {
          let errorMessage = result.message || 'An error occurred.';
          if (result.errors) {
            for (const key in result.errors) {
              errorMessage += `\n- ${key}: ${result.errors[key].join(', ')}`;
            }
          }
          alert('Error: ' + errorMessage);
        }
      } catch (error) {
        console.error('Network error or unexpected error:', error);
        alert('Could not connect to the server. Please check your internet connection and try again.');
      }
    });
  </script>

</body>
</html>
<?php /**PATH G:\crud-filament\crud-filament\resources\views/contact.blade.php ENDPATH**/ ?>