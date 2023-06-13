<section>

  <div id="Top" class="top d-flex justify-content-between">
    <h3 class="ms-5 mt-2">Dewa Kulit: Where Quality Leather Meets Style</h3>
    @if (Auth::check())
    <p class="me-5 mt-2">Help | <a href="/profile" class="text-decoration-none text-black">Hi, User! <img
          src="./image/user.png" width="22" height="20" alt=""></a></p>
    @else
    <p class="me-5 mt-2">Help | <a href="/register" class="text-decoration-none text-black">Join Us</a> | <a
        href="/login" class="text-decoration-none text-black">Sign In</a></p>
    @endif
  </div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-none">
    <div class="container-fluid container">
      <a class="navbar-brand" href="/"><img class="logo" src="./image/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5 d-flex justify-content-between">
          <li class="nav-item mx-5">
            <a class="nav-link active" aria-current="page" style="white-space: nowrap;"
              href="{{ url('new-arrival') }}">NEW ARRIVAL</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link" href="{{ url('products') }}">PPRODUCTS</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link" href="{{ url('sale') }}">SALE!</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search">
        </form>

        <a href=""><img src="./image/like.png" class="ms-4 me-2" width="25" alt=""></a>
        <a href=""><img src="./image/bag.png" width="35" alt=""></a>
      </div>
    </div>
  </nav>

  @if (request()->is('/'))
  <div>
    <img src="image/bg1.png" class="img-fluid" style="width: 100%; height: 80%;" alt="Gambar">
  </div>
  @endif

</section>