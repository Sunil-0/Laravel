<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SumController extends Controller
{
    public function Print(Request $request){
        echo ($request->fnum + $request->snum);
    }
}
