<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        return view('navbar.services.index');

    }
    public function service()
    {
        $service=Service::get();
        return view('admin.service.index',compact('service'));

    }
    public function create ()
    {
        $category=Category::get();
        return view('admin.service.create',compact('category'));

    }
    public function edit (Request $request,$id)
    {

        $service=Service::find($id);
       $category=Category::get();
        return view('admin.service.create',compact('service','category'));

    }
    public function store(Request $request)
    {

            $data=$request->all();

        if($image=$request->file('image')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move( $destination,$image_name);
            $data['service_img']='/'.$destination.$image_name;
        }


        Service::create($data);
         return redirect()->route('service.index');

    }

    public function update(Request $request,$id)
    {


        $service=Service::find($id);
        $data=$request->all();
        if($image=$request->file('image')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move( $destination,$image_name);
            $data['service_img']='/'.$destination.$image_name;
        }
        $service->update($data);
        return redirect()->route('service.index');
    }

    public function delete($id)
    {
        $service=Service::find($id);

        $service->delete();
        return redirect()->route('service.index');
    }


}
