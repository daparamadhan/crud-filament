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
    <div class="flex w-full max-w-md mx-auto rounded-xl overflow-hidden">
      <a href="/services" role="button" class="w-full h-12 px-4 flex items-center justify-center bg-[#47c1ea] text-white font-bold text-sm tracking-wide hover:bg-[#3bb2d5] transition rounded-xl">
        Explore Services
      </a>
    </div>
  </div>
</section>

<!-- Our Services -->
<section class="bg-gray-50 px-10 py-16">
  <div class="max-w-5xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-bold mb-4">Our Services</h2>
    <p class="text-[#637f88] max-w-xl mx-auto text-sm">
      From domestic deliveries to worldwide shipping, we ensure your packages reach their destinations swiftly and safely.
    </p>
  </div>

  <div class="grid sm:grid-cols-3 gap-8 max-w-5xl mx-auto">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="p-6 bg-white rounded-xl border transition-all duration-300 hover:border-[#47c1ea] hover:shadow-md space-y-4 flex flex-col items-center text-center">
      
      
      <div class="w-20 h-20 md:w-28 md:h-28">
        <?php if($service->image_path): ?>
          <img src="<?php echo e(asset('storage/' . $service->image_path)); ?>" alt="<?php echo e($service->nama_service); ?>" class="w-full h-full object-contain mx-auto">
        <?php elseif(str_contains($service->nama_service, 'Standard')): ?>
          <img src="/icons/truck.svg" alt="Standard Shipping" class="w-full h-full object-contain mx-auto">
        <?php elseif(str_contains($service->nama_service, 'International')): ?>
          <img src="/icons/world.svg" alt="International Shipping" class="w-full h-full object-contain mx-auto">
        <?php else: ?>
          <img src="/icons/flash.svg" alt="Express Delivery" class="w-full h-full object-contain mx-auto">
        <?php endif; ?>
      </div>

      
      <h4 class="font-bold text-[#47c1ea] text-lg"><?php echo e($service->nama_service); ?></h4>
      <p class="text-sm text-[#637f88]"><?php echo e($service->deskripsi); ?></p>
      <span class="text-sm font-semibold text-gray-600">
        Rp<?php echo e(number_format($service->harga, 0, ',', '.')); ?>

      </span>
      <a href="#" class="mt-auto inline-block text-sm font-semibold text-[#47c1ea] hover:underline">
        Learn More
      </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</section>

<!-- CTA -->
<section class="py-12 px-10 max-w-3xl mx-auto text-center">
  <h3 class="text-xl font-bold mb-4">Ready to ship with us?</h3>
  <p class="text-sm text-[#637f88] mb-6">Experience hassle-free delivery and real-time tracking for all your shipments.</p>
  <a href="/shipment" class="inline-block bg-[#47c1ea] text-white font-bold px-6 py-3 rounded-xl hover:bg-[#3bb2d5] transition">
    Get Started
  </a>
</section>

<!-- Footer -->
<footer class="bg-gray-50 mt-12 border-t">
  <div class="max-w-4xl mx-auto px-10 py-8 text-center space-y-4">
    <div class="flex justify-center gap-6 flex-wrap text-sm">
      <a href="#" class="hover:text-[#47c1ea] transition">About</a>
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
<?php /**PATH G:\crud-filament\crud-filament\resources\views/services.blade.php ENDPATH**/ ?>