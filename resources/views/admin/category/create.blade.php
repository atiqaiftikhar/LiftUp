@extends('layouts.masterback')
@section('content')

<div class="container-fluid ">
        <div class="container-fluid ">


              <div class="card">
                <div class="card-body">
                    <h3 class="card-title fw-semibold mb-4">Category Form</h3>
                  <form action="{{ isset($cat)? route('category.update',$cat->id):route('category.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" placeholder="Category Name" value="{{$category->name}} required" class="form-control"  >
                    </div>



                            <br>

                     <input  class="form-control" type="file" src="" name="image" width="50" >

                  <br>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
          </div>
        </div>

  </div>
@endsection

