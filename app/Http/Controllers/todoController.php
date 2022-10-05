<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use App\Http\Requests\todoRequest;

class todoController extends Controller
{
    public function index(Request $Request) {
    $indexs = todo::all();
    return view('index',['indexs',$indexs]);
    }
}
