<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category=Category::get();
        return view('admin.category.index', compact('category'));

    }
       public function create ()
    {

        $category=new Category();

        return view('admin.category.create', compact('category'));

    }
    public function edit($id)
    {
        $category=Category::find($id);

        return view('admin.category.create',compact('category'));
    }
    public function store(Request $request)
    {
         $category= new Category();

        //  $category->name=$request->name;
        $data=$request->all();

        if($image=$request->file('image')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move( $destination,$image_name);
            $data['category_img']='/'.$destination.$image_name;
        }

        //  $category->save();
        Category::create($data);
        return redirect()->route('category.index');

    }
    public function update(Request $request,$id)
    {

        $category=Category::find($id);
        $data=$request->all();
        if($image=$request->file('image')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move( $destination,$image_name);
            $data['category_img']='/'.$destination.$image_name;
        }
        $category->update($data);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $category=Category::find($id);

        $category->delete();
        return redirect()->route('category.index');
    }

}
