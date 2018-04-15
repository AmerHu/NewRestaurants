<?php

namespace App\Http\Controllers;

use App\Offers;
use DB;
use File;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offers::orderBy('id')->paginate(4);
        return view('offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name_ar' => 'required|min:5',
            'name_en' => 'required|min:5',
            'price' => 'required|min:1|numeric',
            'description' => 'required|min:5',
            'img' => 'required|min:5|mimes:jpeg,bmp,png',
            'sub_item' => 'required|min:5',
        ]);

        if ($request->hasFile('img')) {
            $file = request()->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/offers'), $fileName);
            Offers::create([
                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'price' => $request['price'],
                'description' => $request['description'],
                'img' => $fileName,
                'sub_item' => $request['sub_item'],
            ]);
        }
        return redirect('/offers/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offers $offers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offers::find($id);
        return view('offers.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offers $offers
     * @return \Illuminate\Http\Response
     */
    public function edit(Offers $offers ,$id)
    {
        $offer = Offers::find( $id);
        return view('offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Offers $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $image = DB::table('offers')->where('id', $id)->pluck('img');
            dd($image);
            $filename = public_path('img') . 'images/offers' . $image;
            File::delete($filename);


            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
            Offers::whereId($id)->update([

                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'price' => $request['price'],
                'description' => $request['description'],
                'img' => $fileName,
                'sub_item' => $request['sub_item'],
            ]);
        }
        return redirect('/offers/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offers $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offers)
    {
        //
    }
}
