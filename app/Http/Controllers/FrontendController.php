<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use App\Models\Artikel;
use App\Models\Property;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        $property = Property::all();
        $slider = Slider::all();
        $about = About::all();
        $fasilitas = Fasilitas::all();
        return view('home', compact('artikel', 'property', 'slider', 'about', 'fasilitas'));
    }
}
