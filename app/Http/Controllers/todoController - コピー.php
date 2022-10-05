<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use App\Http\Requests\todoRequest;

class todoController extends Controller
{
    public function index() {
    $indexs = todo::get();
    return view('index',compact('indexs'));
    }

    public function add(){
        return view('add');
    }

    public function create(todoRequest $request) {
    $form = $request->all();
    todos::create($from);
    return redirect('/');
    }

    public function edit(Request $request)
    {
        $id = Author::find($request->id);
        return view('update', ['form' => $id]);
    }

    public function update(todoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::where('id', $request->id)->update($form);
        return redirect('/');
    }

     public function delete(Request $request)
    {
        $id = Author::find($request->id);
        return view('del', ['form' => $id]);
    }
    public function remove(Request $request)
    {
        Author::find($request->id)->delete();
        return redirect('/');
    }
}