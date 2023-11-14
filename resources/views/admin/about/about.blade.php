
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>About Us</h6>
                 
                </div>
                
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">

              {{-- <a href="{{url('admin/add-about')}}" class="btn btn-success float-end">Add About Content</a> --}}
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated By</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  	@foreach($about as $aboutus)
                      <tr>
                        <td class="align-middle text-center text-sm">{!! \Illuminate\Support\Str::limit($aboutus->about, 200, '...') !!}</td>
                        
                        <td class="align-middle text-center text-sm">{{$aboutus->created_at}}</td>
                        <td class="align-middle text-center text-sm">{{$aboutus->user->name}}</td>
                        <td class="align-middle text-center text-sm">
                        <a href="{{ url('admin/edit-about/'. $aboutus['id'])}}" name="edit" class="btn btn-info">Edit</a> <a href="{{ url('admin/delete-picture/'. $aboutus['id'])}}" name="edit" class="btn btn-danger">Delete</a>
                      </td>
                      </tr>
                    @endforeach
                    
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
       
      </div>

    </div>



@endsection