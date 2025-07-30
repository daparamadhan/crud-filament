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

<header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between border-b px-10 py-3 bg-white shadow-md">
  <div class="flex items-center gap-4">
    <div class="size-4 text-[#47c1ea]">
      <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M24 4C25.8 14.2 33.8 22.2 44 24C33.8 25.8 25.8 33.8 24 44C22.2 33.8 14.2 25.8 4 24C14.2 22.2 22.2 14.2 24 4Z"/>
      </svg>
    </div>
    <a href="<?php echo e(route('home')); ?>" class="text-lg font-bold tracking-tight hover:text-[#47c1ea] transition">Swa Buana</a>
  </div>
  <nav class="flex gap-8">
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="<?php echo e(route('about')); ?>">About</a>
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="<?php echo e(route('services')); ?>">Services</a>
    <a class="text-sm font-medium hover:text-[#47c1ea]" href="<?php echo e(route('contact')); ?>">Contact</a>
  </nav>
  <div class="flex gap-2">
    <a href="<?php echo e(route('shipments.index')); ?>"
       class="h-10 px-4 rounded-xl bg-[#47c1ea] text-white text-sm font-bold tracking-wide flex items-center justify-center hover:bg-[#3bb2d5] transition">
      Send Now
    </a>

    <a href="<?php echo e(route('login')); ?>"
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

<section class="px-10 py-12 max-w-4xl mx-auto">
  <div class="p-6 bg-white border rounded-xl shadow-md">
    <h2 class="text-3xl font-bold text-[#47c1ea] mb-4">Swa Buana Delivery Service</h2>
    <p class="text-gray-700 mb-6">
      At Swa Buana, we ensure your goods are delivered safely, affordably, and with a personal touch. Experience delivery that’s fast, secure, and supported by our dedicated team.
    </p>
    <a href="#delivery-process" class="inline-block bg-[#47c1ea] hover:bg-[#3ba8cd] text-white font-semibold px-5 py-2 rounded-lg transition">
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
    
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="p-6 bg-white border rounded-xl shadow-sm hover:border-[#47c1ea] transition">
      <h4 class="text-lg font-semibold text-[#47c1ea] mb-1"><?php echo e($service->nama_service); ?></h4>
      <p class="text-sm text-gray-600"><?php echo e($service->deskripsi); ?></p>
      
      
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <div class="mt-8">
    <a href="<?php echo e(route('services')); ?>" class="inline-flex items-center gap-2 bg-[#47c1ea] hover:bg-[#3ba8cd] text-white font-semibold px-5 py-2 rounded-lg transition">
      Learn More →
    </a>
  </div>
</section>

<section class="px-4 py-12 max-w-6xl mx-auto">
  <h2 class="text-3xl font-bold text-[#47c1ea] mb-6">Our Promos</h2>
  <div class="flex gap-6 overflow-x-auto pb-4 scroll-smooth snap-x">
    <?php $__currentLoopData = $promos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex-none w-96 bg-[#e8f8ff] border border-blue-200 rounded-xl shadow-sm overflow-hidden snap-startactive:scale-95 active:shadow-inner transition duration-200 ease-in-out">
        <img src="<?php echo e(asset('storage/' . $promo->image_path)); ?>" 
        alt="<?php echo e($promo->title); ?>"
        class="w-full h-36 object-cover transition duration-200 ease-in-out active:brightness-90">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-[#47c1ea] mb-2"><?php echo e($promo->title); ?></h3>
            <p class="text-sm text-gray-700">
              <?php echo e($promo->description); ?>

            </p>
          <p class="text-xs text-gray-500 mt-2">*Terms apply</p>
          <p class="text-xs text-[#6a9db2] mt-1"><?php echo e($promo->hashtags); ?></p>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</section>

<footer class="bg-gray-50 mt-12 border-t">
  <div class="max-w-4xl mx-auto px-10 py-8 text-center space-y-4">
    <div class="flex justify-center gap-6 flex-wrap text-sm">
      <a href="<?php echo e(route('about')); ?>" class="hover:text-[#47c1ea] transition">About</a>
      <a href="<?php echo e(route('services')); ?>" class="hover:text-[#47c1ea] transition">Services</a>
      <a href="<?php echo e(route('contact')); ?>" class="hover:text-[#47c1ea] transition">Contact</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Privacy Policy</a>
      <a href="#" class="hover:text-[#47c1ea] transition">Terms of Service</a>
    </div>
    <p class="text-xs text-[#637f88]">&copy; 2025 Swa Buana. All rights reserved.</p>
    
  </div>
</footer>

</body>
</html><?php /**PATH G:\crud-filament\crud-filament\resources\views/welcome.blade.php ENDPATH**/ ?>