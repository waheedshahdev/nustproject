
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
              <form action="{{url('admin/insert-group');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	<div class="container">
              	<div class="row">
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <label class="form-label">Group Name</label>
			              <input type="text" class="form-control" name="group_name">
			              	
			            </div>
			            @error('group_name')
						        <p class="text-danger">{{ $message }}</p>
						    @enderror

              	</div>
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <textarea class="form-control" name="description" rows="5" cols="5"></textarea>
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
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="status" checked>
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




<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Download Groups</h6>
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Group Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($group as $dgroup)
                  	<tr>
                  		<td class="align-middle text-center text-sm">{{$dgroup->group_name}}</td>
                  		<td class="align-middle text-center text-sm">{{$dgroup->description}}</td>
                  		<td class="align-middle text-center text-sm">{{$dgroup->status == True ? 'Active' : 'Inactive'}}</td>
                  		<td class="align-middle text-center text-sm">{{$dgroup->created_at}}</td>
                  		<td class="align-middle text-center text-sm"><a href="{{ url('admin/edit-group/'.$dgroup->id)}}" name="edit" class="btn btn-info">Edit</a> <a href="{{ url('admin/delete-group/'.$dgroup->id)}}" name="edit" class="btn btn-danger">Delete</a></td>
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