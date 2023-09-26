    <section>
        <div class="py-10 lg:py-32 bg-bubbles px-3 lg:px-10 xl:px-0">
            <div class="container mx-auto">
                <div class="xl:w-4/5 mx-auto shadow-smallS contact_area">
                    <div class="grid md:grid-cols-2">
                        <div class="bg-Nblue py-10 px-6 flex flex-col justify-between contact_content">
                            <div class="">
                                <p class="text-white font-rlw text-base lg:text-center text-justify"> We’re happy to
                                    answer any questions you may have and help you determine which of our services best
                                    fit your needs. We’re happy to answer any questions you may have and help you
                                    determine which of our services best fit your needs </p>
                            </div>
                            <div class="mt-10 lg:mt-0">
                                <div class="mt-2 flex items-center gap-2">
                                    <div class="">
                                        <p class="text-apink lg:text-3xl text-xl mt-3 text-center md:text-left">
                                            <iconify-icon icon="material-symbols:call"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <h2 class="text-white lg:text-xl text-xs text-center md:text-left">+880 1794
                                            070778</h2>
                                    </div>
                                </div>
                                <div class="mt-2 flex items-center gap-2">
                                    <div class="">
                                        <p class="text-apink lg:text-3xl text-xl mt-2">
                                            <iconify-icon icon="material-symbols:mail"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <h2 class="text-white lg:text-xl text-xs font-rlw">info@nexwift.com </h2>
                                    </div>
                                </div>
                                <div class="mt-2 flex gap-2">
                                    <div class="">
                                        <p class="text-apink lg:text-3xl text-xl mt-2">
                                            <iconify-icon icon="bx:map"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <h2 class="text-white lg:text-xl text-xs font-rlw">
                                            4C-Mishal Palace 30/04, KDA Outer Bypass Road,Sonadanga-9000 </h2>
                                        <h2 class="text-white lg:text-xl text-xs font-rlw"> Khulna, Bangladesh </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0">
                                <ul class="flex gap-3 items-center">
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                        </a> </li>
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                        </a> </li>
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                        </a> </li>
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="dcircle hidden xl:flex"> <img class="w-60"
                                    src="{{ asset('asset/img/awe.png') }}" alt="" /> </div>
                        </div>
                        <div class="p-6 bg-white">
                            <h2 class="text-2xl font-rlw text-Nblue font-semibold mb-10"> Asked For A Schedule </h2>


                            <form action="" method="POST" id="contactForm">
                                @csrf
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium">Your Name:</p> <input
                                        class="bg-transparent focus:outline-none border-none w-full px-3" name="name"
                                        type="text" />
                                </div>
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium">Your Email:</p> <input
                                        class="bg-transparent focus:outline-none border-none w-full px-3" type="text"
                                        name="email" />
                                </div>
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium"> Slect Your Topic: </p> <select
                                        class="bg-transparent focus:outline-none border-none w-full px-3 py-3 font-rlw ont-medium"
                                        name="selectedTopic" id="">
                                        <option name="selectedTopic" value="">-------</option>
                                        <option name="selectedTopic" value="Option1">Option 1</option>
                                        <option name="selectedTopic" value="Option2">Option 2</option>
                                        <option name="selectedTopic" value="Option3">Option 3</option>
                                        <option name="selectedTopic" value="Option4">Option 4</option>
                                    </select>
                                </div>
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium">Short Message:</p>
                                    <textarea class="bg-transparent focus:outline-none border-none w-full px-3" name="" id="" cols="30"
                                        rows="5"></textarea>
                                </div>
                                <div class="">
                                    <p class="font-rlw text-lg font-medium" name="meetingSessionLink"> Meting Season
                                        Link : </p>
                                    <div class="flex gap-10 mb-5 mt-3">
                                        <div class=""> <input type="radio" id="html"
                                                name="meetingSessionLink" value="Google Meet" />   <label
                                                class="font-rlw text-Nblue font-medium" for="html">Google
                                                Meet</label><br /> </div>
                                        <div class=""> <input type="radio" id="html"
                                                name="meetingSessionLink" value="Zoom" />   <label
                                                class="font-rlw text-Nblue font-medium"
                                                for="html">Zoom</label><br /> </div>
                                    </div>
                                </div>
                                <div class="mt-3 flex justify-center"> <input type="submit"
                                        class="text-white cursor-pointer bg-Nblue px-4 py-2 rounded-md font-rlw font-medium hover:bg-[#F25B62]"
                                        value="submit"> </div>
                            </form>

                            <div id="successMessage" style="display: none;" class="alert alert-success">
                                Form submitted successfully!
                            </div>


                        </div>
                    </div>
                    <div class="contact_circle hidden xl:flex"> <img class="w-36"
                            src="{{ asset('asset/img/GVs.png') }}" alt="" /> </div>
                </div>
            </div>
        </div>
    </section>
