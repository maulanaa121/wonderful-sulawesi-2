<nav class="fixed top-0 left-0 w-full bg-[#12355B] border-b-2 border-cyan-400 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="h-[135px] flex items-center justify-between">

            {{-- Logo --}}
            <a href="/" class="flex items-center">
                <img
                    src="{{ asset('assets/images/logo-wonderfull-indonesia.png') }}"
                    alt="Wonderful Indonesia"
                    class="w-[200px] h-auto"
                >
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center gap-8">

                {{-- Destinasi --}}
                <div class="relative group">
                    <button
                        class="flex items-center gap-2 text-white font-poppins text-[20px] font-medium hover:text-cyan-300 transition"
                    >
                        Destinasi
                        <i data-lucide="chevron-down" class="w-5 h-5"></i>
                    </button>

                    {{-- Dropdown --}}
                    <div
                        class="absolute left-0 top-full mt-3 w-48 bg-white rounded-lg shadow-lg
                               opacity-0 invisible group-hover:opacity-100 group-hover:visible
                               transition-all duration-200 z-50"
                    >
                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100 rounded-t-lg"
                        >
                            Alam
                        </a>

                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100"
                        >
                            Pantai
                        </a>

                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100 rounded-b-lg"
                        >
                            Pegunungan
                        </a>
                    </div>
                </div>


                {{-- Kuliner --}}
                <div class="relative group">
                    <button
                        class="flex items-center gap-2 text-white font-poppins text-[20px] font-medium hover:text-cyan-300 transition"
                    >
                        Kuliner
                        <i data-lucide="chevron-down" class="w-5 h-5"></i>
                    </button>

                    <div
                        class="absolute left-0 top-full mt-3 w-48 bg-white rounded-lg shadow-lg
                               opacity-0 invisible group-hover:opacity-100 group-hover:visible
                               transition-all duration-200 z-50"
                    >
                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100 rounded-t-lg"
                        >
                            Makanan
                        </a>

                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100"
                        >
                            Minuman
                        </a>

                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100 rounded-b-lg"
                        >
                            Oleh-oleh
                        </a>
                    </div>
                </div>


                {{-- Budaya --}}
                <div class="relative group">
                    <button
                        class="flex items-center gap-2 text-white font-poppins text-[20px] font-medium hover:text-cyan-300 transition"
                    >
                        Budaya
                        <i data-lucide="chevron-down" class="w-5 h-5"></i>
                    </button>

                    <div
                        class="absolute left-0 top-full mt-3 w-48 bg-white rounded-lg shadow-lg
                               opacity-0 invisible group-hover:opacity-100 group-hover:visible
                               transition-all duration-200 z-50"
                    >
                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100 rounded-t-lg"
                        >
                            Tradisi
                        </a>

                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100"
                        >
                            Seni
                        </a>

                        <a
                            href="#"
                            class="block px-5 py-3 text-gray-700 font-poppins hover:bg-gray-100 rounded-b-lg"
                        >
                            Sejarah
                        </a>
                    </div>
                </div>


                {{-- Acara --}}
                <a
                    href="#"
                    class="text-white font-poppins text-[20px] font-medium hover:text-cyan-300 transition"
                >
                    Acara
                </a>

            </div>


            {{-- Mobile Button --}}
            <button
                id="mobile-menu-button"
                class="md:hidden text-white"
            >
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>

        </div>


        {{-- Mobile Menu --}}
        <div
            id="mobile-menu"
            class="hidden md:hidden pb-6"
        >
            <div class="flex flex-col gap-2">

                <a
                    href="#"
                    class="text-white font-poppins px-4 py-3 rounded-lg hover:bg-white/10"
                >
                    Destinasi
                </a>

                <a
                    href="#"
                    class="text-white font-poppins px-4 py-3 rounded-lg hover:bg-white/10"
                >
                    Kuliner
                </a>

                <a
                    href="#"
                    class="text-white font-poppins px-4 py-3 rounded-lg hover:bg-white/10"
                >
                    Budaya
                </a>

                <a
                    href="#"
                    class="text-white font-poppins px-4 py-3 rounded-lg hover:bg-white/10"
                >
                    Acara
                </a>

            </div>
        </div>

    </div>
</nav>


<script>
    lucide.createIcons();

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>