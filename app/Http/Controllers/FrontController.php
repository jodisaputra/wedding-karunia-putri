<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'sliders' => Slider::all(),
            'events' => Event::all()
        ]);
    }
}
