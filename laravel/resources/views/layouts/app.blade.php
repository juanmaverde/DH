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
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>

   <body>
      <div id="app">
         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
               <div class="navbar-header">
               <!-- Collapsed Hamburger -->
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
                  <ul class="nav">
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
      </div>

         <div class="container">
            @yield('content')
         </div>

         <div class="container">
            @yield('footer')
         </div>

      </div>

       <!-- Scripts -->
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
      <script src="{{ asset('js/jquery-slim.min.js') }}"></script>
      <script src="{{ asset('js/tether.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       
      <script src="{{ asset('js/app.js') }}"></script>

   </body>
</html>
