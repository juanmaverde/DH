@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card text-center bg-light">
      <div class="card-header">
         <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
               <a class="nav-link active" href="#">Datos</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Antecedentes</a>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="#">extras</a>
            </li>
         </ul>
     </div>
     <div class="card-body">
            <div class="col-12">
               <h3 class="card-title">Dr. Juan Manuel Verde</h3>
               <div class="card-text">
                  <p>Médico Cirujano, HPB - Hospital de Clínicas</p>
               </div>
               <a href="#" class="btn btn-outline-primary btn-sm">detalles del profesional</a>
            </div>
      </div>
      <div class="card-footer">
         <div class="col-8 offset-2">
            <button class="btn btn-sm btn-secondary mr-3">cirugía</button>
            <button class="btn btn-sm btn-secondary mr-3">general</button>
            <button class="btn btn-sm btn-secondary mr-3">digestiva</button>
            <button class="btn btn-sm btn-secondary mr-3">HPB</button>
         </div>
      </div>
   </div>
</div>

<hr>

   {{-- =================================== --}}

   <div class="col-12">
      <button class="btn btn-primary">crear nuevo caso</button>
   </div>
   <hr>

   {{-- =================================== --}}

   <div class="row">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="btn"> </th>
                  <th scope="col">id</th>
                  <th scope="col">Apellido, Nombre</th>
                  <th scope="col">Fecha procedimiento</th>
                  <th scope="col">Procedimiento</th>
                  <th scope="col">Condición</th>
                  <th scope="col">estado</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               @foreach ($procedures as $procedure)
               <tr>
                  <th> 
                     <div class="dropdown">
                        <button class="btn btn-sm btn-danger dropdown-toggle" type="button" id="procedureAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           ...
                        </button>
                        <div class="dropdown-menu" aria-labelledby="procedureAction">
                           <a class="dropdown-item" href="#">editar</a>
                           <a class="dropdown-item" href="#">eliminar</a>
                           <a class="dropdown-item" href="#">duplicar</a>
                        </div>
                     </div>
                  </th>
                  <td> {{ $procedure->id }} </td>
                  <td><a href=""> {{ $procedure->patient_last_name }}, {{ $procedure->patient_name }} </a></td>
                  <td><a href=""> {{ $procedure->procedure_name }} </a></td>
                  <td><a href=""> {{ $procedure->procedure_date }} </a></td>
                  <td><a href=""> {{ $procedure->patient_status }} </a></td>
                  <td><a href=""> {{ $procedure->case_status }} </a></td>
                  <td><small><a href="/procedures/{{ $procedure->id }}"><em>detalles</em></a></small></td>
               </tr>
               @endforeach
            </tbody>
         </table>
   </div>
@endsection
