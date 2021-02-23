@extends('layouts.main')
@section('content')

    <div class="card card-image" style="background-image: url({{ asset('public/assets/home-img-1-bg.jpg') }});">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                @if(session('successMsg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('successMsg') }}
                    </div>
                @endif
            <!-- Content -->
                <h5 class="h5 orange-text"><i class="fas  fa-calendar-plus-o"></i> Contact</h5>
                <h2 class="card-title h2 my-4 py-2">Ai o intrebare?</h2>

                <form class="text-center border border-light p-5" action="{{ route('sendMessage') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormNume" class="form-control" placeholder="Nume" name="nume">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterPrenume" class="form-control" placeholder="Prenume" name="prenume">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormEmail" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterPhone" class="form-control" placeholder="Numar de telefon" name="telefon">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" cols="4" placeholder="Scrie aici..."></textarea>
                    </div>



                    <!-- Sign up button -->
                    <button class="btn btn-outline-warning waves-effect" type="submit">TRIMITE</button>


                </form>

            </div>
        </div>
    </div>

@endsection
