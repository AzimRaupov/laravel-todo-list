<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users=\App\Models\User::all();
        return view('admin.user_list',compact('users'));
    }

    function edit(User $user)
    {
return view('admin.user-update',compact('user'));
    }
    function show(User $user)
    {
   return view('admin.user-profile',compact('user'));
    }
    function update(Request $request, User $user)
    {
        $user->update($request->all());
    }
    function destroy(User $user)
    {

        $user->delete();
    return redirect()->route('user.index');
    }
}
