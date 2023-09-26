@extends('layouts.master')
@include('component.navbar')

<section>
    <div class="mt-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 lg:pt-0 pt-12">
                <div class="lg:col-span-6 col-span-12 flex justify-center">
                    <div class="relative lg:top-32 top-0">
                        <p class="font-rlw font-semibold lg:text-4xl text-2xl lg:text-justify text-center">
                            Join Us
                            <iconify-icon icon="ion:play-back" style="color: red" flip="horizontal"
                                class="top-1 relative"></iconify-icon>
                        </p>
                        <h2 class="font-rlw font-bold text-black lg:text-9xl text-4xl lg:text-justify text-center">
                            NEXWIFT
                        </h2>
                        <p class="font-rlw font-medium text-black lg:text-2xl text-xl lg:text-justify text-center">
                            Where Innovation Takes Flight
                        </p>
                    </div>
                </div>
                <div class="lg:col-span-6 col-span-12">
                    <div class="flex lg:justify-end justify-center">
                        <img src="{{ asset('asset/img/joinUs-removebg-preview.png') }}" alt=""
                            class="lg:w-full w-1/2" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-5">
                <div class="lg:col-span-6 col-span-12 lg:mx-0 mx-2">
                    <div class="pt-12 pb-3">
                        <h2 class="font-rlw font-bold text-black lg:text-6xl text-3xl w-full text-center">
                            Benefits with <span class="text-red-600">NEXWIFT</span>
                        </h2>
                    </div>
                    <div class="grid grid-cols-6 gap-2 py-6">
                        <div class="col-span-3">
                            <div class="bg-white rounded-md my-2 hover:bg-slate-300 py-6">
                                <div class="flex justify-center">
                                    <img src="{{ asset('asset/img/salary.png') }}" alt="" />
                                </div>
                                <div class="">
                                    <h2 class="font-rlw font-semibold text-black lg:text-xl text-base text-center">
                                        Bi-Annual Salaray Increment
                                    </h2>
                                </div>
                            </div>
                            <div class="bg-white rounded-md my-2 hover:bg-slate-300 py-6">
                                <div class="flex justify-center">
                                    <img src="{{ asset('asset/img/salary.png') }}" alt="" />
                                </div>
                                <div class="">
                                    <h2 class="font-rlw font-semibold text-black lg:text-xl text-base text-center">
                                        Bi-Annual Salaray Increment
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="bg-white rounded-md my-2 hover:bg-slate-300 py-6">
                                <div class="flex justify-center">
                                    <img src="{{ asset('asset/img/salary.png') }}" alt="" />
                                </div>
                                <div class="">
                                    <h2 class="font-rlw font-semibold text-black lg:text-xl text-base text-center">
                                        Bi-Annual Salaray Increment
                                    </h2>
                                </div>
                            </div>
                            <div class="bg-white rounded-md my-2 hover:bg-slate-300 py-6">
                                <div class="flex justify-center">
                                    <img src="{{ asset('asset/img/salary.png') }}" alt="" />
                                </div>
                                <div class="">
                                    <h2 class="font-rlw font-semibold text-black lg:text-xl text-base text-center">
                                        Bi-Annual Salaray Increment
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 col-span-12">
                    <div class="pb-10">
                        <div class="lg:pt-12 pb-6">
                            <h2 class="font-rlw font-bold text-black lg:text-5xl text-3xl text-center">
                                Your Life at <span class="text-red-600">NEXWIFT</span>
                            </h2>
                        </div>
                        <div class="lg:px-20 px-5 h-auto">
                            <p class="font-rlw font-normal text-black lg:text-2xl text-base text-center">
                                Life at NEXWIFT is more than just work; it's a vibrant and
                                collaborative journey. Our dynamic and diverse team thrives
                                in an inclusive and innovative environment where creativity
                                knows no bounds. We promote a culture of continuous
                                improvement, development, and work-life balance to provide
                                every team member with the support and chances they need to
                                succeed. Join us and experience a fulfilling career that's
                                not just a job, but a vibrant part of your life
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="pb-10">
        <div class="container mx-auto">
            <div class="pt-24 pb-10">
                <h2 class="font-rlw font-bold text-black lg:text-6xl text-3xl w-full text-center">
                    Vacancies <span class="text-red-600">Right Now</span>
                </h2>
            </div>
            <div class="grid grid-cols-12">
                <div class="lg:col-span-8 col-span-12 jobs rounded-2xl lg:p-8 p-4 bg-white hover:border-2">
                    <a href="" class="lg:m-3 m-1">
                        <div
                            class="gap-3 text-black flex lg:flex-row justify-evenly lg:p-2 p-1 bg-slate-200 font-rlw lg:text-2xl text-sm rounded-md border-2 font-semibold hover:border-black">
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Front-End Developer
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Vacancy: 1
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Deadline: 1/1/2024
                                </h2>
                            </div>
                        </div>
                    </a>
                    <a href="" class="lg:m-3 m-1">
                        <div
                            class="gap-3 text-black flex lg:flex-row justify-evenly lg:p-2 p-1 bg-slate-200 font-rlw lg:text-2xl text-sm rounded-md border-2 font-semibold hover:border-black">
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Front-End Developer
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Vacancy: 1
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Deadline: 1/1/2024
                                </h2>
                            </div>
                        </div>
                    </a>
                    <a href="" class="lg:m-3 m-1">
                        <div
                            class="gap-3 text-black flex lg:flex-row justify-evenly lg:p-2 p-1 bg-slate-200 font-rlw lg:text-2xl text-sm rounded-md border-2 font-semibold hover:border-black">
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Front-End Developer
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Vacancy: 1
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Deadline: 1/1/2024
                                </h2>
                            </div>
                        </div>
                    </a>
                    <a href="" class="lg:m-3 m-1">
                        <div
                            class="gap-3 text-black flex lg:flex-row justify-evenly lg:p-2 p-1 bg-slate-200 font-rlw lg:text-2xl text-sm rounded-md border-2 font-semibold hover:border-black">
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Front-End Developer
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Vacancy: 1
                                </h2>
                            </div>
                            <div class="">
                                <h2 class="font-rlw lg:font-semibold font-normal text-center">
                                    Deadline: 1/1/2024
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-4 col-span-12 lg:block hidden">
                    <div class="">
                        <img src="{{ asset('asset/img/vacancy-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="">
        <div class="container mx-auto">
            <div class="grid grid-cols-12">
                <div class="lg:col-span-8 col-span-12">
                    <div class="lg:hidden block">
                        <div class="flex flex-col justify-center">
                            <div class="lg:pb-10 pb-2 lg:pt-0 pt-5">
                                <h2 class="font-rlw font-bold text-black lg:text-4xl text-2xl w-full text-center">
                                    <span class="text-red-600">Steps</span> to Join the Camp
                                </h2>
                            </div>
                            <div class="flex justify-center">
                                <img src="{{ asset('asset/recruit-removebg-preview.png') }}" alt="" />
                            </div>
                            <div class="">
                                <p class="font-rlw font-medium lg:text-2xl text-lg lg:text-start text-center px-3">
                                    We understand that talent is the foundation of our
                                    success. Our commitment goes beyond hiring; we invest in
                                    nurturing the skills and confidence of our applicants
                                    through our
                                    <span class="text-red-600">five recruitment steps</span>.
                                    Through continuous learning, mentorship, and a
                                    growth-oriented environment, we empower our team members
                                    to excel and tackle challenges with unwavering assurance,
                                    ensuring they're always ready to take on the tasks that
                                    drive our company forward
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="font-rlw m-5">
                        <ul class="timeline">
                            <li>
                                <div class="direction-r hover:shadow-2xl p-6 rounded-xl">
                                    <div class="flag-wrapper">
                                        <span class="flag text-2xl">Review</span>
                                        <span class="time-wrapper"><span class="time text-base">Step 1</span></span>
                                    </div>
                                    <div class="desc text-xl">
                                        Screening the CV or Resume.
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="direction-l hover:shadow-2xl p-6 rounded-xl">
                                    <div class="flag-wrapper">
                                        <span class="flag text-2xl">Shortlist</span>
                                        <span class="time-wrapper"><span class="time text-base">Step 2</span></span>
                                    </div>
                                    <div class="desc text-xl">
                                        Shortlisting for contact with applicant based on his/her
                                        profile.
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="direction-r hover:shadow-2xl p-6 rounded-xl">
                                    <div class="flag-wrapper">
                                        <span class="flag text-2xl">Get To Know</span>
                                        <span class="time-wrapper"><span class="time text-base">Step 3</span></span>
                                    </div>
                                    <div class="desc text-xl">
                                        The primary information of the applicant delivered in CV
                                        or Resume and experiences if there.
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="direction-l hover:shadow-2xl p-6 rounded-xl">
                                    <div class="flag-wrapper">
                                        <span class="flag text-2xl">Final Interview</span>
                                        <span class="time-wrapper"><span class="time text-base">Step 4</span></span>
                                    </div>
                                    <div class="desc text-xl">
                                        The main interview with the applicant would be on-site.
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="direction-r hover:shadow-2xl p-6 rounded-xl">
                                    <div class="flag-wrapper">
                                        <span class="flag text-2xl">On Board</span>
                                        <span class="time-wrapper"><span class="time text-base">Step 5</span></span>
                                    </div>
                                    <div class="desc text-xl">
                                        After passing the final interview, the joining process
                                        would be offered.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-4 col-span-12 flex flex-col justify-center">
                    <div class="lg:block hidden">
                        <div class="pb-10">
                            <h2 class="font-rlw font-bold text-black text-4xl w-full text-center">
                                <span class="text-red-600">Steps</span> to Join the Board
                            </h2>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('asset/img/recruit-removebg-preview.png') }}" alt="" />
                        </div>
                        <div class="">
                            <p class="font-rlw font-medium text-2xl">
                                We understand that talent is the foundation of our success.
                                Our commitment goes beyond hiring; we invest in nurturing
                                the skills and confidence of our applicants through our
                                <span class="text-red-600">five recruitment steps</span>.
                                Through continuous learning, mentorship, and a
                                growth-oriented environment, we empower our team members to
                                excel and tackle challenges with unwavering assurance,
                                ensuring they're always ready to take on the tasks that
                                drive our company forward
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
