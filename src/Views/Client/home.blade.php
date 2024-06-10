
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
</head>

<body>
    
    <h1>Welcome {{ $name }} to my website!</h1>
    
    
    <nav>
        @if (!is_logged())
            <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
        @endif

        @if (is_logged())
            <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>

        @endif
        
    </nav>

</body> -->
 

</html>
<!DOCTYPE html>

<html lang="en-us"><head>
  <meta charset="utf-8">
  <title>Reader | Hugo Personal Blog Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- plugins -->
  @include('layouts.parials.css')

  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>
<body>
  <!-- navigation -->
  @include('layouts.parials.nav')
<!-- /navigation -->

@include('layouts.parials.banner')

<section class="section-sm">
  <div class="container">
    <div class="row no-gutters">
      
      <div class="col-lg-4 col-sm-6 author-block">
        <div class="author-card text-center">
          
          <img class="author-image" src="{{ asset('assets/client/images/instagram/1.jpg') }}">
          
          <h3 class="mb-2"><a href="author-single.html" class="post-title">Charls Xaviar</a></h3>
          <p class="mb-3">Author &amp; developer of Bexer, Biztrox theme</p>
          
          <a class="post-count" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span class="text-primary">2</span> Posts by this author</a>
          <ul class="list-inline social-icons">
            
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 author-block">
        <div class="author-card text-center">
          
          <img class="author-image" src="{{ asset('assets/client/images/instagram/1.jpg') }}">
          
          <h3 class="mb-2"><a href="author-single.html" class="post-title">Danny Mark</a></h3>
          <p class="mb-3">Author &amp; developer of Bexer, Biztrox theme</p>
          
          <a class="post-count" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span class="text-primary">0</span> Posts by this author</a>
          <ul class="list-inline social-icons">
            
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 author-block">
        <div class="author-card text-center">
          
          <img class="author-image" src="{{ asset('assets/client/images/instagram/1.jpg') }}">
          
          <h3 class="mb-2"><a href="author-single.html" class="post-title">John Doe</a></h3>
          <p class="mb-3">Author &amp; developer of Bexer, Biztrox theme</p>
          
          <a class="post-count" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span class="text-primary">3</span> Posts by this author</a>
          <ul class="list-inline social-icons">
            
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 author-block">
        <div class="author-card text-center">
          
          <img class="author-image" src="{{ asset('assets/client/images/instagram/1.jpg') }}">
          
          <h3 class="mb-2"><a href="author-single.html" class="post-title">Kate Stone</a></h3>
          <p class="mb-3">Author &amp; developer of Bexer, Biztrox theme</p>
          
          <a class="post-count" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span class="text-primary">3</span> Posts by this author</a>
          <ul class="list-inline social-icons">
            
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 author-block">
        <div class="author-card text-center">
          
          <img class="author-image" src="{{ asset('assets/client/images/instagram/1.jpg') }}">
          
          <h3 class="mb-2"><a href="author-single.html" class="post-title">Mark Dinn</a></h3>
          <p class="mb-3">Author &amp; developer of Bexer, Biztrox theme</p>
          
          <a class="post-count" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span class="text-primary">1</span> Posts by this author</a>
          <ul class="list-inline social-icons">
            
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 author-block">
        <div class="author-card text-center">
          
          <img class="author-image" src="{{ asset('assets/client/images/instagram/1.jpg') }}">
          
          <h3 class="mb-2"><a href="author-single.html" class="post-title">Scarlet Witch</a></h3>
          <p class="mb-3">Author &amp; developer of Bexer, Biztrox theme</p>
          
          <a class="post-count" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span class="text-primary">0</span> Posts by this author</a>
          <ul class="list-inline social-icons">
            
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            
            <li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
            
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</section>

  @include('layouts.parials.footer')


  <!-- JS Plugins -->
  @include('layouts.parials.js')
</html>

