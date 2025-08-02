<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Registrasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Registrasi Akun</h2>
    <form id="registerForm" class="space-y-4">
      <input type="text" id="nama" placeholder="Nama Lengkap"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required />

      <input type="email" id="email" placeholder="Email"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required />

      <input type="password" id="password" placeholder="Password"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required />

      <input type="password" id="confirmPassword" placeholder="Konfirmasi Password"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required />

      <div id="errorMsg" class="text-red-600 text-sm"></div>

      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
        Daftar
      </button>
    </form>
  </div>

  <script>
    document.getElementById("registerForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirmPassword").value;
      const errorMsg = document.getElementById("errorMsg");

      if (password !== confirmPassword) {
        errorMsg.textContent = "Password tidak cocok!";
        return;
      }

      errorMsg.textContent = "";
      alert("Registrasi berhasil!");
      // Tambahkan penyimpanan data atau redirect di sini jika perlu
    });
  </script>

</body>
</html><?php /**PATH D:\Jejak Tugas\crud-filament\resources\views/registrasi.blade.php ENDPATH**/ ?>