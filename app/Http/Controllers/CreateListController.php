<?php

namespace App\Http\Controllers;

use App\Models\Todulist;
use Illuminate\Http\Request;

class CreateListController extends Controller
{
    function index()
    {
        $todo=Todulist::all();
        return view('admin.view_list',compact('todo'));
    }
    function create()
    {
        return view('admin.create_list');
    }
    function edit()
    {

    }
    function show()
    {


    }
    function update(Request $request, Todulist $list)
    {
return $list;
    }
    function store(Request $request)
    {
     Todulist::create($request->all());

        return redirect()->route('dashboard');

    }
    function destroy(Todulist $list)
    {
        return $list;
        $list->delete();
return redirect()->route('todo_list.index');
    }
}
