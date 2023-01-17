<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function document(Request $request)
    {
        $name = $request->file->name;
        $request->file->storeAs('public/documents' , $name);
    }
}
