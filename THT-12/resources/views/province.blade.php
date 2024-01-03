<!-- resources/views/province.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List of Provinces</h1>

    <ul>
        @foreach($provinces as $province)
            <li>
                <a href="{{ url('/regencies/' . $province['id']) }}">
                    {{ $province['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
