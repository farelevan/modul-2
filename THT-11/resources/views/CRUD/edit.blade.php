<!-- resources/views/losts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Item</h2>
    <form action="{{ route('losts.update', $lost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $lost->nama_barang }}" required>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $lost->lokasi }}" required>
        </div>
        <div class="mb-3">
            <label for="notelepon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="notelepon" name="notelepon" value="{{ $lost->notelepon }}" required pattern="\d*">
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
@endsection
