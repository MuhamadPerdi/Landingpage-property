<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Dashboard')</title>

 @include('backend.layouts.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('backend.layouts.navbar')
      @include('backend.layouts.sidebar')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>@yield('header')</h1>
      </div>
      <div class="section-body">
        @yield('content')
      </div>
    </section>
  </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="#">Perdi</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  @include('backend.layouts.scripts')
  @stack('scripts')
  
</body>
</html>