<?php

namespace App\Http\Controllers;

use App\Extra;
use App\Items;
use App\SubItems;
use Illuminate\Http\Request;
use DB;

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
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $item = Items::find($id);
        $extra_id = DB::table('sub_items')->where('item_id', $id)->get()->pluck('extra_id');
        if ($extra_id == null) {
            $extras = Extra::all();
        } else {

            $extras = DB::table('extras')
                ->whereNotIn('id',function ($query) use ($id) {
                    $query->select('extra_id')
                        ->from('sub_items')
                        ->where('sub_items.item_id',$id);
                })
                ->get();
        }
        if (count($extras) == 0) {

        } else {
            return view('subitem.create', compact('extras', 'item'));
        }
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
            $subItem = new SubItems();
            $subItem->item_id = $request->get('item_id');
            $subItem->extra_id = $extra;
            $subItem->save();
        }
        return redirect('/items/show/' . $request->get('item_id'));
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
    public function update(Request $request, SubItems $subItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubItem $subItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($desc_id, $item_id)
    {
        DB::table('sub_items')
            ->where('sub_items.item_id', '=', $item_id)
            ->where('sub_items.extra_id', '=', $desc_id)
            ->delete();
        return back();

    }
}
