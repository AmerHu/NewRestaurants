<?php

namespace App\Http\Controllers;

use App\Information;
use App\User;
use App\UsersType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->where('isAdmin','!=', true)->paginate(4);

        $userType = UsersType::all()->pluck('Type');

        return view('users.index', compact('users', 'userType'));
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
            'type_id' => 'required',
            'email' => 'required|min:5|email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => request('name'),
            'type_id' => request('type_id'),
            'email' => request('email'),
            'password' => bcrypt($request['password']),
            'isAdmin'=>0,
            'active'=>0,
        ]);
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
        $userType = DB::table('users_types')
            ->where('id', '=', $user->type_id)
            ->pluck('Type')
            ->first();

        return view('users.show', compact('user', 'userType'));
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
        $userType = DB::table('users_types')
            ->where('id', '=', $user->type_id)
            ->first();

        return view('users.edit', compact('user', 'userType'));
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
            'type_id' => 'required|min:5',
        ]);
        User::whereId($id)->update([
            'name' => request('name'),
            'type_id' => request('type'),
            'email' => request('email'),
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
        DB::table('users')->where('id', $id)->delete();
        return redirect('/user/admin');
    }
}