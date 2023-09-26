@extends('layouts.master')
@include('component.navbar')
<section>
    <div class="container mx-auto mt-24">
        <div class=" flex justify-center lg:pt-10 pt-5 lg:pb-16 pb-8">
            <div class="bg-red-600 h-2 w-16 top-[40px] -left-4 relative lg:block hidden -z-20"></div>
            <h1 class="font-rlw lg:font-extrabold font-bold text-center lg:text-8xl text-5xl">
                Overvie<span class="text-red-600">w</span>
            </h1>
        </div>
        <div class="grid grid-cols-12 ">
            <div class="lg:col-span-7 col-span-12">
                <div class="lg:block hidden">
                    <p class="font-rlw font-normal lg:text-2xl text-xs lg:p-10 p-4 text-slate-600">
                        We are a versatile digital company dedicated to transforming businesses through cutting-edge
                        Web
                        Development, Software Development, Application Development, Video and animation Production,
                        Digital Marketing, Marketing Consulting, and Graphic Design services. What sets us apart is
                        our
                        unwavering commitment to tailored solutions, where innovation meets functionality. With a
                        track
                        record of on-time project delivery and a client-centric approach, we are your trusted
                        partner in
                        navigating the digital landscape and achieving unparalleled success.
                    </p>
                </div>
                <div class="lg:hidden block">
                    <p class="font-rlw font-normal lg:text-2xl text-xs lg:p-10 p-4 text-slate-600 text-center">
                        We are a versatile digital company dedicated to transforming businesses through cutting-edge
                        Web
                        Development, Software Development, Application Development, Video and animation Production,
                        Digital Marketing, Marketing Consulting, and Graphic Design services.
                    </p>
                    <div class=" flex justify-center">
                        <img src="./img/qgqeg.png" alt="" class="h-20 w-40">
                    </div>
                    <p class="font-rlw font-normal lg:text-2xl text-xs lg:p-10 p-4 text-slate-600 text-center">
                        What sets us apart is our unwavering commitment to tailored solutions, where innovation
                        meets
                        functionality. With a track record of on-time project delivery and a client-centric
                        approach, we
                        are your trusted partner in navigating the digital landscape and achieving unparalleled
                        success.
                    </p>
                </div>
            </div>
            <div class="lg:col-span-5 col-span-12 lg:block hidden">
                <img src="{{ asset('asset/img/qgqeg.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
{{-- ======================= --}}
<section>
    <div class="lg:pt-20">
        <div class="container mx-auto">
            <div class="lg:block hidden">
                <div class="grid grid-cols-12 ">
                    <div class="col-span-5">
                        <img src="{{ asset('asset/img/ourStory.jpg') }}" alt="">
                    </div>
                    <div class="col-span-7">
                        <div class=" flex justify-center pt-20">
                            <h1 class="font-rlw font-extrabold text-center text-8xl">
                                <span class="text-red-600">Our</span> Stor<span class=" absolute">y</span>
                            </h1>
                            <div class="bg-cyan-300 h-40 w-40 -top-10 -left-8 relative rounded-full -z-30"></div>
                        </div>
                        <p class="font-rlw font-normal text-2xl p-10 text-slate-600">
                            Our story began 2020 with a vision to redefine the IT services landscape. Founded by
                            [Founder
                            Names], we embarked on a mission to fuse creativity with technology, turning ideas into
                            digital
                            realities. Over the years, we have evolved, adapted, and grown, but our core values remain
                            the
                            same - innovation, integrity, and customer-centricity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="lg:hidden block">
                <div class=" flex justify-center p-5">
                    <h1 class="font-rlw font-bold text-center text-4xl">
                        Our <span class="text-red-600">Story</span>
                    </h1>
                </div>
                <p class="font-rlw font-normal text-xs px-5 text-slate-600 text-center">
                    Our story began 2020 with a vision to redefine the IT services landscape. Founded by [Founder
                    Names], we
                    embarked on a mission to fuse creativity with technology, turning ideas into digital realities.
                </p>
                <div class="flex justify-center">
                    <img src="{{ asset('asset/img/ourStory.jpg') }}" alt="">
                </div>
                <p class="font-rlw font-normal text-xs px-5 text-slate-600 text-center pb-6">
                    Over the years, we have evolved, adapted, and grown, but our core values remain the same -
                    innovation,
                    integrity, and customer-centricity.
                </p>
            </div>
        </div>
    </div>

