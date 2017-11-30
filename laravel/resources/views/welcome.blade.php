@extends('layouts.app')

@section('content')
      <div class="jumbotron text-center">
         <h1>M3D.solutions</h1>
      </div>
      <div class="container">
         <img class="img-fluid" src="http://via.placeholder.com/2000x150" alt="placeholder">
      </div>
@endsection

@section('footer')
   <div class="container">
      <div class="footer text-right">
         <hr>
         <div class="col-md-4">
            @foreach ($links as $link => $text)
               {{-- <li class="nav-item"> --}}
                  <a class="nav-link text-center" href="{{ $link }}"> {{ $text }}</a>
               {{-- </li> --}}
            @endforeach
         </div>
         <div class="col-md-4">
            @foreach ($links as $link => $text)
               {{-- <li class="nav-item"> --}}
                  <a class="nav-link text-center" href="{{ $link }}"> {{ $text }}</a>
               {{-- </li> --}}
            @endforeach
         </div>
         <div class="col-md-4">
            @foreach ($links as $link => $text)
               {{-- <li class="nav-item"> --}}
                  <a class="nav-link text-center" href="{{ $link }}"> {{ $text }}</a>
               {{-- </li> --}}
            @endforeach
         </div>
      </div>
   </div>
   <hr>
   <div class="col-md-12">
      <p class="text-center">M3D.solutions - todos los derechos reservados</p>
   </div>
@endsection
