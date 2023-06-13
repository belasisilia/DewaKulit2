@extends('layouts.auth.structure')

@section('content')

@if (session()->has('success'))
<script>
  Swal.fire({
    icon: 'success',
    text: "You're successfully registered!",
    confirmButtonText: 'OK!'
  })
</script>
@endif

@if ($errors->any())
<script>
  Swal.fire({
    title: 'Error!',
    html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
    icon: 'error',
    confirmButtonText: 'OK!'
  })
</script>
@endif

<div class="main-w3layouts wrapper">
  <h1>DEWA KULIT</h1>
  <h2>Create your DewaKulit Member profile and get</h2>
  <h2>first access to the very best of DewaKulit</h2>
  <h2>products, event and promotion.</h2>
  <div class="main-agileinfo">
    <div class="agileits-top">
      <form action="/login" method="post">
        @csrf
        <input class="text" type="email" name="email" placeholder="Email Address" required="" />
        <input class="text email" type="password" name="password" placeholder="Password" required="" />
        <input type="submit" value="SIGNIN" />
      </form>
      <p>Don't have an Account? <a href="/register"> Register Now!</a></p>
    </div>
  </div>
  <!-- copyright -->
  <div class="colorlibcopy-agile">
    <p>
      © 2018 Colorlib Signup Form. All rights reserved | Design by
      <a href="https://colorlib.com/" target="_blank">Colorlib</a>
    </p>
  </div>
</div>
@endsection