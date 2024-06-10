<header class="navigation fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
      <a class="navbar-brand order-1" href="index.html">
        <img class="img-fluid" width="100px" src="{{ asset('assets/client/images/logo.png') }}"
          alt="Reader | Hugo Personal Blog Template">
      </a>
      <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index-full.html">homepage</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about-me.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item" >
          <nav style= "margin-left: 500px;">
        @if (!is_logged())
            <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
        @endif

        @if (is_logged())
            <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>

        @endif
        
    </nav>
          </li>
        </ul>
      </div>

      <body>
    
    

</body>

    </nav>
  </div>
</header>