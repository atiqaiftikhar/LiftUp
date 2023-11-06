@extends('layouts.masterback')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">

            <div class="row">
               <div class="col-4">
                   <h5 class="card-title fw-semibold mb-4">Category Table</h5>
                </div>
                <div class="col-6">

                </div>
                <div class="col-2 text-end">
                   <a class="btn btn-success" href="{{ route('category.create') }}">Create</a>
                </div>
            </div>



          <table class="table">
            <thead class="bg-primary text-light">
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $cat)
              <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{$cat->name}}</td>
                <td><img src="{{$cat->category_img}}"></td>
                <td><a class="btn btn-success btn-sm rounded-0 text-light" href="{{ route('category.edit',$cat->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>Edit</a>
                    <a class="btn btn-danger btn-sm rounded-0 text-light" href="{{ route('category.delete',$cat->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-trash"></i>Delete</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
            </div>
          </div>
    </div>
</div>








@endsection
