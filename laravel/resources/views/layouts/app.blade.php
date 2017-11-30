<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="juanmaverde">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'M3D.solutions') }}</title>

      {{--  Favicon --}}
      <link rel="icon" href="{{ asset('m3d_favicon.ico') }}">

      <!-- Styles -->
      {{-- Bootstrap 4 // CDN --}}
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>

   <body>
      <div id="app">
         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
               <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                     <span class="sr-only">Navegación</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/') }}">
                           {{ config('app.name', 'M3D.solutions') }}
                  </a>
               </div>

               <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                        &nbsp;
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav nav-pills navbar-right">
                     <!-- Authentication Links -->
                     @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Acceso</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
                     @else
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                              {{ Auth::user()->name }} <span class=""></span>
                           </a>

                           <ul class="dropdown-menu">
                              <li>
                                 <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                 </a>
                                 <a href="">mis datos</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                 </form>
                              </li>
                           </ul>
                        </li>
                     @endguest
                  </ul>
               </div>
            </div>
         </nav>

         <div class="container">
            @yield('content')
         </div>

         <div class="container">
            @yield('footer')
         </div>

      </div>

       <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      {{-- JQUERY --}}
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   </body>
</html>
