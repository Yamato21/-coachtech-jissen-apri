<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use App\Http\Requests\todoRequest;

class todoController extends Controller
{
    public function index() {
    $indexs = todo::all();
    return view('index',['indexs' => $indexs]);
    }

    public function create(todoRequest $request)
    {
        $form = $request->all();
        todo::create($form);
        return redirect('/');
    }

    public function update(todoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        todo::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $id = todo::find($request->id);
        $id -> delete();
        return redirect('/');
    }
}