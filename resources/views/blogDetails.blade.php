@extends('layouts.master')
@section('content')
    @include('component.navbar')

    <section>
        <div class="py-10 lg:py-20 service-area px-3 lg:px-16 xl:px-0 pageHeader mt-[96px]"
            style="background-image: url('{{ asset('asset/img/blog_banner.jpg') }}');">
            <div class="container mx-auto">
                <div class="">
                    <h2 class="text-white text-2xl lg:text-4xl font-rlw font-bold text-center">{{ $blog->title }}
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-6 bg-white">
            <div class="container mx-auto">
                <div class=" w-4/5 mx-auto">
                    <div class=" flex justify-between items-center">
                        <div class=" flex items-center gap-4 mb-6">
                            <div class="">
                                <div class="blog_authar" style="background-image: url( asset($blog->image) );"></div>
                            </div>
                            <div class="">
                                <h2 class=" text-base font-rlw text-black font-semibold">{{ $blog->author }}</h2>
                                <p class=" text-sm font-rlw text-black font-semibold">
                                    {{ date('j M, Y', strtotime($blog->created_at)) }} </p>
                            </div>
                        </div>
                        <div class="">
                            <ul class=" flex items-center gap-3">
                                <li class="text-2xl text-blue-600"><iconify-icon icon="mdi:share"></iconify-icon></li>
                                <li>
                                    <a class=" text-2xl text-blue-600"
                                        href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="blank"
                                        title="facebook"><iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=" border-blue-600 border-t-2 py-6">
                        <div class="">
                            <img class=" w-full h-[300px]" src="{{ asset($blog->image) }}" alt="">
                        </div>
                        <div class="mb-10">
                            <p class=" text-black font-rlw text-base text-justify">{{ $blog->description }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class=" bg-white">
            <div class="container mx-auto">
                <div class=" w-4/5 mx-auto">
                    <div class="">
                        <form action="">
                            <textarea class=" w-full border  focus:outline-none p-6 resize-none" name="" id="" cols="10"
                                rows="6" placeholder="Your Comment"></textarea>
                            <div class="mt-4">
                                <button class=" text-white bg-Nblue px-4 py-2 font-rlw rounded-sm  hover:bg-apink">Post A
                                    Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-white mt-6">
            <div class="container mx-auto">
                <div class="w-4/5 mx-auto">
                    <div class="bg-white shadow-smallS p-6 rounded mb-8">
                        <div class="mb-2 flex gap-5 items-center">
                            <div class="comment_user" style="background-image: url('./img/team01.jpg');"></div>
                            <div class="">
                                <h2 class=" text-base text-Nblue font-rlw font-medium">Arnab Mojumder</h2>
                                <p class=" text-sm font-rlw text-slate-400">Date: <span>3 jun 2023</span></p>
                            </div>
                        </div>
                        <p class=" text-black  font-rlw">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Pariatur, itaque porro ea ipsam earum fugiat optio expedita laudantium. Voluptate quaerat
                            blanditiis et ipsa provident soluta, doloremque corporis similique odio commodi.</p>
                        <div class=" flex items-center gap-6 mt-6 justify-end">
                            <div class=" flex items-center gap-3 ">
                                <button class=" text-lg text-Nblue mt-1"><iconify-icon
                                        icon="mdi:like"></iconify-icon></button>
                                <p class="text-base font-rlw text-slate-400">2.3k</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-smallS p-6 rounded mb-8">
                        <div class="mb-2 flex gap-5 items-center">
                            <div class="comment_user" style="background-image: url('./img/team01.jpg');"></div>
                            <div class="">
                                <h2 class=" text-base text-Nblue font-rlw font-medium">Arnab Mojumder</h2>
                                <p class=" text-sm font-rlw text-slate-400">Date: <span>3 jun 2023</span></p>
                            </div>
                        </div>
                        <p class=" text-black  font-rlw">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Pariatur, itaque porro ea
                            ipsam earum fugiat optio expedita laudantium. Voluptate quaerat blanditiis et ipsa provident
                            soluta, doloremque
                            corporis similique odio commodi.</p>
                        <div class=" flex items-center gap-6 mt-6 justify-end">
                            <div class=" flex items-center gap-3 ">
                                <button class=" text-lg text-Nblue mt-1"><iconify-icon
                                        icon="mdi:like"></iconify-icon></button>
                                <p class="text-base font-rlw text-slate-400">2.3k</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
