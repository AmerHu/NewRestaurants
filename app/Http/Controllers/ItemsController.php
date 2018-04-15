<?php

namespace App\Http\Controllers;

use App\Category;
use App\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::orderBy('id')->paginate(4);
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
            'description' => 'required|min:5',
            'img' => 'required|min:5|mimes:jpeg,bmp,png',
            'cate_id' => 'required',
        ]);
        if ($request->hasFile('img')) {
            $file = request()->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/offers'), $fileName);
            Items::create([
                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'price' => $request['price'],
                'cate_id' => request('cate_id'),
                'description' => $request['description'],
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
        $categories = Category::all();
        $items = Items::where('id',$id)
        return view('items.create',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
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
