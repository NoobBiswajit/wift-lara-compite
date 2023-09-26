@extends('layouts.master')
@include('component.navbar')

<section>
    <div class="py-20 bg-white mt-20">
        <div class="container mx-auto">
            <div class="w-1/2 mx-auto shadow-sins">
                <div class="bg-blue-700 py-5 rounded-t-lg">
                    <h2 class="text-2xl font-rlw text-white text-center font-bold">
                        Sign In
                    </h2>
                </div>
                <div class="px-10 py-10">
                    <form action="">

                        <div class="mb-6">
                            <div class="">
                                <h2 class="text-Nblue text-base font-semibold font-rlw">Email Or Phone</h2>
                            </div>
                            <div class="border-b border-b-Nblue">
                                <input
                                    class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full "
                                    type="textl">
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <h2 class="text-Nblue text-base font-semibold font-rlw">Last Name :</h2>
                            </div>
                            <div class="border-b border-b-Nblue">
                                <input
                                    class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full "
                                    type="text">
                            </div>
                        </div>
                        <div class=" flex justify-between items-center mt-5">
                            <div class="flex gap-3 items-center">
                                <div class="">
                                    <input type="checkbox" id="" name="" value="">
                                </div>
                                <div class="">
                                    <p class=" text-base text-Nblue font-rlw   hover:text-green-500">Save Info</p>
                                </div>
                            </div>
                            <div class="flex gap-3 items-center justify-end">
                                <div class="">
                                    <a href="{{ url('/register') }}"
                                        class=" text-base text-Nblue font-rlw  hover:text-green-500 ">Create Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button class=" bg-Nblue font-rlw text-base text-white py-2 w-full hover:bg-dred ">Sign
                                In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
