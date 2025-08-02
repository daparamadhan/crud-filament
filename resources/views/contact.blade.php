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

<header class="fixed top-0 left-0 right-0 z-50 bg-[#47c1ea] border-b shadow-md">
  <div class="flex items-center justify-between px-10 py-3 max-w-screen-xl mx-auto">
    <div class="flex items-center gap-4">
      <div class="size-4 text-white">
        <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 4C25.8 14.2 33.8 22.2 44 24C33.8 25.8 25.8 33.8 24 44C22.2 33.8 14.2 25.8 4 24C14.2 22.2 22.2 14.2 24 4Z"/>
        </svg>
      </div>
      <a href="{{ route('home') }}" class="text-lg font-bold tracking-tight text-white hover:text-[#bbf7ff] transition">Swa Buana</a>
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
    <h1 class="text-4xl font-black text-white tracking-tight">Get in Touch with Swa Buana</h1>
    <p class="text-white text-base">We're here to help with all your shipping inquiries. Reach out to us!</p>
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

<footer class="bg-gradient-to-br from-[#47c1ea] to-[#3bb2d5] text-white pt-16">
  <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-10 px-6 pb-16">

    <div>
      <h3 class="font-bold text-lg mb-3">About Us</h3>
      <p class="text-sm leading-relaxed">
        PT. Swa Buana Pratama is a logistics company providing fast expedition, air-sea cargo, customs clearance (PPJK), and aircraft charter services since 2008.
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
        <input type="text" placeholder="Your Name" class="w-full px-3 py-2 rounded bg-white text-sm text-black" />
        <input type="email" placeholder="Your Email" class="w-full px-3 py-2 rounded bg-white text-sm text-black" />
        <textarea rows="3" placeholder="Your Message" class="w-full px-3 py-2 rounded bg-white text-sm text-black"></textarea>
        <button type="submit" class="w-full bg-white text-[#47c1ea] font-bold py-2 rounded hover:bg-blue-100 transition">Send</button>
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
