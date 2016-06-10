<html>
  <head>
    <title>About</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/foundation.js"></script>
    <script src="/js/vendor/what-input.js"></script>
  </head>
  <body>

    <div id="nav_bar" class="row">
      <div id="upper_menu">
        <ul>
          <a href="#" class="not-last"> <li>Account</li> </a>
          <a href="#" class="not-last"> <li>Settings</li> </a>
          <a href="#"> <li>Logout</li> </a>
        <ul>
      </div>
        <div class="small-12 large-12 columns" id="main_menu">
        <ul>
          <a href="/"> <li>~/home</li> </a>
          <a href="about"> <li>~/about</li> </a>
          <a href="user"> <li>~/usr</li> </a>
          <a href="#"> <li>~/var/log</li> </a>
          <a href="#"> <li>~/null</li> </a>
        </ul>
    </div>
  </div>
  <div class="row">
    <div class="small-12 large-12 columns">

        @yield('content')

        @yield('footer')
        
    </div>
  </div>



  </body>
</html>
