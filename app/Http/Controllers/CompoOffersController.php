<?php

namespace App\Http\Controllers;

use App\CompoOffers;
use Illuminate\Http\Request;
use DB;
use File;

class CompoOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compos = CompoOffers::all();
        return view("compo_offers.index", compact('compos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("compo_offers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            request(), [
            'name' => 'required|min:5',
            'price' => 'required|min:1|numeric',
            'img' => 'required|mimes:jpeg,bmp,png',
        ]);

        if ($request->hasFile('img')) {
            $file = request()->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/compo'), $fileName);

            CompoOffers::create([
                'name' => request("name"),
                'price' => request("price"),
                'img' => $fileName,
            ]);
        }
        return redirect('/compo/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompoOffers  $compoOffers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compo=CompoOffers::find($id);

        $items = DB::table('items')
            ->select('items.id', 'items.name_en')
            ->join('items_offers','item_id','=','items.id')
            ->where('offer_id', '=', $id)
            ->get();
        return view('compo_offers.show',compact('compo','items'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompoOffers  $compoOffers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compo= CompoOffers::find($id);
        return view('compo_offers.edit', compact("compo"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompoOffers  $compoOffers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if ($request->hasFile('img')) {
            $image = DB::table('compo_offers')->where('id', $id)->pluck('img')->first();
            $filename = (public_path('images/compo/') . $image);
            File::delete($filename);


            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/compo'), $fileName);
            CompoOffers::whereId($id)->update([

                'name' => $request['name'],
                'price' => $request['price'],
                'img' => $fileName,
            ]);
        } else {
            $image = DB::table('compo_offers')->where('id', $id)->pluck('img')->first();
            CompoOffers::whereId($id)->update([
                'name' => $request['name'],
                'price' => $request['price'],
                'img' => $image,
            ]);
        }
        return redirect('/compo/admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompoOffers  $compoOffers
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompoOffers $compoOffers)
    {
        //
    }
}
