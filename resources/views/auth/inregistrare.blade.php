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
                <h5 class="h5 orange-text"><i class="fas  fa-calendar-plus-o"></i> Inregistrare</h5>
                <h2 class="card-title h2 my-4 py-2">Devino Clientul Nostru!</h2>

                    <form class="text-center border border-light p-5 w-50 m-auto" action="{{ route('register') }}" method="POST">

                        @csrf

                        <div class="md-form form-group">
                            <input type="text" id="nume" class="form-control mb-4 md-form @error('nume')
                                is-invalid @enderror" placeholder="Nume" name="nume" value="{{ old('nume') }}"
                                   required autocomplete="name" autofocus>

                            @error('nume')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="md-form form-group">
                            <input type="text" id="prenume" class="form-control mb-4 md-form @error('prenume') is-invalid @enderror" placeholder="Prenume" name="prenume" value="{{ old('prenume') }}"
                                   required autocomplete="prenume" autofocus>

                            @error('prenume')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="md-form form-group">
                            <input type="text" id="telefon" class="form-control mb-4 md-form @error('telefon') is-invalid @enderror" placeholder="Numar de Telefon" name="telefon" required>

                            @error('telefon')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="md-form form-group">
                            <input type="email" id="email" class="form-control mb-4 md-form @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="md-form form-group">
                            <input type="password" id="password" class="form-control mb-4 md-form @error('password') is-invalid @enderror" placeholder="Parola" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="md-form form-group">
                            <input type="password" id="password_confirmation" class="form-control mb-4 md-form" placeholder="Confirmare Parola" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <!-- Sign up button -->
                        <div class="form-group">
                            <button class="btn btn-outline-warning waves-effect" type="submit">Inregistrare</button>
                        </div>


                    </form>

            </div>
        </div>
    </div>

@endsection