</section>
<!-- Our Story Section ends -->
<section>
    <div class="container mx-auto">
        <div class="lg:block hidden">
            <div class="grid grid-cols-12 ">
                <div class="col-span-7">
                    <div class=" flex justify-center pt-10 pb-16">
                        <div class="bg-red-600 h-2 w-16 top-[40px] -left-4 relative -z-20"></div>
                        <h1 class="font-rlw font-extrabold text-center text-8xl">
                            Our <span class="text-red-600">Commitment</span>
                        </h1>
                    </div>
                    <p class="font-rlw font-normal text-2xl p-10 text-slate-600">
                        At NEXWIFT, our commitment goes beyond projects and transactions. We are committed to your
                        success, your vision, and your goals. We are not satisfied until we have crafted solutions
                        that
                        not only meet your needs but exceed your expectations.
                    </p>
                </div>
                <div class="col-span-5">
                    <img src="{{ asset('asset/img/ourCommitment-removebg-preview.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="lg:hidden block">
            <div class=" flex justify-center p-5">
                <h1 class="font-rlw font-bold text-center text-4xl">
                    Our <span class="text-red-600">Commitment</span>
                </h1>
            </div>
            <p class="font-rlw font-normal text-xs px-5 text-slate-600 text-center">
                At NEXWIFT, our commitment goes beyond projects and transactions. We are committed to your success,
                your
                vision, and your goals.
            </p>
            <div class="flex justify-center">
                <img src="{{ asset('asset/img/ourCommitment-removebg-preview.png') }}" alt="">
            </div>
            <p class="font-rlw font-normal text-xs px-5 text-slate-600 text-center">
                We are not satisfied until we have crafted solutions that not only meet your needs but exceed your
                expectations.
            </p>
        </div>
    </div>
</section>
<!-- Commitment section Ends -->
@include('component.teamMember')
<section>
    <div class="container mx-auto">
        <div class="lg:block hidden">
            <div class="grid grid-cols-12 ">
                <div class="col-span-7">
                    <div class=" flex justify-center pt-10 pb-16">
                        <h1 class="font-rlw font-extrabold text-center text-6xl">
                            Join <span class="text-red-600">Us</span> on the Journey
                        </h1>
                    </div>
                    <p class="font-rlw font-normal text-2xl  text-slate-600">
                        Thank you for visiting NEXWIFT. We invite you to join us on a journey of innovation,
                        creativity,
                        and digital transformation. Whether you're looking to enhance your online presence,
                        streamline
                        operations, or embark on a new digital venture, we are here to make it happen.
                    </p>
                </div>
                <div class="col-span-5">
                    <img src="{{ asset('asset/img/joinUs-removebg-preview.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="lg:hidden block">
            <div class=" flex justify-center p-5">
                <h1 class="font-rlw font-bold text-center text-4xl">
                    <span class="text-red-600">Join Us</span> On the Journey
                </h1>
            </div>
            <p class="font-rlw font-normal text-xs px-5 text-slate-600 text-center">
                Thank you for visiting NEXWIFT. We invite you to join us on a journey of innovation, creativity, and
                digital transformation.
            </p>
            <div class="flex justify-center">
                <img src="{{ asset('asset/img/joinUs-removebg-preview.png') }}" alt="">
            </div>
            <p class="font-rlw font-normal text-xs px-5 text-slate-600 text-center pb-6">
                Whether you're looking to enhance your online presence, streamline operations, or embark on a new
                digital venture, we are here to make it happen.
            </p>
        </div>
    </div>
</section>
