<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Not Found | Conquer Services</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body { font-family: 'Plus Jakarta Sans', sans-serif; }
  @keyframes floatY {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-14px); }
  }
  .float-anim { animation: floatY 3.5s ease-in-out infinite; }
  .fade-up {
    opacity: 0;
    transform: translateY(24px);
    animation: fadeUp 0.7s ease forwards;
  }
  @keyframes fadeUp {
    to { opacity: 1; transform: translateY(0); }
  }
</style>
</head>
<body class="bg-[#0A0A0A] min-h-screen flex items-center justify-center px-4 overflow-hidden relative">

  <!-- background glow -->
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#F2CF4A]/10 rounded-full blur-3xl"></div>

  <div class="relative z-10 text-center max-w-lg mx-auto fade-up">

    <div class="float-anim mb-4">
      <span class="font-black text-[110px] sm:text-[150px] leading-none text-white tracking-tight">4<span class="text-[#F2CF4A]">0</span>4</span>
    </div>

    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-[#F2CF4A] flex items-center justify-center mx-auto mb-6 shadow-lg shadow-[#F2CF4A]/20">
      <i class="fa fa-shield-alt text-[#0A0A0A] text-2xl sm:text-3xl"></i>
    </div>

    <h1 class="font-black text-white text-xl sm:text-2xl capitalize mb-3">This Post Is Unguarded</h1>
    <p class="text-gray-400 text-sm sm:text-base mb-8 leading-relaxed">
      The page you're looking for has been moved, deleted, or never existed. Let's get you back to safety.
    </p>

    <div class="flex flex-wrap justify-center gap-3">
      <a href="/conquersecurity/" class="bg-[#F2CF4A] hover:bg-white text-[#0A0A0A] font-bold px-6 py-3 rounded-lg capitalize tracking-wide text-sm transition-colors flex items-center gap-2">
        <i class="fa fa-home text-xs"></i> Back To Home
      </a>
      <a href="/conquersecurity/contact" class="border-2 border-white/20 hover:border-[#F2CF4A] text-white font-bold px-6 py-3 rounded-lg capitalize tracking-wide text-sm transition-colors flex items-center gap-2">
        <i class="fa fa-phone text-xs"></i> Contact Us
      </a>
    </div>

  </div>

</body>
</html>