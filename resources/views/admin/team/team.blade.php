
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Team Member</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{url('admin/add-team');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	<div class="container">

              	<div class="row">
              		<div class="col-6">
                  <div class="input-group input-group-outline">
                    <select class="form-control" name="team_category">
                      <option>Select Team Group</option>
                      <option value="P.I">P.I</option>
                      <option value="Co-P.I">Co-P.I</option>
                      <option value="Sub-Team Members">Sub-Team Members</option>
                      <option value="Research Assistants">Research Assistants</option>
                    </select>
                      
                  </div>
                  @error('team_category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                </div>
              	<div class="col-6">
			            <div class="input-group input-group-outline">
			              <label class="form-label">Team Member Name</label>
			              <input type="text" class="form-control" name="name">
			            </div>
			            @error('name')<p class="text-danger">{{ $message }}</p> @enderror
              	</div>

              	</div>

              	<br>
              	<div class="row">
              		<div class="col-6">
			            <div class="input-group input-group-outline">
                        <label class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation">
                      </div>
                      @error('designation')<p class="text-danger">{{ $message }}</p>@enderror
              	</div>
                  
              	<div class="col-6">
                  	<div class="input-group input-group-outline">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone">
                      </div>
                      @error('phone')<p class="text-danger">{{ $message }}</p>@enderror

                </div>

              	</div>

                <br>
                <div class="row">
               
                <div class="col-6">
    
                  <div class="input-group input-group-outline">
                  	<label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                  </div>
                  @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-6">
                  <div class="input-group input-group-outline">
                    <input type="file" class="form-control" name="image">
                  </div>
                  @error('image')<p class="text-danger">{{ $message }}</p>@enderror
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
                <h6 class="text-white text-capitalize ps-3">Team Members</h6>
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Team Group</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Designation </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
               
                   	@foreach($team as $member)
                  	<tr>
                  		<td class="align-middle text-center text-sm">{{$member->team_category}}</td>
                  		<td class="align-middle text-center text-sm">{{$member->name}}</td>
                  		<td class="align-middle text-center text-sm">
                      <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar" style="width: 200px; height: 200px;" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <img src="{{asset('team/'.$member->image.'')}}" alt="{{$member->name}}">
                          </a>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">{{$member->designation }}</td>
                      <td class="align-middle text-center text-sm">{{$member->phone }}</td>
                      <td class="align-middle text-center text-sm">{{$member->email }}</td>
                      <td class="align-middle text-center text-sm">{{$member->status == True ? 'Active' : 'Inactive'}}</td>
                  		<td class="align-middle text-center text-sm">{{$member->created_at}}</td>
                  		<td class="align-middle text-center text-sm"><a href="{{ url('admin/edit-team/'.$member->id)}}" name="edit" class="btn btn-info">Edit</a> <a href="{{ url('admin/delete-team/'.$member->id)}}" name="edit" class="btn btn-danger">Delete</a></td>
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