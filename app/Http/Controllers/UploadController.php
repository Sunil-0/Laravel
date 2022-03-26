<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,doc,jpg,jpeg,csv,txt,xls,pdf|max:2048'
            ]);
        $request->file->store('public/uploads');
        return "File has been uploaded";
    }
}
