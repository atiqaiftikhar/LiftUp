@extends('layouts.masterback')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <h5 class="card-title fw-semibold mb-4">Service Table</h5>
                 </div>
                 <div class="col-6">

                 </div>
                 <div class="col-2 text-end">
                    <a class="btn btn-success" href="{{ route('service.create') }}">Create</a>
                 </div>
             </div>



          <table class="table">
            <thead class="bg-primary text-light">
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Base Fare</th>
                <th scope="col">Fare per km</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($service as $ser)
              <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{$ser->name}}</td>
                <td><img  style="width: 50% ;height:50%" src="{{$ser->service_img}}"></td>
                <td>{{$ser->base_fare}}</td>
                <td>{{$ser->fare_per_km}}</td>
                <td>{!! isset($ser)? $ser-> description:'' !!}</td>

                <td><a class="btn btn-success btn-sm rounded-0 text-light" href="{{ route('service.edit',['id'=>$ser->id]) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>Edit</a>
                </td>
                <td><a class="btn btn-danger btn-sm rounded-0 text-light" href="{{ route('service.delete',['id'=>$ser->id]) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-trash"></i>Delete</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
            </div>
          </div>
    </div>
</div>








@endsection
