@extends('layouts.master')
@include('component.navbar')
<section>
    <div class=" bg-bubbles py-10 lg:py-20 service-area px-3 lg:px-16 xl:px-0">
        <div class="container mx-auto">
            <div class=" md:w-1/2 mx-auto">
                <div class="pt-5">
                    <h2 class="text-Nblue text-2xl lg:text-4xl font-rlw font-bold text-center pt-10">Our Services</h2>
                    <p class=" text-Nblue text-xl mt-6 lg:mt-10 font-rlw font-medium md:text-center text-justify w-full">
                        Our commitment to excellence shines through in everything we do. We deliver best-in-class
                        services, tailored to your unique needs, ensuring your success in today's competitive digital
                        landscape. Experience the difference with NEXWIFT – where your goals become our passion</p>
                    <div class="mt-6 flex justify-center">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-6 py-2 font-rlw text-base rounded-full font-medium tracking-wide">Get
                            Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="py-10 bg-white px-3 lg:px-16 xl:px-0">
        <div class="container mx-auto">
            <div class="">
                <h2 class=" text-dred text-lg md:text-xl font-medium font-rlw text-center">All Services</h2>
                <h2 class=" text-Nblue text-2xl xl:text-4xl font-rlw text-center font-bold mt-3">See All Of Our Services
                </h2>
            </div>
            <div class="grid md:grid-cols-2 gap-5 lg:gap-10 mt-6 md:mt-16 items-center">
                <div class="">
                    <h2 class=" text-Nblue text-xl lg:text-3xl font-semibold font-rlw">Web Development</h2>
                    <p class=" text-black text-base font-rlw font-medium mt-3 md:mt-6 text-justify md:text-left">Elevate
                        your online presence with our expert web development services. From responsive designs to
                        seamless user experiences, we create websites that captivate and convert visitors into
                        customers. </p>

                    <div class="md:mt-10 mt-6 flex justify-center md:justify-start ">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-3 lg:px-6 py-1 lg:py-3 font-rlw text-base md:text-lg rounded-full font-medium">Get
                            Services</a>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('asset/img/webdev.png') }}" alt="">
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-5 lg:gap-10 mt-6 md:mt-16 items-center">
                <div class="order-last md:order-first">
                    <img src="{{ asset('aseet/img/appdev.png') }}"alt="">
                </div>
                <div class="">
                    <h2 class=" text-Nblue text-xl lg:text-3xl font-semibold font-rlw">Software Development</h2>
                    <p class=" text-black text-base font-rlw font-medium mt-3 md:mt-6 text-justify md:text-left">
                        Transform your ideas into powerful software solutions. Our skilled team specializes in custom
                        software development, crafting intuitive applications that meet your unique business needs. </p>

                    <div class="md:mt-10 mt-6 flex justify-center md:justify-start ">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-3 lg:px-6 py-1 lg:py-3 font-rlw text-base md:text-lg rounded-full font-medium">Get
                            Services</a>
                    </div>
                </div>

            </div>
            <div class="grid md:grid-cols-2 gap-5 lg:gap-10 mt-6 md:mt-16 items-center">
                <div class="">
                    <h2 class=" text-Nblue text-xl lg:text-3xl font-semibold font-rlw"> Graphic Design</h2>
                    <p class=" text-black text-base font-rlw font-medium mt-3 md:mt-6 text-justify md:text-left">Visual
                        storytelling at its finest. Our creative designers breathe life into your brand with stunning
                        graphics, logos, and visuals that leave a lasting impression.</p>

                    <div class="md:mt-10 mt-6 flex justify-center md:justify-start ">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-3 lg:px-6 py-1 lg:py-3 font-rlw text-base md:text-lg rounded-full font-medium">Get
                            Services</a>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('asset/img/graphicdesign.png') }}" alt="">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-5 lg:gap-10 mt-6 md:mt-16 items-center">
                <div class="">
                    <img src="{{ asset('asset//img/digitalMarketing-removebg-preview.png') }}" alt="">
                </div>
                <div class="">
                    <h2 class=" text-Nblue text-xl lg:text-3xl font-semibold font-rlw"> Digital Marketing</h2>
                    <p class=" text-black text-base font-rlw font-medium mt-3 md:mt-6 text-justify md:text-left">Make
                        waves in the digital realm with our comprehensive digital marketing strategies. From SEO to
                        social media, we're your partners in driving online success. </p>

                    <div class="md:mt-10 mt-6 flex justify-center md:justify-start ">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-3 lg:px-6 py-1 lg:py-3 font-rlw text-base md:text-lg rounded-full font-medium">Get
                            Services</a>
                    </div>
                </div>

            </div>

            <div class="grid md:grid-cols-2 gap-5 lg:gap-10 mt-6 md:mt-16 items-center">
                <div class="">
                    <h2 class=" text-Nblue text-xl lg:text-3xl font-semibold font-rlw"> Marketing Consultancy</h2>
                    <p class=" text-black text-base font-rlw font-medium mt-3 md:mt-6 text-justify md:text-left">Unlock
                        your business's full potential with our marketing consultancy services. Our experts provide
                        strategic insights, helping you navigate the dynamic world of marketing and achieve your goals.
                    </p>

                    <div class="md:mt-10 mt-6 flex justify-center md:justify-start ">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-3 lg:px-6 py-1 lg:py-3 font-rlw text-base md:text-lg rounded-full font-medium">Get
                            Services</a>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('asset/img/marketing.jpg') }}" alt="">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-5 lg:gap-10 mt-6 md:mt-16 items-center">
                <div class="">
                    <img src="{{ asset('asset/img/videoEdit-removebg-preview.png') }}" alt="">
                </div>
                <div class="">
                    <h2 class=" text-Nblue text-xl lg:text-3xl font-semibold font-rlw"> Video Editing and Animation
                        Production</h2>
                    <p class=" text-black text-base font-rlw font-medium mt-3 md:mt-6 text-justify md:text-left">Lights,
                        camera, action! Our video editing and animation production team brings your ideas to life,
                        creating engaging content that resonates with your audience. </p>

                    <div class="md:mt-10 mt-6 flex justify-center md:justify-start ">
                        <a href="#"
                            class=" text-white bg-dred hover:bg-Nblue px-3 lg:px-6 py-1 lg:py-3 font-rlw text-base md:text-lg rounded-full font-medium">Get
                            Services</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
