@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            
            
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Downloads Group</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="{{ url('admin/download-group')}}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Download Group</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-12 mb-md-0 mb-4">
                      <ul class="list-group">
                      	@foreach($downloads as $downloadGroup) 
          

                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">{{$downloadGroup->group_name}}</h6>
                    <span class="mb-2 text-xs">Description: <span class="text-dark font-weight-bold ms-sm-2">{{$downloadGroup->description}}</span></span>
                    <span class="mb-2 text-xs">Status: <span class="text-{{$downloadGroup->status == True ? 'success' : 'danger'}} ms-sm-2 font-weight-bold">{{$downloadGroup->status == True ? 'Active' : ''}}</span></span>
                    <span class="text-xs">Total Number of Documents: <span class="text-dark ms-sm-2 font-weight-bold">{{ $downloadGroup->documents->count()}}</span></span>
                  </div>
                  <div class="ms-auto text-end">
                    <span class="text-xs">Date: <span class="text-dark ms-sm-2 font-weight-bold">{{$downloadGroup->created_at}}</span></span>
                    <a class="btn btn-info px-3 mb-0" href="{{ url('admin/view-document/'.$downloadGroup->id.'')}}">View</a>
                  </div>
                </li>
                @endforeach
                
              
              </ul>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </div>

    </div>

    @endsection