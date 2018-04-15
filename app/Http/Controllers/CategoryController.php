<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $categories = Category::orderby('id')->paginate(3);
        return view("categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categories.create");
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
            'name_ar' => 'required|min:5',
            'name_en' => 'required|min:5',
            'img' => 'required|mimes:jpeg,bmp,png',
        ]);

        if ($request->hasFile('img')) {
            $file = request()->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/categories'), $fileName);

            Category::create([
                'name_en' => request("name_en"),
                'name_ar' => request("name_ar"),
                'img' => $fileName,
            ]);
        }
        return redirect('/category/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $image = DB::table('categories')->where('id', $id)->pluck('img')->first();
            $filename = (public_path('images/categories/') . $image);
            File::delete($filename);


            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/categories'), $fileName);
            Category::whereId($id)->update([

                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'img' => $fileName,
            ]);
        } else {
            $image = DB::table('categories')->where('id', $id)->pluck('img')->first();
            Category::whereId($id)->update([
                'name_ar' => $request['name_ar'],
                'name_en' => $request['name_en'],
                'img' => $image,
            ]);
        }
        return redirect('/category/admin');
    }


/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Category $category
 * @return \Illuminate\Http\Response
 */
public
function destroy(Category $category)
{
    //
}
}