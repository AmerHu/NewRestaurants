<?php

namespace App\Http\Controllers;

use App\Category;
use App\Items;
use Illuminate\Http\Request;
use DB;
use File;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('items.create',compact('categories'));
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
            'name_ar' => 'required|min:5',
            'name_en' => 'required|min:5',
            'price' => 'required|min:1|numeric',
            'img' => 'required|min:5|mimes:jpeg,bmp,png',
            'cate_id' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $file = request()->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/items'), $fileName);
            Items::create([
                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'price' => $request['price'],
                'cate_id' => request('cate_id'),
                'img' => $fileName,
            ]);
        }
        return redirect('/items/admin');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Items::find($id);
        $extras = DB::table('extras')
            ->select('extras.id', 'extras.name')
            ->join('sub_items','extra_id','=','extras.id')
            ->where('item_id', '=', $id)
            ->get();

        $descriptions = DB::table('descriptions')
            ->select('descriptions.id', 'descriptions.name')
            ->join('item_descs','desc_id','=','descriptions.id')
            ->where('item_id', '=', $id)
            ->get();



        $category = Category::where('id',$item->cate_id)->pluck('name_en')->first();

        return view('items.show',compact('category','item','extras','descriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Items::find($id);
        $categories = Category::all();
        return view('items.edit',compact('items','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $image = DB::table('items')->where('id', $id)->pluck('img')->first();
            $filename = (public_path('images/items/').$image);

            File::delete($filename);


            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/items'), $fileName);
            Items::whereId($id)->update([

                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'price' => $request['price'],
                'img' => $fileName,
                'cate_id' => $request['cate_id'],
            ]);
        } else {
            $image = DB::table('items')->where('id', $id)->pluck('img')->first();
            Items::whereId($id)->update([

                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'price' => $request['price'],
                'img' => $image,
                'cate_id' => $request['cate_id'],
            ]);
        }
        return redirect('/items/admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
}
