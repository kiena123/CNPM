@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" />
@endsection

@section('MainListItem')
  <div>
      <h4>Register</h4>
  </div>
  <section class="list-item justify-content-center">
    <form class="my-3" method="POST" action="./processregister">
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="fullname" id="fullname" class="form-control" name="fullname" />
        <label class="form-label" for="fullname">Fullname</label>
      </div>
      
      <!-- address input -->
      <div class="form-outline mb-4">
        <input type="text" id="address" class="form-control" name="address" />
        <label class="form-label" for="address">Address</label>
      </div>

      <!-- email input -->
      <div class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="email" />
        <label class="form-label" for="email">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="password" name="password" class="form-control" />
        <label class="form-label" for="password">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <!-- Simple link -->
        <!-- 
      <div class="row mb-4">
        <div class="col">
          <a href="#!">Forgot password?</a>
        </div> 
      </div> 
        -->
      <div class="row mb-4">
        <div class="col text-danger">
          @php
            echo(Session::get('error'));
          @endphp
        </div> 
      </div> 
      @csrf
      <!-- Submit button -->
      <a href="">
        <button type="submit" class="btn btn-primary btn-block mb-4">
          Register
        </button>
      </a>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Have account ? <a href="/login">Login</a></p>
      </div>
    </form>
  </section>
@endsection