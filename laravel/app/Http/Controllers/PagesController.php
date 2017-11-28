<?php

namespace App\Http\Controllers;

use App\Procedure;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
   {
      $links = [
         'http://m3d.solutions' => 'm3d.solutions',
         'http://m3d.doctor' => 'm3d.doctor',
         'http://m3d.website' => 'm3d.website',
         '/procedures' => 'sus casos'
      ];
      return view('welcome', [
      'links' => $links,
      ]);
   }
   public function about()
   {
      return view('about');
   }
   public function procedures()
   {
      $procedures = Procedure::all();

      return view('procedures', [
         'procedures' => $procedures,
      ]);
   }
   public function dashboard()
   {
      return view('dashboard');
   }
}
