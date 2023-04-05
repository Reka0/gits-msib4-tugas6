@extends('layout/template')
@section('konten')
    <br><div class="w-50 center border rounded px-3 py-3 mx-auto">
        <form action="/sesi/create" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal" style="text-align: center"> Sign up</h1>
            <div class="form-floating">
              <input type="name" name="name" class="form-control" value="{{ Session::get('name') }}"  placeholder="Your name">
              <label for="text">Name</label>
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}"  placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <div class="checkbox mb-3">
              <p style="text-align: center">Have an account <a href="/sesi">Sign in</a></p>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
          </form>
        </div>
@endsection
