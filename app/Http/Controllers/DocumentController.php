<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function documents(Request $request)
    {
        $name = $request->file->name;
        $request->file->storeAs('public/documents' , $name);
    }
}
