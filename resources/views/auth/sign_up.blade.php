@extends('customers.layouts.app')
@section('title', 'sign_up')
@section('content')
<div class="container-fluid login-wrap">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-xl-4 col-ms-6 col-sm-12 text-center">
      <div class="form-signin">
        <form action="{{ route('sign_up.store') }}" method="post">
          @csrf
          <img 
            class="mb-4" 
            src="https://cdn-icons-png.flaticon.com/512/6681/6681204.png"
            alt="" 
            width="100" 
            height="100">
          <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        
          <div class="form-floating mt-2">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating mt-2">
            <input type="tet" class="form-control" id="floatingPassword" name="name" placeholder="Password">
            <label for="floatingPassword">User name</label>
          </div>

          <div class="form-floating mt-2">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
{{-- 
          <div class="form-floating mt-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Re-Password</label>
          </div> --}}

          <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign up</button>
        </form>
      </div>

    </div>
    <div class="col-4"></div>
  </div>
</div>
@endsection