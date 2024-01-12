@extends('templates/base2')
@section('title','Register')
@section('container')
<div class="container">
    <div class="card">
        <article class="card-body">
            <a href="{{url('login')}}" class="float-right btn btn-outline-primary">Sign In</a>
            <h4 class="card-title mb-4 mt-1">Sign Up</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmation">Password Confirmation</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Password Confirmation">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"  class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </div>
            </form>
        </article>
    </div>
</div>
@endsection