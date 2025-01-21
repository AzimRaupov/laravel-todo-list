<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class CreateListController extends Controller
{
    function index()
    {
        $todos=Todolist::all();
        return view('admin.view_list',compact('todos'));
    }
    function create()
    {
        return view('admin.create_list');
    }
    function edit(Todolist $list)
    {
        return $list;

    }
    function show()
    {


    }
    function update(Request $request, Todolist $list)
    {
        return $list;
    }
    function store(Request $request)
    {
     Todolist::create($request->all());

        return redirect()->route('dashboard');

    }

}
