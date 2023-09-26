    <section>
        <div class=" bg-bubbles py-10 px-6 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="flex justify-center lg:justify-start">
                    <div class="heading_text">
                        <h2 class="text-Nblue font-rlw lg:text-3xl text-xl font-semibold"> <span
                                class="text-white">Te</span>am Member </h2>
                        <div class="round_shep"></div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="swiper teamSwiper">
                        <div class="swiper-wrapper ">
                            @foreach ($addEmployee as $employee)
                                <div class="swiper-slide">
                                    <div class="bg-white py-6 px-3 rounded-md teamcard">
                                        <div class="flex justify-center">
                                            <div class="">
                                                <img class="w-36 h-36 rounded-full shadow-smallS"
                                                    src="{{ asset($employee->profile) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h2
                                                class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center">
                                                {{ $employee->name }} </h2>
                                            <p
                                                class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center">
                                                {{ $employee->designation }} </p>
                                        </div>
                                        <div class="flex justify-center mt-6">
                                            <ul class="flex gap-2">
                                                <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure"
                                                        href="{{ $employee->fbLink }}" target="_blank">
                                                        <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                    </a> </li>
                                                <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure"
                                                        href="{{ 'mailto:' . $employee->emailLink }}">
                                                        <iconify-icon icon="ic:round-email"></iconify-icon>
                                                    </a> </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
