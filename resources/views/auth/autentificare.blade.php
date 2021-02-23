@extends('layouts.main')
@section('content')

    <div class="card card-image" style="background-image: url({{ asset('public/assets/home-img-1-bg.jpg') }});">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5 container">
                @if(session('successMsg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('successMsg') }}
                    </div>
            @endif
            <!-- Content -->
                <h2 class="card-title h2 my-4 py-2">Deja esti clientul nostru?</h2>
                <h4 class="card-title h4 my-4 py-2">Bine ai revenit!</h4>

                <form class="text-center border border-light p-5 w-50 m-auto" action="{{ route('login') }}" method="post">

                    @csrf

                    <div class="md-form">
                        <input id="email" type="email" class="form-control text-white md-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="md-form">
                        <input id="password" type="password" class="form-control text-white md-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Parola">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Tine-ma minte!</label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <div>
                                <!-- Forgot password -->
                                <a href="#">Ti-ai uitat parola?</a>
                            </div>
                        @endif
                    </div>

                <!-- Sign up button -->
                <button class="btn mt-5 btn-outline-warning waves-effect" type="submit">Autentificare</button>


                </form>

            </div>
        </div>
    </div>

@endsection
