<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $oggi = Carbon::today();

        // Recupera i treni in partenza dalla data odierna
        $treni = Train::whereDate('orario_di_partenza', '>=', $oggi)->get();

        // Passa i dati alla vista
        return view('home', compact('treni'));
    }
}
