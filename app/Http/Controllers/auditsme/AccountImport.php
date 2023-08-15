<?php

namespace App\Http\Controllers\auditsme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountImport extends Controller
{
  public function index()
  {
    return view('content.auditsme.account-import');
  }
}
