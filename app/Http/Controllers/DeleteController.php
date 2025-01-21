<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    function index(Request $request)
    {
        $id=$request->keys()[2];
          $list = Todolist::find($id);


    $list->delete();

        return redirect()->route('todo_list.index');

    }
    function edit(Request $request)
    {
        $id=$request->keys();
        $list=Todolist::find($id[0]);
    return view('admin.edit-task',compact('list'));


    }
    function update(Request $request)
    {
        $list=Todolist::find($request->all()["id"]);
        $list->name = $request->all()['name'];
        $list->description = $request->all()['description'];
        $list->status = $request->all()['status'];
        $list->priority = $request->all()['priority'];
        $list->save();

        return redirect()->route('todo_list.index');
    }
}
