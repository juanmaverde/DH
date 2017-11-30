<?php

namespace App\Http\Controllers;

use App\Procedure;
use Illuminate\Http\Request;

class ProceduresController extends Controller
{
    public function view(Procedure $procedure)
    {
      return view('procedures.view', [
         'procedure' => $procedure,
      ]);
    }
}
