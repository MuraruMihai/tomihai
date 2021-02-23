@extends('layouts.main')
@section('content')
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url({{ asset('public/assets/banner2.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-4 white-text text-center align-content-center">
                        <img class="banner-logo" src="{{ asset('public/assets/logo/logo-tomihai-white.png') }}">
                        <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Barber Shop</strong></h5>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <div class="container my-5">


        <!-- Section: Block Content -->
        <section class="dark-grey-text text-center">

            <h3 class="text-center font-weight-bold mb-4 pb-2">Frizerie</h3>
            <p class="text-center text-muted w-responsive mx-auto mb-5 home-description">
                Vrei un simplu tuns, sau vrei sa iti schimbi look-ul si te-ai saturat sa stai la rand minute bune?
            </p>
            <p class="text-center text-muted w-responsive mx-auto mb-5 home-description">
                Aici vei gasi punctualitate in programari seriozitate si profesionalism.
            </p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mb-4">

                    <!-- Card -->
                    <div class="card card-image home-img" style="background-image: url({{ asset('public/assets/home-img-3.jpg') }});">
                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">

                    <!-- Card -->
                    <div class="card card-image home-img" style="background-image: url({{ asset('public/assets/home-img-4.jpg') }});">
                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Block Content -->


    </div>

    <div class="container">
        <section>

            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Servicii</h6>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Ce Oferim</h3>
            <hr class="w-header my-4">

            <div class="row">

                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center grey text-white">
                        <div class="card-body">
                            <p class="mt-4 pt-2"><i class="fas fa-scissors fa-4x"></i></p>
                            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">Tuns</a></h5>
                            <p class="mb-4">Tuns + Spalat + Uscat</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <p class="mt-4 pt-2"><i class="fas fa-scissors fa-4x grey-text"></i></p>
                            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Barbierit</a></h5>
                            <p class="text-muted mb-4">Tuns Barba + Contur Barba + Spalat Barba</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center grey lighten-1 text-white">
                        <div class="card-body">
                            <p class="mt-4 pt-2"><i class="fas fa-shower fa-4x"></i></p>
                            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">Spalat</a></h5>
                            <p class="mb-4">Spalat + Aranjat + Uscat</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <p class="mt-4 pt-2"><i class="fas fa-smile-o fa-4x grey-text"></i></p>
                            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Aranjat</a></h5>
                            <p class="text-muted mb-4">Aranjat + Styling + Masaj Capilar</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection
