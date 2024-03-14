<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceAdd extends Controller
{
  public function purchase()
  {
    return view('Invoice.purchase');
  }
  public function sale()
  {
    return view('Invoice.sale');
  }
}
