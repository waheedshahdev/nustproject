
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Download Group</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{url('admin/update-group/'.$singleGroup->id.'');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	@method('PUT')
              	<div class="container">
              	<div class="row">
              	<div class="col-6">
    
			              <label class="form-label">Group Name</label>
			            <div class="input-group input-group-outline">
			              <input type="text" class="form-control" name="group_name" value="{{$singleGroup->group_name}}">
			              	
			            </div>
			            @error('group_name')
						        <p class="text-danger">{{ $message }}</p>
						    @enderror

              	</div>
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <textarea class="form-control" name="description" rows="5" cols="5">{{$singleGroup->description}}</textarea>
			            </div>
			            @error('description')
						        <p class="text-danger">{{ $message }}</p>
						    @enderror

              	</div>

              	</div>
              	<br>
              	<div class="row">
              	<div class="col-6">
			            <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="status" {{$singleGroup->status ==  True ? 'checked' : ''}}>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Status</label>
                      </div>

              	</div>

              	</div>
              	<br>
              	<div class="row">
              	<div class="col-10">
    
              	</div>
              	<div class="col-2">
    
			              <input type="submit" class="btn btn-success btn-block" name="submit" value="Submit">
			         

              	</div>

              	</div>



              	</div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>






@endsection