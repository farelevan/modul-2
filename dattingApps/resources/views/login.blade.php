@extends('templates.base2')
@section('title','Login')
@section('container')
<div class="container">
    <div class="card">
        <article class="card-body">
            <a href="{{url('register')}}" class="float-right btn btn-outline-primary">Sign up</a>
            <h4 class="card-title mb-4 mt-1">Sign in</h4>
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/home') }}" method="post">
                @csrf
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </article>
    </div>
</div>
@endsection