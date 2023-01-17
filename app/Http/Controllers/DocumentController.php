<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function documents(Request $request)
    {
        $name = $request->photo->name;
        $request->photo->storeAs('public/documents' , $name);
    }
}
