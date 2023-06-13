@extends('layouts.structure')

@section('content')
<section id="profile">
  <div class="container">
    <div class="text-center">
      <h1 class="my-5">MY ACCOUNT</h1>
    </div>
    <div class="row">

      <div class="col-5 ps-5 pt-4  left text-center">
        <a href="">
          <h4 class="mb-1 py-3 rounded bg-black">MY ACCOUNT</h4>
        </a>
        <a href="">
          <p class="py-3 border rounded my-1">Dashboard</p>
        </a>
        <a href="/logout">
          <p class="py-3 border rounded my-1">Log out</p>
        </a>
      </div>

      <div class="col-7 ps-5 pt-4 right">
        <p style="height: 70px; padding-top: 22px; background-color: rgba(0, 0, 0, 0.05);">Hello <b>{{ $user->first_name
            . ' ' . $user->last_name }}</b></p>
        <p style="height: 70px; padding-top: 22px; background-color: rgba(0, 0, 0, 0.05);">Account Detail:</p>
        <p>Name: {{ $user->first_name . ' ' . $user->last_name }}</p>
        <hr>
        <p>Email: {{ $user->email }}</p>
        <hr>
        <p>Address: </p>
        <hr>
      </div>

    </div>
  </div>
</section>
@endsection