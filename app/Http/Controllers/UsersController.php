<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.user.view_users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('admin.user.create_user',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ));

        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'role_id' => $request->role,
           'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.create')
            ->with('success','New user successfully added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        $roles = Role::all();
        return view('admin.user.edit_user',compact('user','roles'));
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
        $this->validate($request,array(
            'name' => 'required|min:4',
            'email' => 'required|email',
        ));

        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role,
        ]);

        return redirect()->route('users.index')
            ->with('success','User details successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("DELETE FROM users WHERE id = ? ",[$id]);

        return redirect()->route('users.index')
            ->with('success','User successfully deleted');
    }
}
