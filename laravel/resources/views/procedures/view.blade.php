@extends('layouts.app')

@section('content')

   <div class="container" style="width: 75%;">
      <div class="card">
         <div class="card-body">
            <div class="card-title  ml-3">
               <h3 class="card-title"><a href="">{{ $procedure->patient_last_name }}, {{ $procedure->patient_name }}</a> - <a href="">{{ $procedure->procedure_name }}</a></h3>
            </div>
            <hr>
            <div class="container ml-3">
               <p>Fecha operación: <a href="">{{ $procedure->procedure_date }}</a></p>
               <p>Duración: 32 minutos</p>
               <div class="row">
                  <div class="col">Cirujano: <a href="">Juan Manuel Verde</a></div>
                  <div class="col">Ayudante: <a href="">Maximiliano Loviscek</a></div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-4">
                     <p class="text-muted text-center">adherencias</p>
                     <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
                  <div class="col-4">
                     <p class="text-muted text-center">visión crítica de seguridad</p>
                     <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
                  <div class="col-4">
                     <p class="text-muted text-center">dificultad</p>
                     <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>

               <hr>
               <h5>Detalles del procedimiento:</h5>
               <p class="card-text text-justify">
                  Decúbito dorsal.  <a href="">Anestesia general</a> c/ IOT. Asepsia de la piel. Colocación de campos estériles.
                  <a href="">Incisión arqueada umbilical</a> de 1cm y neumoperitoneo con técnica cerrada con aguja protegida (Veress).Se colocan puertos bajo visión directa: umbilical 12mm / subxifoideo 10mm / flanco derecho 5mm x2
                  Laparoscopía exploradora cavitaria completa. <a href="">Hallazgos:</a> VB hidrópica de dificil manipulacion aumentada de tamano que llega a FID / adherencias periVB / quistes hepáticos que impresionan quistes simples en segmentos V y VI
                  <a href="">Punción y aspiración de VB. Destechamiento y periquistectomía quiste H segm V de 5 cm de diámetro mayor.</a> Hemostasia s/p.
                  Disección del trígono cisto-hepático y reconocimiento de arteria cística (AC) y conducto cístico (CC). Se constata visión crítica de seguridad por el cirujano y ayudante.
                  Doble clipado proximal y simple distal de AC y CC. Cisticotomía y arteriotomía.
                  Disección vesicular desde cuello a fondo y despegamiento del lecho hepático. <a href="">Colecistectomía por puerto subXif.</a>
                  Lavado cavitario y aspiración. Hemostasia s/pp. Laparoscopía exploradora s/pp. Se retiran los puertos bajo visión directa. 
                  Cierre de HQ umbilical con poliglactina 1. Cierre de piel con ID nylon 3.0 Curaciones planas estériles de HQ´s.
               </p>
            </div>
            <hr>
            <div class="row">
               <div class="col-2">
                  <button class="btn btn-xs btn-primary">laparoscopia</button>
               </div>
               <div class="col-2">
                  <button class="btn btn-xs btn-primary">HPB</button>
               </div>
               <div class="col-2">
                  <button class="btn btn-xs btn-primary">VesiculaBiliar</button>
               </div>
               <div class="col-2">
                  <button class="btn btn-xs btn-primary">Litiasis</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   
@endsection
