<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\SystemUser;

class SystemUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = SystemUser::all();
       return view('sysuser.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('sysuser.create');
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
            'r_id'=>'required',
            'name'=>'required',
            'email'=>'required'
            ]);
            $user = new SystemUser([
            'r_id' => $request->get('r_id'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get( 'password'),
            'remember_token' => $request->get('password')
            ]);
            $user->save();
            return redirect('/sysuser')->with('success', 'User Created!');
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
        $user = SystemUser::find($id);
        return view('sysuser.edit', compact('user'));
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
            'r_id'=>'required',
            'name'=>'required',
            'email '=>'required'
            ]);
            $user = Ticket::find($id);
            $user->r_id =  $request->get('r_id');
            $user->name = $request->get('name');
            $user->email  = $request->get('email ');
            $user->password = $request->get(md5('password'));
            $user->remember_token = $request->get(md5('remember_token'));
            $user->save();
            return redirect('/sysuser')->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $user = SystemUser::find($id);
     $user->delete();
     return redirect('/sysuser')->with('success', 'User deleted!');
    }
}
