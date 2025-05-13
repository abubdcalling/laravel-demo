<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowController extends Controller
{
    // Show all userspublic function index()
    public function index()
    {

        return response()->json([
            'message' => 'hello world'
        ]);
    }


   
}
