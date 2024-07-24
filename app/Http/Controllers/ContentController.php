<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Artikel;
use App\Models\Fasilitas;
use App\Models\Property;
use App\Models\Slider;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function dashboard()
    {
       $artikel = Artikel::count();
       $property = Property::count();
       $slider = Slider::count();
        return view('backend.dashboard', compact('artikel', 'property', 'slider'));
    }


    public function about()
    {
        // Mendapatkan model pertama yang dipublikasikan
      $about = About::first();
      return view('backend.contents.about', compact('about'));
       
    }


    
    public function about_update (Request $request,$id )
    {
        $about1 = About::find($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

      $about = $request->all();

        if ($foto = $request->file('foto')) {
            $destinationPath = 'storage/images/about';
            $aboutImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $aboutImage);
            $about['foto'] = "$aboutImage";
        } else {
            unset($about['foto']);
        }

        
        

        $about1->update($about);

        return redirect()->route('about')
                         ->with('success', 'about updated successfully');
    }
    public function fasilitas()
    {
        // Mendapatkan model pertama yang dipublikasikan
      $fasilitas = Fasilitas::first();
      return view('backend.contents.fasilitas', compact('fasilitas'));
       
    }


    
    public function fasilitas_update (Request $request,$id )
    {
        $fasilitas1 = Fasilitas::find($id);
        $request->validate([
            'title1' => 'required|string|max:255',
            'deskripsi1' => 'required|string',
            'title2' => 'required|string|max:255',
            'deskripsi2' => 'required|string',
            'title3' => 'required|string|max:255',
            'deskripsi3' => 'required|string',
            'title4' => 'required|string|max:255',
            'deskripsi4' => 'required|string',
            'title5' => 'required|string|max:255',
            'deskripsi5' => 'required|string',
            'title6' => 'required|string|max:255',
            'deskripsi6' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

      $fasilitas = $request->all();

        if ($foto = $request->file('foto')) {
            $destinationPath = 'storage/images/fasilitas';
            $fasilitasImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $fasilitasImage);
            $fasilitas['foto'] = "$fasilitasImage";
        } else {
            unset($fasilitas['foto']);
        }
        

        $fasilitas1->update($fasilitas);

        return redirect()->route('fasilitas')
                         ->with('success', 'fasilitas updated successfully');
    }

}
