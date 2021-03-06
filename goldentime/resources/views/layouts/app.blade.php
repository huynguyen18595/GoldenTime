<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
        <script src="{{ asset('js/jquery.js') }}" ></script>
        <script src="{{ asset('js/homepage.js')}}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{asset('css/myhelper.css')}}" rel="stylesheet">
        <style media="screen">
          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Shadows Into Light', cursive;
              font-weight: bold;
              height: 100vh;
              margin: 0;
          }
          body{
            background-image: url("images/background.jpg");
            background-repeat: no-repeat;
          }
          .logo{
            height:63.8px;
            width: 240px;
          }
          .title{
            font-family: 'Shadows Into Light', cursive;
          }
          .button-style{
            font-family: 'Shadows Into Light', cursive;
            font-weight: bold;
          }
          audio{
            width: 400px;
          }
          #playlist{background:#666;width:400px;padding:20px;}
          .active a{color:#ffcc00;text-decoration:none;}
          li a{color:#eeeedd;background:#333;padding:5px;display:block;}
          li a:hover{text-decoration:none;color:#ffcc00}
        </style>
        <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', () => {
            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

              // Add a click event on each of them
              $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                  // Get the target from the "data-target" attribute
                  const target = el.dataset.target;
                  const $target = document.getElementById(target);

                  // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                  el.classList.toggle('is-active');
                  $target.classList.toggle('is-active');

                });
              });
            }

          });
        </script>

</head>
<body>
    <div>
        <nav class="navbar " role="navigation" aria-label="main navigation">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Bulma: a modern CSS framework based on Flexbox" class="logo">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <!-- Here is where we put the navigation buttons -->
              <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item" href="{{url('/home')}}">LESSON</a>
                  <a class="navbar-item" href="{{url('/game')}}">PICTIONARY-GAME</a>
                  <a class="navbar-item" href="#">MY_GRADES</a>
                </div>

              </div>
              <!-- Authentication Links -->
              @guest
              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="field is-grouped">
                    <p class="control">
                      <a class="button is-outlined" href="{{route('login')}}"> <!--this is login button -->
                        <span class="icon">
                          <i class="fas fa-sign-in-alt"></i>
                        </span>
                        <span>
                          Login
                        </span>
                      </a>
                    </p>
                    <p class="control">
                      <a class="button is-outlined" href="{{route('register')}}">
                        <span class="icon">
                          <i class="fas fa-user-plus"></i>
                        </span>
                        <span>Sign up</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              @else
              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="field is-grouped">
                    <p class="control">
                      <a href="#" class="button is-outlined" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                      </a>
                    </p>
                    <p class="control">
                      <a class="button is-outlined" href="{{ url('/logout') }}">
                        <span>
                          <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span>
                          Logout
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
