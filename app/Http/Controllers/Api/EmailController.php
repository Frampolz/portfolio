<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
