<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{asset('js/homepage.js')}}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
        <script src="{{ asset('js/jquery.js') }}" ></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{asset('css/myhelper.css')}}" rel="stylesheet">
        <style>
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
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }



            .m-b-md {
                margin-bottom: 30px;
            }
            .img-h-w{
              padding: 0px;
              margin:0px;
              height:20%;
              width:30%;
            }
            p{
              text-align: center;
              font-size: 22px;
            }

        </style>
        <style type="text/css">

          #apDiv1 {
            position:relative;
            top:20px;
            bottom: 20px;
            margin-bottom: 30px;
            width:360px;
            z-index:1;
          }
          .title-1{
            font-family: Shadows Into Light;
          }
          .result{
            background-color: #d6d6c2;
            color: red;

          }
          .logo{
            height:63.8px;
            width: 240px;
          }
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
                <a class="navbar-item is-active" href="{{url('/game')}}">PICTIONARY-GAME</a>
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
        <p class=" title title-1">Memory Testing</p>
          <!-- we leave the question here -->
          <div class="columns">
            <div class="column">
            </div>
            <div class="column">
            </div>
            <div class="column">
              <div class="txt-box">
                Which year have these photos been taken?
              </div>
            </div>
            <div class="column">
            </div>
            <div class="column">
            </div>
          </div>
          <div class="columns">
            <div class="column">
            </div>
            <div class="column">
            </div>
            <div class="column">
              <!-- question 1   -->
              <div id="apDiv1">
                <form action="" method="get" name="form" >
                  <div class="frame ">
                    <img  class="img-setup" border="0" src="/images/Blue_Bell_Hotel Gladstone_ca_1916.jpg" width="300" height="300">
                    <p class="text-frame"> the Blue Bell Hotel , Gladstone</p>
                    <div class="select is-dark">
                      <select id="test1" class="is-dark is-outlined">
                        <option value ="1915">year 1915</option>
                        <option value ="1916">year 1916</option>
                        <option value ="1917">year 1917</option>
                        <option value ="1925">year 1925</option>
                      </select>
                    </div>
                      <button type="button" name="button" class="button is-dark" onclick="check1()">Submit</button>  <p id="demo1" class="result"></p>
                  </div>
                </form>
              </div>
              <!--question 2  -->
              <div id="apDiv2">
                <form action="" method="get" name="form" >
                  <div class="frame ">
                    <img  class="img-setup" border="0" src="/images/Enoggera_Army_Camp_ca_1915.jpg" width="300" height="300">
                    <p class="text-frame">Enoggera Army Camp</p>
                    <div class="select is-dark " >
                      <select id="test2" class="is-dark is-outlined ">
                        <option value ="1915">year 1915</option>
                        <option value ="1916">year 1916</option>
                        <option value ="1917">year 1917</option>
                        <option value ="1918">year 1918</option>
                      </select>
                    </div>
                    <button type="button" name="button" class="button is-dark" onclick="check2()">Submit</button>  <p id="demo2" class="result"></p>
                  </div>
                </form>
              </div>
              <!-- question 3 -->
              <div id="apDiv3">
                <form action="" method="get" name="form" >
                  <div class="frame ">
                    <img  class="img-setup" border="0" src="/images/Anzac_Day_at_Manly_1922.jpg" width="300" height="300">
                    <p class="text-frame">Anzac_Day_at_Manly</p>
                    <div class="select is-dark">
                      <select id="test3" class="is-dark is-outlined" >
                        <option value ="1915">year 1915</option>
                        <option value ="1916">year 1916</option>
                        <option value ="1922">year 1922</option>
                        <option value ="1925">year 1925</option>
                      </select>
                    </div>
                  <button type="button" name="button" class="button is-dark" onclick="check3()">Submit</button>  <p id="demo3" class="result"></p>
                  </div>
                </form>
              </div>
              <!-- question 4  -->
              <div id="apDiv4">
                <form action="" method="get" name="form">

                  <div class="frame ">
                    <img  class="img-setup" border="0" src="/images/Jim_Owens_Chevrolet_truck_off_the_road_in_the_Nambour_district_ca_1925.jpg" width="300" height="300">
                    <p class="text-frame">truck off the road in Nambour district</p>
                    <div class="select is-dark">
                      <select id="test4" class="is-dark is-outlined" >
                        <option value ="1915">year 1915</option>
                        <option value ="1916">year 1916</option>
                        <option value ="1917">year 1917</option>
                        <option value ="1925">year 1925</option>
                      </select>
                    </div>
                    <button type="button" name="button" class="button is-dark" onclick="check4()">Submit</button>  <p id="demo4" class="result"></p>
                  </div>
                </form>
              </div>

                <a href="{{url('/home')}}" class="button back-to-home is-large is-rounded is-dark" >Back to Home</a>

            </div>
            <div class="column">
            </div>
            <div class="column">
            </div>
          </div>
          <!-- we keeep the result popup of the game here-->
          <div class="element">

          </div>


    </body>
</html>
