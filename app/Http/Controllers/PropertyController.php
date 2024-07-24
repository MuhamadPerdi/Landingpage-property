<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.property.index', compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.property.create');
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
            $request->foto->storeAs('public/images/property', $imageName);
        }
        Property::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'foto' => $imageName,
        ]);

        return redirect()->route('property.index')
                         ->with('success', 'artikel created successfully');

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
        $property = Property::find($id);
        return view('backend.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $property = Property::findOrFail($id);
        $property->title = $request->title;
        $property->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            if ($property->foto) {
                Storage::delete('public/images/property' . $property->foto);
            }
        
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/images/property', $imageName);
            $property->foto = $imageName;
        }

        $property->save();

        return redirect()->route('property.index', $property->id)
                         ->with('success', 'property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::findOrFail($id);

        if ($property->foto) {
            Storage::delete('public/images/property' . $property->foto);
        }

        $property->delete();

        return redirect()->route('property.index')
                         ->with('success', 'property deleted successfully');
    }
}
