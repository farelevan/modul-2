<?php

namespace App\Http\Controllers;

use App\Models\Lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    public function index()
    {
        $losts = Lost::all();
        return view('CRUD.index', compact('losts'));
    }

    public function create()
    {
        return view('CRUD.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'lokasi' => 'required',
            'notelepon' => 'required',
        ]);

        Lost::create($request->all());

        return redirect()->route('losts.index')
            ->with('success', 'Item created successfully.');
    }

    public function show(Lost $lost)
    {
        return view('CRUD.show', compact('lost'));
    }

    public function edit(Lost $lost)
    {
        return view('CRUD.edit', compact('lost'));
    }

    public function update(Request $request, Lost $lost)
    {
        $request->validate([
            'nama_barang' => 'required',
            'lokasi' => 'required',
            'notelepon' => 'required',
        ]);

        $lost->update($request->all());

        return redirect()->route('losts.index')
            ->with('success', 'Item updated successfully');
    }

    public function destroy(Lost $lost)
    {
        $lost->delete();

        return redirect()->route('losts.index')
            ->with('success', 'Item deleted successfully');
    }
}
