<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
   {
      $links = [
         'http://m3d.solutions' => 'm3d.solutions',
         'http://m3d.doctor' => 'm3d.doctor',
         'http://m3d.website' => 'm3d.website'
      ];
      return view('welcome', [
      'links' => $links,
      ]);
   }
   public function about()
   {
      return view('about');
   }
}
