<?php

namespace App\Http\Controllers;

use App\Description;
use App\Item_desc;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemDescController extends Controller
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
//
//        $desc_id = DB::table('sub_items')->where('item_id', $id)->pluck('extra_id')->toArray();
//
//        if ($desc_id !== null) {
//
//            $descriptions = Description::where('id', '!=', $desc_id)->get();
//
//        } else {
            $descriptions= Description::all();
//        }
        return view('desc_item.create', compact('descriptions', 'item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descriptions = $request->get('extra_id');
        foreach ($descriptions as $desc) {
            $itemDesc = new Item_desc();
            $itemDesc->item_id = $request->get('item_id');
            $itemDesc->desc_id = $desc;
            $itemDesc->save();
        }
        return redirect('/items/show/'.$request->get('item_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item_desc  $item_desc
     * @return \Illuminate\Http\Response
     */
    public function show(Item_desc $item_desc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item_desc  $item_desc
     * @return \Illuminate\Http\Response
     */
    public function edit(Item_desc $item_desc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item_desc  $item_desc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item_desc $item_desc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item_desc  $item_desc
     * @return \Illuminate\Http\Response
     */
    public function destroy($item_id, $desc_id)
    {
        DB::table('item_descs')
            ->where('item_descs.item_id', '=', $item_id)
            ->where('item_descs.desc_id', '=', $desc_id)
            ->delete();
        return back();
    }
}
