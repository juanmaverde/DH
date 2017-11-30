@extends('layouts.app')

@section('content')
   @if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
   @endif

   <div class="container">
      <div class="row">
         <div class="col-2">
            <nav class="navbar">
               <ul class="navbar-nav mr-auto" >
                  <li class="nav-item active"><a class="nav-link" href="/notifications">Centro de Notificaciones</a></li>
                  <li class="nav-item active"><a class="nav-link" href=""></a>Procedimientos</li>
                  <li class="nav-item active"><a class="nav-link" href=""></a>Formularios</li>
                  <li class="nav-item active"><a class="nav-link" href=""></a>Métricas individuales</li>
                  <li class="nav-item active"><a class="nav-link" href=""></a>Uploader / Downloader</li>
                  <li class="nav-item active"><a class="nav-link" href=""></a>Contactos</li> 
                  <li class="nav-item active"><a class="nav-link" href=""></a>Mi cuenta</li>
               </ul>
            </nav>
         </div>
         <div class="col-10">
            <div class="row">
               <div class="col mb-5">
                  <img class="img-fluid mx-auto" src="{{ asset('ColecistLap.png') }}" alt="cronologia">
               </div>
            </div>
            <div class="row">
               <div class="col mb-5">
                  <img class="img-fluid mx-auto" src="{{ asset('Herniop.png') }}" alt="cronologia">
               </div>
            </div>
            <div class="row justify-content-around">
               <div class="col mb-5">
                  <img class="img-fluid mx-auto" src="{{ asset('Crono.png') }}" alt="total">
               </div>
               <div class="col mb-5">
                  <img class="img-fluid mx-auto" src="{{ asset('GrupoEt.png') }}" alt="total">
               </div>
            </div>
         </div>
      </div> 
   </div>
         
@endsection
