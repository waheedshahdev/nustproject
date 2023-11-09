
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Gallery</h6>
                 
                </div>
                
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">

              <a href="{{url('admin/add-picture')}}" class="btn btn-success float-end">Add Pictures</a>
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($galleryData as $pic)
                      <tr>
                        <td class="align-middle text-center text-sm">{{$pic->name}}</td>
                        <td class="align-middle text-center text-sm">
                          <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar" style="width: 200px; height: 200px;" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <img src="{{asset('admin/assets/gallery/'.$pic->image.'')}}" alt="team1">
                          </a>
                        
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">{{$pic->status == '1' ? 'Active' : 'Inactive'}}</td>
                        <td class="align-middle text-center text-sm">{{$pic->created_at}}</td>
                        <td class="align-middle text-center text-sm">
                        <a href="{{ url('admin/delete-picture/'. $pic['id'])}}" name="edit" class="btn btn-danger">Delete</a>
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