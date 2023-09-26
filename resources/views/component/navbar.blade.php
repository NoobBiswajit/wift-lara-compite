    <nav class="px-3 lg:px-0 bg-black nav-total-area">
        <div class="py-4">
            <div class="container mx-auto">
                <div class="md:grid grid-cols-12 gap-10 items-center justify-between">
                    <div class="col-span-3">
                        <div class=" flex justify-between items-center">
                            <a href="#">
                                <img class="h-16" src="{{ asset('asset/img/NEW-LOGO-white.png') }}" alt="" />
                            </a>
                            <button class="text-white text-3xl  " id="flip">
                                <iconify-icon icon="ic:round-menu"></iconify-icon>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-9">
                        <div class="md:grid grid-cols-12 justify-between items-center gap-5 main" id="dropdwon">
                            <div class="col-span-10 ">
                                <ul class="md:flex justify-between items-center ">
                                    <li> <a id="home-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('home') }}">Home</a> </li>
                                    <li> <a id="about-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('about') }}">About</a> </li>
                                    <li> <a id="services-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('services') }}">Services</a> </li>
                                    <li> <a id="blog-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('blog') }}">Blog</a> </li>
                                    <li> <a id="portfolio-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('portfolio') }}">Protfolio</a> </li>
                                    <li> <a id="career-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('career') }}">Career</a> </li>
                                    <li> <a id="contact-link"
                                            class="text-base font-rlw text-white font-semibold hover:text-Nblue"
                                            href="{{ url('contactus') }}">Contact</a> </li>
                                </ul>
                            </div>
                            <div class="col-span-2">
                                <div class="flex md:justify-end justify-center md:mt-0 mt-5">
                                    @if (Auth::check())
                                        <div class="user_avater">
                                            <div class="">
                                                <img src="{{ asset('asset/img/useravatar.png') }}" alt="avatar">
                                            </div>
                                            <div class="avatar-drop  rounded-md  w-full">
                                                <ul class="">


                                                    @php
                                                        $user = DB::table('users')
                                                            ->where('users.id', Auth::user()->id)
                                                            ->join('role_user', 'users.id', '=', 'role_user.user_id')
                                                            ->join('roles', 'role_user.role_id', '=', 'roles.id')
                                                        
                                                            ->select('roles.*')
                                                            ->first();
                                                        
                                                    @endphp

                                                    @if ($user->name == 'admin')
                                                        <li class=" hover:bg-blue-500  bg-white "><a
                                                                class="block  text-black  text-center font-medium"
                                                                href="{{ route('users.index') }}">Dashoard</a>
                                                        </li>
                                                    @endif

                                                    <li class=" hover:bg-blue-500  bg-white "><a
                                                            class="block  text-black  text-center font-medium"
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    @else
                                        <a class="font-rlw text-black font-base py-1 px-3 rounded-md font-semibold bg-white"
                                            href="{{ url('/register') }}">Sign Up
                                        </a>
                                    @endif

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
