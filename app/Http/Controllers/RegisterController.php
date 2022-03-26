<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function SaveData(Request $request){
        echo $request->fname;
    }
}
