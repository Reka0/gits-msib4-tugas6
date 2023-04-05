@extends('layout/template')
@section('konten')
    <br><div class="w-50 center border rounded px-3 py-3 mx-auto">
    <form action="/sesi/login" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal" style="text-align: center">Please Sign in</h1>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}"  placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <div class="checkbox mb-3">
          <p style="text-align: center">Don't have an account? <a href="sesi/register">Sign up</a></p>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      </form>
    </div>
@endsection
