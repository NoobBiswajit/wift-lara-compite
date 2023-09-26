<section>
    <div class=" py-10 bg-white px-3 lg:px-12 xl:px-0">
        <div class="container mx-auto">
            <div class="chalenges_text">
                <h2 class="text-Nblue font-rlw text-xl lg:text-3xl font-semibold">Do You Know ?</h2>
                <div class="chalenges_text_line"></div>
                <div class="chalenges_text_line_small"></div>
            </div>
            <div class="mt-6 lg:mt-10">
                <div class="swiper blogSwiper pb-10">
                    <div class="swiper-wrapper">

                        @foreach ($blogs as $blog)
                            {{-- {{ $blog->author }} --}}
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class="">
                                        <img class=" w-full h-[250px]" src="{{ asset($blog->image) }}" alt="">
                                    </div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2
                                                            class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">
                                                            {{ $blog->author }}
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2
                                                            class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">
                                                            {{ date('j M, Y', strtotime($blog->created_at)) }}
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">
                                                        2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">
                                            {{ $blog->title }}</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">
                                            {{ Str::limit($blog->description, 50) }}
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a
                                                class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                                href="{{ route('blog.details', $blog->id) }}">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div>
                        {!! $blogs->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
