{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <div class="">
                                <h2 class="text-Nblue text-base font-semibold font-rlw">Email</h2>
                            </div>
                            <div class="border-b border-b-Nblue">
                                <input
                                    class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full @error('email') is-invalid @enderror"
                                    type="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <h2 class="text-Nblue text-base font-semibold font-rlw">Password</h2>
                            </div>
                            <div class="border-b border-b-Nblue">
                                <input
                                    class="focus:outline-none px-3 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent  w-full @error('password') is-invalid @enderror"
                                    type="password" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit"
                                class=" bg-Nblue font-rlw text-base text-white py-2 w-full hover:bg-dred ">Sign
                                In</button>
                        </div>
                    </form>

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
                                <a href="{{ url('signup') }}"
                                    class=" text-base text-Nblue font-rlw  hover:text-green-500 ">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
