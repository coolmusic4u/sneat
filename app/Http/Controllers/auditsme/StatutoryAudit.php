<?php

namespace App\Http\Controllers\auditsme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatutoryAudit extends Controller
{
  public function index()
  {
    return view('content.auditsme.statutory-audit');
  }
}
