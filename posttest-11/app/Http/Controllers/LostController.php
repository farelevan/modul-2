<?php

namespace App\Http\Controllers;

use App\Models\Lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    public function index()
    {
        $losts = Lost::all();
        return view('losts.index', compact('losts'));
    }

    public function create()
    {
        return view('losts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Barang' => 'required',
            'Lokasi' => 'required',
        ]);

        Lost::create($request->all());

        return redirect()->route('losts.index')
            ->with('success', 'Item created successfully.');
    }

    public function show(Lost $lost)
    {
        return view('losts.show', compact('lost'));
    }

    public function edit(Lost $lost)
    {
        return view('losts.edit', compact('lost'));
    }

    public function update(Request $request, Lost $lost)
    {
        $request->validate([
            'Nama_Barang' => 'required',
            'Lokasi' => 'required',
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
