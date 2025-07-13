<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Swa Buana - Contact</title>
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
    <a href="{{ route('home') }}" class="text-lg font-bold tracking-tight hover:text-[#47c1ea] transition">Swa Buana</a>
  </div>
  <nav class="flex gap-8">
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="{{ route('about') }}">About</a>
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="{{ route('services') }}">Services</a>
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="{{ route('contact') }}">Contact</a>
  </nav>
  <div class="flex gap-2">
    <a href="{{ route('shipments.index') }}"
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Send Now
    </a>

    <a href="{{ route('login') }}"
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Login
    </a>
  </div>
</header>

<section class="flex items-center justify-center py-16 px-4 bg-cover bg-center"
  style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1588269842570-7c74bc08f0b4?fit=crop&w=1600&q=80');">
  <div class="text-center max-w-xl space-y-4">
    <h1 class="text-4xl font-black text-white tracking-tight">Your Trusted Shipping Partner</h1>
    <p class="text-white text-base">Secure delivery from Bandung to anywhere in the world.</p>
  </div>
</section>

<section class="bg-gray-50 px-6 py-16">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
    <p class="text-[#637f88] max-w-3xl mx-auto text-sm">
      Contact us for more information on shipping services, co-operation, or other enquiries. We are here to help you.</p>
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
      <button type="submit" class="bg-[#47c1ea] text-white font-bold px-6 py-3 rounded-xl hover:bg-[#3bb2d5] transition w-full">
        Send Message
      </button>
    </form>

    <section class="bg-white px-6 py-12">
  <div class="max-w-2xl mx-auto text-sm text-[#637f88]">
    <h5 class="font-bold text-[#47c1ea] text-lg mb-6 text-center">Frequently Asked Questions. (FAQ)</h5>

    <div class="space-y-4">
      <div class="border rounded-lg overflow-hidden">
        <button onclick="toggleFAQ(0)" class="w-full px-4 py-3 bg-gray-50 hover:bg-gray-100 flex justify-between items-center text-left">
          <span class="font-semibold text-[#1e293b]">How can I track my parcel?</span>
          <span class="faq-icon transform transition-transform duration-200">▼</span>
        </button>
        <div class="faq-answer hidden px-4 py-3 bg-white border-t text-[#637f88]">
          You can use the create feature <span class="font-medium text-[#47c1ea]">“Track Packages”</span> on our website homepage. Enter your tracking number to view the shipping status in real-time.</div>
      </div>

      <div class="border rounded-lg overflow-hidden">
        <button onclick="toggleFAQ(1)" class="w-full px-4 py-3 bg-gray-50 hover:bg-gray-100 flex justify-between items-center text-left">
          <span class="font-semibold text-[#1e293b]">Does Swa Buana serve deliveries outside the city or outside the island?</span>
          <span class="faq-icon transform transition-transform duration-200">▼</span>
        </button>
        <div class="faq-answer hidden px-4 py-3 bg-white border-t text-[#637f88]">
          Yes, we serve delivery of goods to all regions of Indonesia, including outside islands and remote areas, with estimated times adjusted based on the route and service selected. </div>
      </div>

      <div class="border rounded-lg overflow-hidden">
        <button onclick="toggleFAQ(2)" class="w-full px-4 py-3 bg-gray-50 hover:bg-gray-100 flex justify-between items-center text-left">
          <span class="font-semibold text-[#1e293b]">What types of delivery services are available?</span>
          <span class="faq-icon transform transition-transform duration-200">▼</span>
        </button>
        <div class="faq-answer hidden px-4 py-3 bg-white border-t text-[#637f88]">
          We provide various types of services such as <span class="font-medium">Regular, Express, and Heavy Cargo</span>. Each service has different estimated times and rates.
        </div>
      </div>

      <div class="border rounded-lg overflow-hidden">
        <button onclick="toggleFAQ(3)" class="w-full px-4 py-3 bg-gray-50 hover:bg-gray-100 flex justify-between items-center text-left">
          <span class="font-semibold text-[#1e293b]">What if my package is lost or damaged in shipping?</span>
          <span class="faq-icon transform transition-transform duration-200">▼</span>
        </button>
        <div class="faq-answer hidden px-4 py-3 bg-white border-t text-[#637f88]">
          Please contact our customer service team via WhatsApp at 0813-2197-0383 or email <a href="mailto:sbpcargo@swabuana.co.id" class="text-[#47c1ea] underline">sbpcargo@swabuana.co.id</a> for further claims and handling processes.
        </div>
      </div>

      <div class="border rounded-lg overflow-hidden">
        <button onclick="toggleFAQ(4)" class="w-full px-4 py-3 bg-gray-50 hover:bg-gray-100 flex justify-between items-center text-left">
          <span class="font-semibold text-[#1e293b]">Where is Swa Buana's head office located?</span>
          <span class="faq-icon transform transition-transform duration-200">▼</span>
        </button>
        <div class="faq-answer hidden px-4 py-3 bg-white border-t text-[#637f88]">
          Our head office is located at Jl. Abdul Rahman Saleh No.1A, Husen Sastranegara, Cicendo, Bandung 40174.
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function toggleFAQ(index) {
    const answers = document.querySelectorAll('.faq-answer');
    const icons = document.querySelectorAll('.faq-icon');

    answers.forEach((el, i) => {
      if (i === index) {
        const isHidden = el.classList.contains('hidden');
        el.classList.toggle('hidden', !isHidden);
        icons[i].classList.toggle('rotate-180', isHidden);
      } else {
        el.classList.add('hidden');
        icons[i].classList.remove('rotate-180');
      }
    });
  }
</script>

<footer class="bg-gray-50 mt-12 border-t">
  <div class="max-w-4xl mx-auto px-10 py-8 text-center space-y-4">
    <div class="flex justify-center gap-6 flex-wrap text-sm">
      <a href="{{ route('about') }}" class="hover:text-[#47c1ea] transition">About</a>
      <a href="{{ route('services') }}" class="hover:text-[#47c1ea] transition">Services</a>
      <a href="{{ route('contact') }}" class="hover:text-[#47c1ea] transition">Contact</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Privacy Policy</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Terms of Service</a>
    </div>
    <p class="text-xs text-[#637f88]">&copy; 2025 Swa Buana. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
<script>
  document.querySelector('form').addEventListener('submit', async function(e) {
    e.preventDefault(); // Mencegah pengiriman formulir standar

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    try {
      const response = await fetch('/api/contact', { // URL API Anda
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
          },
        body: JSON.stringify({ name, email, message }) // Kirim data sebagai JSON
        });

        const result = await response.json(); // Parse respons sebagai JSON

        if (response.ok) { // Jika status HTTP 2xx (sukses)
          alert(result.message);
          e.target.reset(); // Reset formulir
        } else { // Jika status HTTP bukan 2xx (error dari server)
        let errorMessage = 'An error occurred. Please try again later.';
          if (result.message) {
            errorMessage = result.message;
          }
          if (result.errors) { // Menampilkan error validasi jika ada
            for (const key in result.errors) {
              if (result.errors.hasOwnProperty(key)) {
                errorMessage += `\n- ${key}: ${result.errors[key].join(', ')}`;
                }
              }
            }
            alert('Error: ' + errorMessage);
          }
      } catch (error) { // Menangkap error jaringan atau error tak terduga
        console.error('Network error or unexpected error:', error);
        alert('Could not connect to the server. Please check your internet connection and try again.');
      }
  });
</script>