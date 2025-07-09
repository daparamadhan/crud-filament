<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - Swa Buana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out both;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-gray-100 to-white min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-[#0077b6] shadow w-full fixed top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2 text-white">
                <span class="text-xl font-bold tracking-wide">Swa Buana</span>
            </a>
        </div>
    </nav>

    <div class="h-24"></div>

    <!-- Login Form -->
    <div class="max-w-md w-full mx-auto bg-white/80 backdrop-blur-lg shadow-xl rounded-3xl p-8 animate-fade-in-up mt-10">
        <h2 class="text-3xl font-extrabold text-center mb-6 text-[#0077b6] tracking-wider">Login</h2>

        <?php if(session()->has('error')): ?>
            <div class="mb-4 text-red-600 text-center font-semibold">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="mb-4 text-red-600 text-center font-semibold">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login.dologin')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>
            <div>
                <label for="email" class="block mb-1 text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"
                       required autofocus
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0077b6]
                              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label for="password" class="block mb-1 text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password"
                       required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0077b6]
                              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit"
                    class="w-full bg-[#0077b6] text-white py-2 rounded-lg hover:bg-[#005f8f] hover:scale-105
                           transition transform flex items-center justify-center space-x-2">
                Login
            </button>
        </form>

        <p class="text-sm text-center mt-4 text-gray-600">
            Belum punya akun?
            <a href="/registrasi" class="text-[#0077b6] hover:underline font-semibold">Daftar di sini</a>
        </p>
    </div>

    <div class="flex-grow"></div>

    <!-- Footer -->
    <footer class="bg-[#0077b6] py-6 mt-12">
        <div class="container mx-auto text-center text-white text-sm tracking-wider">
            &copy; 2025 Swa Buana. All rights reserved.
        </div>
    </footer>

</body>
</html>
<?php /**PATH D:\Jejak Tugas\crud-filament\resources\views/auth/login.blade.php ENDPATH**/ ?>