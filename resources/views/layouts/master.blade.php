<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />

</head>


<body>
    @yield('content')









    <footer>
        <div class="bg-black py-10 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">
                    <div class="">
                        <div class="flex justify-center lg:justify-start"> <a href="#"> <img class="lg:w-40 w-32"
                                    src="{{ asset('asset/img/NEW-LOGO-white.png') }}" alt="" /> </a> </div>
                        <div class="">
                            <h2 class="text-white font-rlw lg:font-medium font-light text-center lg:text-justify mt-3">
                                "Connecting Futures with NEXWIFT: Where Innovation Takes Flight" </h2>
                        </div>
                        <div class="">
                            <ul class="flex gap-3 justify-center lg:justify-start items-center  mt-3">
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                    </a> </li>
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                    </a> </li>
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                    </a> </li>
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="mdi:twitter"></iconify-icon>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-white lg:text-xl text-base font-rlw text-center lg:text-start font-bold">
                            Contact Info</h2>
                        <div class="mt-3 lg:mt-10 footer_item">
                            <div class="mt-2 flex items-center gap-2">
                                <div class="">
                                    <p class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        <iconify-icon icon="material-symbols:call"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs">+880 1794
                                        070778</h2>
                                </div>
                            </div>
                            <div class="mt-2 flex items-center gap-2">
                                <div class="">
                                    <p class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        <iconify-icon icon="material-symbols:mail"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        info@nexwift.com </h2>
                                </div>
                            </div>
                            <div class="mt-2 flex gap-2">
                                <div class="">
                                    <p class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        <iconify-icon icon="bx:map"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        4C-Mishal Palace 30/04, KDA Outer Bypass Road,Sonadanga-9000 </h2>
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs"> Khulna,
                                        Bangladesh </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-white lg:text-xl text-base font-rlw text-center lg:text-start font-bold">
                            Services</h2>
                        <div class="mt-3 lg:mt-10 footer_item">
                            <ul>
                                <li class="text-center lg:text-left"> <a
                                        class="text-white hover:text-apink font-rlw lg:text-base text-xs"
                                        href="#">Web Design</a> </li>
                                <li class="text-center lg:text-left"> <a
                                        class="text-white hover:text-apink font-rlw lg:text-base text-xs"
                                        href="#">Graphic Design</a> </li>
                                <li class="text-center lg:text-left"> <a
                                        class="text-white hover:text-apink font-rlw lg:text-base text-xs"
                                        href="#">Digital Marketing</a> </li>
                                <li class="text-center lg:text-left"> <a
                                        class="text-white hover:text-apink font-rlw lg:text-base text-xs"
                                        href="#">Software Development</a> </li>
                                <li class="text-center lg:text-left"> <a
                                        class="text-white hover:text-apink font-rlw lg:text-base text-xs"
                                        href="#">Video And Animation</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-white lg:text-xl text-base font-rlw text-center lg:text-start font-bold"> Gets
                            Updates </h2>
                        <div class="mt-3 lg:mt-12 footer_item ">
                            <form action="">
                                <div class=" border border-white">
                                    <input
                                        class="w-full px-2 py-2 bg-transparent focus:outline-none text-rlw placeholder:text-white text-white"
                                        type="text" placeholder="Enter Your Email" />
                                </div>
                                <div class="bg-white flex justify-center mt-2 hover:bg-apink"> <button
                                        class="py-1 font-rlw text-lg font-medium text-Nblue hover:text-white"> Subscribe
                                    </button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-Nblue py-2 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div class="">
                        <p class="text-white font-rlw lg:text-sm text-xs"> All Copyright preserve by Nexwift </p>
                    </div>
                    <div class=""> <a class="text-white font-rlw lg:text-sm text-xs hover:text-apink"
                            href="#">Privacy And Policy</a> </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <script src="{{ asset('asset/jquery.min.js') }}"></script>
    <script src="{{ asset(asset('asset/coustom.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>

</html>
