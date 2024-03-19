<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $today = Carbon::today();

        // Ottieni i treni in partenza nella data odierna
        $treniInPartenza = Train::whereDate('orario_partenza', $today->format('Y-m-d'))->get();

        return view('welcome', compact('treniInPartenza'));
    }
}

