<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('Role')->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
            'avatar' => 'required',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->avatar = $request->avatar;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = public_path().'/assets/img/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $user->avatar = $filename;
        }
        $user->save();
        $memberRole = Role::where('name', 'Admin')->first();
        $user->attachRole($memberRole);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:255',
            'name' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
            'avatar' => 'required',
        ]);

        $users = User::findOrFail($id);
        $users->username = $request->username;
        $users->name = $request->name;
        $users->password = bcrypt($request->password);
        $users->avatar = $request->avatar;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = public_path().'/assets/img/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $users->avatar = $filename;
        }
        $users->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('user.index');
    }
}
