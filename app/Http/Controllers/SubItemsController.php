<?php

namespace App\Http\Controllers;

use App\Extra;
use App\Items;
use App\SubItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $item = Items::find($id);
        $extras = Extra::all();
        return view('subitem.create', compact('extras', 'item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extras = $request->get('extra_id');
        foreach ($extras as $extra) {
            $subItem = new SubItem;
            $subItem->item_id = $request->get('item_id');
            $subItem->extra_id = $extra;
            $subItem->save();
        }
        return redirect('/items/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubItem $subItem
     * @return \Illuminate\Http\Response
     */
    public function show(SubItem $subItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubItem $subItem
     * @return \Illuminate\Http\Response
     */
    public function edit(SubItem $subItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\SubItem $subItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubItem $subItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubItem $subItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($extra_id, $item_id)
    {
        DB::table('sub_items')
            ->where('sub_items.item_id', '=', $item_id)
            ->where('sub_items.extra_id', '=', $extra_id)
            ->delete();
        return redirect('/items/admin');
    }
}
