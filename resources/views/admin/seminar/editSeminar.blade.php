
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
              <form action="{{url('admin/update-seminar/'.$seminar->id.'');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	@method('PUT')
              	<div class="container">

              	<div class="row">
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <label class="form-label">Seminar Name</label>
			              <input type="text" class="form-control" name="seminar_name" value="{{$seminar->seminar_name}}">
			              	
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
                      <option value="{{$group->id}}" {{$seminar->seminar_group_id == $group->id ? 'selected' : ''}}>{{$group->seminar_group}}</option>
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
                  @if($seminar->seminar_image)
			    					<img src="{{asset('seminar/'.$seminar->seminar_image)}}" alt="seminar Image" style="width:200px; height: 200px;">
			    				@endif
                 {{--  @error('seminar_image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror --}}

                </div>
              	<div class="col-6">
			                 <div class="form-check form-switch ps-0">
                        <label class="form-label">Seminar/Event Date</label>
                        <input type="date" class="form-control" name="seminar_date" {{$seminar->seminar_date}}>
                      </div>
                      {{-- @error('seminar_date')<p class="text-danger">{{ $message }}</p>@enderror --}}
              	</div>


              	</div>
                <br>
                <div class="row">
               

                <div class="col-6">
                  <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="status" {{$seminar->status == True ? 'checked' : ''}}>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Status</label>
                      </div>

                </div>

                </div>
                <br>
                <div class="row">
                
                <div class="col-12">
                  <div class="input-group input-group-outline">
                        <label class="form-label" >Description</label>
                        <textarea class="form-control" id="summernote" name="seminar_description">{!! $seminar->seminar_description !!}</textarea>
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





@endsection