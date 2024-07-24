<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.artikel.create');
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
            $request->foto->storeAs('public/images/artikel', $imageName);
        }
        Artikel::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'foto' => $imageName,
        ]);

        return redirect()->route('artikel.index')
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
        $artikel = Artikel::find($id);
        return view('backend.artikel.edit', compact('artikel'));
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

        $artikel = Artikel::findOrFail($id);
        $artikel->title = $request->title;
        $artikel->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            if ($artikel->foto) {
                Storage::delete('public/images/artikel' . $artikel->foto);
            }
        
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/images/artikel', $imageName);
            $artikel->foto = $imageName;
        }

        $artikel->save();

        return redirect()->route('artikel.index', $artikel->id)
                         ->with('success', 'artikel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = artikel::findOrFail($id);

        if ($artikel->foto) {
            Storage::delete('public/images/artikel' . $artikel->foto);
        }

        $artikel->delete();

        return redirect()->route('artikel.index')
                         ->with('success', 'artikel deleted successfully');
    }
}
