@extends('layouts.main')

@section('section')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration</h1>
            <form class="form-registration">
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> --}}
                <label for="inputName" class="sr-only">Full name</label>
                <input type="text" id="inputName" class="form-control rounded-top" placeholder="Full name" required autofocus>
                
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" id="inputUsername" class="form-control" placeholder="Username" required>
                
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="name@example.com" required>
                
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control rounded-bottom" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login" data-href="http://e-store.test/login">Login!</a></small>
        </div>
    </div>
@endsection