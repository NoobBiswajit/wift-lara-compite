@extends('layouts.master')
@include('component.navbar')
<section>
    <div class="py-20 bg-white mt-20">
        <div class="container mx-auto">
            <div class="lg:w-1/2 mx-auto shadow-sins">
                <div class="bg-blue-700 py-5 rounded-t-lg">
                    <h2 class="text-2xl font-rlw text-white text-center font-bold">
                        Registration
                    </h2>
                </div>
                <div class="px-10 py-10">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="grid grid-cols-2 gap-10">
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw"> First Name :</h2>
                                </div>
                                <div class="border-b border-b-Nblue">
                                    <input
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full "
                                        type="text" name="f_name" required>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw">Last Name :</h2>
                                </div>
                                <div class="border-b border-b-Nblue">
                                    <input
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full "
                                        type="text" name="l_name" required>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw">Your Email :</h2>
                                </div>
                                <div class="border-b border-b-Nblue">
                                    <input
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full @error('email') is-invalid @enderror"
                                        type="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email">
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw">Your Phone :</h2>
                                </div>
                                <div class="border-b border-b-Nblue">
                                    <input
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full"
                                        type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw mb-2">Gender</h2>
                                </div>
                                <div class="border-b border-b-Nblue">
                                    <select name="gender"
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent text-Nblue w-full"
                                        id="" required>
                                        <option value="" selected></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw mb-2">Country</h2>
                                </div>
                                <div class="border-b border-b-Nblue">
                                    <select name="country"
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent text-Nblue w-full"
                                        id="" required>
                                        <option value="" selected></option>
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="uk">Uk</option>
                                        <option value="usa">Usa</option>
                                        <option value="india">India</option>
                                        <option value="others">Other's</option>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw">Password :</h2>
                                </div>
                                <div class="border-b border-b-Nblue password">
                                    <input
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full @error('password') is-invalid @enderror"
                                        type="password" name="password" required autocomplete="new-password">
                                    <div class="password-icon">
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2 class="text-Nblue text-base font-semibold font-rlw">Confirm Password :</h2>
                                </div>
                                <div class="border-b border-b-Nblue password">
                                    <input
                                        class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full"
                                        id="password-field" type="password" name="password_confirmation" required
                                        autocomplete="new-password">

                                </div>
                            </div>
                            <div class="flex gap-3 items-center">

                                <div class="">
                                    <input type="checkbox" id="" name="" value="">
                                </div>
                                <div class="">
                                    <a href="trems.html"
                                        class=" text-base text-Nblue font-rlw underline  hover:text-green-500 underline-offset-4">Agree
                                        to Terms and
                                        Condition</a>
                                </div>
                            </div>
                            <div class="flex gap-3 items-center justify-end">
                                <div class="">
                                    <a href="{{ url('/login') }}"
                                        class=" text-base text-Nblue font-rlw  hover:text-green-500 ">Already have an
                                        account ?</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                class="  bg-Nblue font-rlw text-base text-white py-2 w-full hover:bg-dred ">Create
                                Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
