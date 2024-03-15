<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){

        $trains = Train::where('departure_time', '>', Carbon::now())->orderBy('departure_time')->get();

        return view("home" , compact("trains"));
    }

    public function AllTrain(){

        $train = Train::All();

        return view("about.about" , compact("train"));
    }
}
