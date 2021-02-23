<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{

    public function goHome(){
        return view('acasa');
    }

    public function goReservations(){
        return view('rezervari');
    }

    public function goPrice(){
        return view('preturi');
    }

    public function goContact(){
        return view('contact');
    }

    public function goLogin(){
        return view('auth/autentificare');
    }

    public function goRegister(){
        return view('auth/inregistrare');
    }


    public function view(User $user, Reservation $reservation)
    {
        return $this->deny('Intervalul nu este valid');
    }



}
