<?php

namespace App\Http\Controllers;

use App\Bingo;
use Illuminate\Http\Request;

class BingoController extends Controller
{
    //
    public function getBingo(){
       // $bingos = Bingo::all()->random(9);
    //}
        $hard = Bingo::where('diffuclity',"H")
        ->inRandomOrder()
        ->take(1)
        ->get();

        $bingos = Bingo::where('diffuclity',"E")
        ->orWhere('diffuclity',"m")
        ->inRandomOrder()
        ->take(9)
        ->get();

    // return view('bingo.bingo', ['bingos' => $bingos]);
        return view('bingo.bingo',['bingos'=>$bingos,'hard'=>$hard]);

    }

}
