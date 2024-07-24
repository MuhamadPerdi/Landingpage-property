<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageName = null;
        if ($request->hasFile('foto')) {
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/images/slider', $imageName);
        }
        Slider::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'foto' => $imageName,
        ]);

        return redirect()->route('slider.index')
                         ->with('success', 'slider created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            if ($slider->foto) {
                Storage::delete('public/images/slider' . $slider->foto);
            }
        
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/images/slider', $imageName);
            $slider->foto = $imageName;
        }

        $slider->save();

        return redirect()->route('slider.index', $slider->id)
                         ->with('success', 'slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->foto) {
            Storage::delete('public/images/slider' . $slider->foto);
        }

        $slider->delete();

        return redirect()->route('slider.index')
                         ->with('success', 'slider deleted successfully');
    }
}
