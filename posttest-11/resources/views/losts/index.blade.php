<!-- resources/views/losts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Lost And Found</h2>
    <a href="{{ route('losts.create') }}" class="btn btn-primary">Add Item</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Lokasi</th>
                <th>Waktu Ditemukan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($losts as $lost)
                <tr>
                    <td>{{ $lost->id }}</td>
                    <td>{{ $lost->Nama_Barang }}</td>
                    <td>{{ $lost->Lokasi }}</td>
                    <td>{{ $lost->created_at }}</td>
                    <td>
                        <a href="{{ route('losts.show', $lost->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('losts.edit', $lost->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('losts.destroy', $lost->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
