<!-- resources/views/losts/index.blade.php -->

@extends('layouts.app')

@section('content')

    @if (auth()->user()->level=="admin")
        <a href="{{ route('losts.create') }}" class="btn btn-primary">Add Item</a>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Lokasi</th>
                <th>Nomor Telepon</th>
                <th>Waktu Ditemukan</th>
                @if (auth()->user()->level=="admin")
                    <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($losts as $lost)
                <tr>
                    <td>{{ $lost->id }}</td>
                    <td>{{ $lost->nama_barang }}</td>
                    <td>{{ $lost->lokasi }}</td>
                    <td>{{ $lost->notelepon }}</td>
                    <td>{{ $lost->created_at }}</td>
                    @if (auth()->user()->level=="admin")
                        <td>
                            <a href="{{ route('losts.show', $lost->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('losts.edit', $lost->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('losts.destroy', $lost->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
