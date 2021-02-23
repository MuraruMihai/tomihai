@extends('layouts.main')
@section('content')
    <!-- Jumbotron -->
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <div class="card card-image" style="background-image: url({{ asset('public/assets/home-img-1-bg.jpg') }});">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                @if(session('successMsg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('successMsg') }}
                    </div>
            @endif
                <!-- Content -->
                <h5 class="h5 orange-text"><i class="fas  fa-calendar-plus-o"></i> Rezervare</h5>
                <h2 class="card-title h2 my-4 py-2">Fa o rezervare online.</h2>

                <form class="text-center border border-light p-5" action="{{ route('addReservation') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormNume" class="form-control" placeholder="Nume" name="nume">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Numar de telefon" name="telefon" aria-describedby="defaultRegisterFormPhone">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="mb-3">
                                <input type="date" name="data" id="date" placeholder="Alegeti Data" class="form-control datepicker" value="" required />
                            </div>
                        </div>
                        <div class="col">
                            <select class="mdb-select form-control" name="interval">
                                <option value="" disabled selected>Alege intervalul</option>
                                <option value="12:00 - 12:30">12:00 - 12:30</option>
                                <option value="15:00 - 15:30">15:00 - 15:30</option>
                                <option value="15:30 - 16:00">15:30 - 16:00</option>
                            </select>
                        </div>

                    </div>



                    <!-- Sign up button -->
                    <button class="btn btn-outline-warning waves-effect" type="submit">REZERVA ACUM</button>


                </form>

            </div>
        </div>
    </div>
    <!-- Jumbotron -->
@endsection
