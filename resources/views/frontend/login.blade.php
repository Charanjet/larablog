@extends('layout.layout')
@section('content')
    <div class="row m-5">
        <div class="col-6 offset-3 " >
            <h2 class="text-center">Login</h2>
            <form method="post" action="{{ route('loginPost') }}" >
                @csrf
                <div class="mb-3">
                    <label for="user-email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="user-email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection