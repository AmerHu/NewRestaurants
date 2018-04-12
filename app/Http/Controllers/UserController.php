<?php

namespace App\Http\Controllers;

use App\Information;
use App\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            request(), [
            'name' => 'required|min:5',
            'type' => 'required|min:5',
            'email' => 'required|min:5|email',
            'gender' => 'required|min:5',
        ]);
        User::create([
                'name' => request('name'),
                'type' => request('type'),
                'email' => request('email'),
                'password' => bcrypt($request['password']),

            ]);
        $user_id = DB::table('users')->max('id');
        DB::table('informations')
            ->create([
                'user_id' => $user_id,
                'name' => request('name'),
                'gender' => request('gender'),
            ]);
        dd($request);
        return redirect('/user/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $information = DB::table('informations')
            ->where('user_id', $id)
            ->get();
        return view('users.show', compact('user', 'information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $information = DB::table('informations')
            ->where('user_id', $id)
            ->get();

        return view('users.edit', compact('user', 'information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            request(), [
            'name' => 'required|min:5',
            'email' => 'required|min:5',
            'type' => 'required|min:5',
        ]);

        User::whereId($id)->update([
            'name' => request('name'),
            'type' => request('type'),
            'email' => request('email'),
        ]);
        DB::table('informations')->where('user_id', $id)->update([
            'gender' => request('gender'),
        ]);
        return redirect('/user/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('informations')->where('user_id', $id)->delete();
        DB::table('users')->where('id', $id)->delete();
        return redirect('/user/admin');
    }
}