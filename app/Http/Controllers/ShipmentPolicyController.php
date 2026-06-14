<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentPolicyController extends Controller
{
    public function index()
    {
        return view('shipmentpolicy');
    }
}