<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liste;

class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = Liste::all();

        return view('listes.index', compact('listes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomList' => 'required|max:50',
        ]);

        Liste::create($request->all());

        return redirect()->route('listes.index')
            ->with('success', 'La liste a bien été créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idList)
    {
        $liste = Liste::find($idList);

        return view('listes.show', compact('liste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idList)
    {
        $liste = Liste::find($id);

        return view('listes.edit', compact('liste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idList)
    {
        $request->validate([
            'nomList' => 'required|max:50',
        ]);

        $liste = Role::find($idList);
        $liste->update($request->all());

        return redirect()->route('listes.index')
            ->with('success', 'La liste a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $liste = Liste::find($idList);
        $liste->delete();

        return redirect()->route('listes.index')
            ->with('success', 'La liste a bien été supprimé.');
    }
}
