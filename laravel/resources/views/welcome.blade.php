@extends('layouts.app')

@section('content')
      <div class="jumbotron text-center">
         <h1>M3D.solutions</h1>
         <nav>
            <ul class="nav nav-pills">
               <li class="nav-item">
                  <a class="nav-link" href="/"><strong>inicio</strong></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/about">Acerca de M3D.solutions</a>
               </li>
               <li class="nav-item">
                  @foreach ($links as $link => $text)
                  {{-- <li class="nav-item"> --}}
                     <a class="nav-link" href="{{ $link }}"> {{ $text }}</a>
                  {{-- </li> --}}
                  @endforeach
               </li>
            </ul>
         </nav>
      </div>
@endsection
