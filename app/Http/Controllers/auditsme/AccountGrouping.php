<?php

namespace App\Http\Controllers\auditsme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountGrouping extends Controller
{
  public function index()
  {
    return view('content.auditsme.account-grouping');
  }
}
