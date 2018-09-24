<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.categories.index')->with('categories',Category::orderBy('id','desc')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $this->validate($request,[

            'categoryName'=>'required|max:40',
        ]);

        $categoryName= $request->categoryName;

        $category = Category::create([

            'categoryName'=>$request->categoryName,
            'uqid'=>uniqid(),
            'status'=>1,

        ]);

        //dd($category);

        Session::flash('success','Your Category was successfully save!');
        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$cat=Category::find($uqid);

        //return vieiw('backend.categories.index')->with('cat',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd(request()->all());

        $category=Category::findOrFail($request->cid);

        //dd($category);

        // $this->validate($request,[

        //     'categoryName'=>'required|max:40',
        // ]);

        //$cat=Category::find($uqid);

        $category->update($request->all());
         //$category->categoryName=$request->categoryName;

          //$category->save();

        Session::flash('success','Your Category was successfully Updated!');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      // dd($request->all());
        $category=Category::findOrFail($request->cid);
        $category->delete();
        Session::flash('success','Your Category was successfully Deleted!');
        return redirect()->route('categories');

    }
}
