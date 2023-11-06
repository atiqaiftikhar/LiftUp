@extends('layouts.masterback')
@section('content')

<div class="container-fluid ">
        <div class="container-fluid ">


              <div class="card">
                <div class="card-body">
                    <h3 class="card-title fw-semibold mb-4">Service Form</h3>
                  <form action="{{ isset($ser)? route('service.update',$ser->id):route('service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" placeholder="Service Name" value="{{isset($ser)? $ser->name :'' }}" class="form-control"  >
                    </div>

                    <div class="mb-3">
                        <label for="base_fare" class="form-label">Base Fare</label>
                        <input type="number" name="base_fare" placeholder="Base Fare" value="{{isset($ser)? $ser->base_fare :''}}" class="form-control"  >

                      </div>
                      <div class="mb-3">
                        <label for="fare_per_km" class="form-label">Fare per km</label>
                        <input type="number" name="fare_per_km" placeholder="Fare per km" value="" class="form-control"  >

                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea  class="editor form-control" name="description" placeholder="Description" type="password"  >
                            {!! isset($ser)? $ser-> description:'' !!}
                        </textarea>
                      </div>



                      <select class="form-control" required name="category_id" >
                        <option value="{{ 'null' }}">Select Category</option>
                        @foreach ($category as $cat)
                        <option value="  {{$cat->id}}">{{$cat->name}}</option>
                         @endforeach
                        </select>

                                </select>
                                <br>


                                    <input  class="form-control" type="file" src="" name="image" width="50" >

<br>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

              </div>
            </div>
          </div>
        </div>

  </div>
@endsection
