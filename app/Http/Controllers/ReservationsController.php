<?php

namespace App\Http\Controllers;

use App\Rezervare;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{


    public function addReservation(Request $request){
        $this->validate($request, [
          'nume' => 'required',
          'telefon' => 'required',
          'data' => 'required',
          'interval' => 'required'
        ]);

        $rezervare = new Rezervare();
        $rezervare->nume = $request->nume;
        $rezervare->telefon = $request->telefon;
        $rezervare->data = strval($request->data);
        $var = "";
        if(isset($_POST['submit'])){
            $var = $_POST['interval'];
        }
        $rezervare->interval = $request->interval;
        $rezervare->save();
        return redirect(route('rezervari'))->with('successMsg', 'Rezervarea dvs a fost inregistrata!');
    }

}
