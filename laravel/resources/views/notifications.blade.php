@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row">
      <div class="col-md-3">
         <div class="card text-white bg-primary mb-1">
           <div class="card-header bg-primary"><h4>Gomez, Ramiro - hernioplastia lap</h4></div>
           <div class="container">
             <button class="btn btn-xs btn-danger">recordar</button>
           </div>
           <div class="card-body">
             <p class="card-text mx-auto px-3">Hacer el pedido de materiales:</p>
             <ul>
                <li>malla polipropileno porosa</li>
                <li>tackers</li>
             </ul>
           </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card text-white bg-success mb-1">
           <div class="card-header bg-success"><h4>Zamolo, Sofia - Cx anti-reflujo (Nissen)</h4></div>
           <div class="container">
             <button class="btn btn-xs btn-primary">facturar</button>
           </div>
           <div class="card-body">
             <p class="card-text mx-auto px-3">Facturar a OSDE:</p>
             <ul>
                <li>Plan 410</li>
                <li>62 67263 28362 7863</li>
             </ul>
           </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card text-white bg-warning mb-1">
           <div class="card-header bg-warning"><h4>Seminario, Romina - hepatectomía izquierda</h4></div>
           <div class="container">
             <button class="btn btn-xs btn-success">revisar</button>
           </div>
           <div class="card-body">
             <p class="card-text mx-auto px-3">Revisar estudios complementarios:</p>
             <ul>
                <li>Volum. Hep.</li>
                <li>PET scan vs. RM dif</li>
             </ul>
           </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card text-white bg-warning mb-1">
           <div class="card-header bg-warning"><h4>Sanchez de Loria, Guillermo - esofaguectomía?</h4></div>
           <div class="container">
             <button class="btn btn-xs btn-success">revisar</button>
           </div>
           <div class="card-body">
             <p class="card-text mx-auto px-3">Decidir conducta</p>
             <ul>
                <li>gastrectomía vs. esofaguectomía</li>
             </ul>
           </div>
         </div>
      </div>
   </div>
</div>
      
   

@endsection('content')