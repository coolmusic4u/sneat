<?php

namespace App\Http\Controllers\auditsme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyInformation extends Controller
{
  public function index()
  {
    return view('content.auditsme.company-information');
  }
}
