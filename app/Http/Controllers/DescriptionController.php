<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descriptions = Description::all();
        return view('descriptions.index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:5',

        ]);
        Description::create([
            'name' => $request['name'],

        ]);
        return redirect('/desc/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $description= Description::find($id);
        return view('descriptions.show', compact('description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $description= Description::find($id);
        return view(' descriptions.edit', compact('description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Description $description)
    {
        $this->validate(request(), [
            'name' => 'required|min:5',
        ]);
        DB::table('descriptions')->update([
            'name' => $request['name'],
        ]);

        return redirect('/desc/show/' .$request->get('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('descriptions')->where('id', $id)->delete();
        return redirect('/desc/admin');
    }
}
