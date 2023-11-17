
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Seminar or Event Details</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{url('admin/add-seminar');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	<div class="container">

              	<div class="row">
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <label class="form-label">Seminar Name</label>
			              <input type="text" class="form-control" name="seminar_name">
			              	
			            </div>
			            @error('seminar_name')
						        <p class="text-danger">{{ $message }}</p>
						    @enderror

              	</div>
                <div class="col-6">
    
                    {{-- <label class="form-label">Seminar Group</label> --}}
                  <div class="input-group input-group-outline">
                    <select class="form-control" name="seminar_group_id">
                      <option>Select Seminar Group</option>
                      @foreach($seminargroup as $group)
                      <option value="{{$group->id}}">{{$group->seminar_group}}</option>
                      @endforeach
                    </select>
                      
                  </div>
                  @error('seminar_group_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                </div>

              	

              	</div>

              	<br>
              	<div class="row">
                  <div class="col-6">
    
                  <div class="input-group input-group-outline">
                    <input type="file" class="form-control" name="seminar_image">
                  </div>
                 {{--  @error('seminar_image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror --}}

                </div>
              	<div class="col-6">
			                 <div class="form-check form-switch ps-0">
                        <label class="form-label">Seminar/Event Date</label>
                        <input type="date" class="form-control" name="seminar_date">
                      </div>
                      {{-- @error('seminar_date')<p class="text-danger">{{ $message }}</p>@enderror --}}
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
                
                <div class="col-12">
                  <div class="input-group input-group-outline">
                        <label class="form-label" >Description</label>
                        <textarea class="form-control" id="summernote" name="seminar_description"></textarea>
                      </div>
                      @error('seminar_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

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
                <h6 class="text-white text-capitalize ps-3">Seminar/Events</h6>
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seminar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seminar Image </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seminar Group </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seminar Date </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
               
                   	@foreach($seminar as $seminars)
                  	<tr>
                  		<td class="align-middle text-center text-sm">{{$seminars->seminar_name}}</td>
                  		<td class="align-middle text-center text-sm">
                      <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar" style="width: 200px; height: 200px;" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <img src="{{asset('seminar/'.$seminars->seminar_image.'')}}" alt="{{$seminars->seminar_name}}">
                          </a>
                        
                        </div>
                      </td>
                  		<td class="align-middle text-center text-sm">{{$seminars->seminarGroup->seminar_group }}</td>
                      <td class="align-middle text-center text-sm">{{$seminars->seminar_date }}</td>
                      <td class="align-middle text-center text-sm">{{$seminars->status == True ? 'Active' : 'Inactive'}}</td>
                  		<td class="align-middle text-center text-sm">{{$seminars->created_at}}</td>
                  		<td class="align-middle text-center text-sm"><a href="{{ url('admin/edit-seminar/'.$seminars->id)}}" name="edit" class="btn btn-info">Edit</a> <a href="{{ url('admin/delete-seminar/'.$seminars->id)}}" name="edit" class="btn btn-danger">Delete</a></td>
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