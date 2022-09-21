@extends('layout.layout')
@section('content')
    <div class="row m-5">
        <div class="col-6 offset-3">
            <h2>Registration Form</h2>
            <form action="bootstrapform.php" method="post">
                <div class="form-group mt-3">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="exampleInputfirstname" name="firstname">
                </div>
                <div class="form-group mt-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputlastname" name="lastname">
                </div>
                <div class="form-group mt-3">
                    <label for="phoneno">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputphoneno" name="phoneno">
                </div>
                <div class="form-group mt-3">
                    <label for="Email1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group mt-3">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password">
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="create">Sign up</button>
            </form>
        </div>
    </div>

@endsection