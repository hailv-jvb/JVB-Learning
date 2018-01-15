<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users',$users));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.edit',[
            'user' => $user
        ]);
    }
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user','id'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id)->update($request->all());
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
