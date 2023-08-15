<?php

namespace App\Http\Controllers\auditsme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditLetter extends Controller
{
  public function index()
  {
    return view('content.auditsme.audit-letter');
  }
}
