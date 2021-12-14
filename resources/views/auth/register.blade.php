@extends('layouts.app')

@section('content')


<section class="py-5 bg-light">
    <div class="container">
        <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Register</h1>
            </div>
            <div class="col-lg-6 text-lg-end">

            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-6 offset-3">
            <h2 class="h5 text-uppercase mb-4">{{ __('register')}}</h2>


            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first_name" class="text-small text-uppercase py-3">first name</label>
                            <input id="first_name" type="text" class="form-control form-control-lg" name="first_name"
                                value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="last_name" class="text-small text-uppercase py-3">last name</label>
                            <input id="last_name" type="text" class="form-control form-control-lg" name="last_name"
                                value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="email" class="text-small text-uppercase py-3">email</label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="username" class="text-small text-uppercase py-3">User Name</label>
                            <input id="username" type="text" class="form-control form-control-lg" name="username"
                                value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="mobile" class="text-small text-uppercase py-3">Mobile</label>
                            <input id="mobile" type="text" class="form-control form-control-lg" name="mobile"
                                value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                            @error('mobile')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="password" class="text-small text-uppercase py-3">Password</label>
                            <input id="password" type="password" class="form-control form-control-lg" name="password"
                                value="{{ old('password') }}" required autocomplete="password" autofocus>

                            @error('password')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="password-confirm" class="text-small text-uppercase py-3">Confirm
                                Password</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg"
                                name="password_confirmation" required autocomplete="password-confirm" autofocus>

                            @error('password-confirm')
                            <span class="text-danger my-3">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark form-control my-3"> {{ __('Register') }} </button>

                            @if (Route::has('login'))
                            <a class="btn btn-info float-right form-control  mb-3" href="{{ route('login') }}">
                                {{ __('Already Have an Acount ') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection