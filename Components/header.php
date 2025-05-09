
<header class="bg-[#F51315]  w-[95%] mx-auto mt-3 rounded-md shadow-md">
    <div class="flex fixed justify-between items-center px-4 py-3 md:py-4 md:px-6 relative">

        <!-- Logo (Left) -->
        <div class="flex-shrink-0">
            <h1 class="text-2xl font-bold text-gray-800">Urban Basket</h1>
        </div>

        <!-- Centered Nav Links (Desktop) -->
        <nav class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6">
            <a href="../index.php"
               class="font-bold text-[20px] text-black bg-[#FEC1C5] rounded-md px-4 py-2 hover:bg-blue-700 transition">
                Home
            </a>
            <a href="../index.php"
               class="font-bold text-[20px] text-black bg-[#FEC1C5] rounded-md px-4 py-2 hover:bg-blue-700 transition">
                Market
            </a>
            <a href="../index.php"
               class="font-bold text-[20px] text-black bg-[#FEC1C5] rounded-md px-4 py-2 hover:bg-blue-700 transition">
                Contact
            </a>
        </nav>

        <!-- Auth Links (Right) -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="../index.php" class="text-black font-bold text-[20px] font-medium hover:underline">Register</a>
            <a href="../index.php" class="text-black font-bold text-[20px] font-medium hover:underline">Login</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Links -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="../index.php"
           class="block font-semibold text-white bg-blue-600 rounded-md px-4 py-2 hover:bg-blue-700 transition">
            Home
        </a>
        <a href="../index.php"
           class="block font-semibold text-white bg-blue-600 rounded-md px-4 py-2 hover:bg-blue-700 transition">
            Basket
        </a>
        <a href="../index.php"
           class="block font-semibold text-white bg-blue-600 rounded-md px-4 py-2 hover:bg-blue-700 transition">
            Contact
        </a>
        <a href="../index.php" class="block text-blue-600 font-medium mt-2 hover:underline">Login</a>
        <a href="../index.php" class="block text-blue-600 font-medium hover:underline">Register</a>
    </div>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
