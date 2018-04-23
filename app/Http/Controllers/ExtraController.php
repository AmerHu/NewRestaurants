<?php

namespace App\Http\Controllers;

use App\Extra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtraController extends Controller
{

    public function index()
    {
        $extras = Extra::all();
        return view('extras.index', compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extras.create');
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
            'price' => 'required|min:1|numeric',

        ]);
        Extra::create([
            'name' => $request['name'],
            'price' => $request['price'],

        ]);

        return redirect('/extra/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extra = Extra::find($id);
        return view('extras.show', compact('extra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra,$id)
    {
        $extra = Extra::find($id);
        return view('extras.edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required|min:5',
            'price' => 'required|min:1|numeric',

        ]);
        DB::table('extras')->update([
            'name' => $request['name'],
            'price' => $request['price'],

        ]);

        return redirect('/extra/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('extras')->where('id', $id)->delete();
        return redirect('/extra/admin');
    }
}