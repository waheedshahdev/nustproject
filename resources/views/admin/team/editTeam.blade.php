
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card my-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
						<h6 class="text-white text-capitalize ps-3">Edit Research</h6>
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<form action="{{url('admin/update-team/'.$team->id.'');}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="container">
							<div class="row">
								<div class="col-6">
									<div class="input-group input-group-outline">
									<select class="form-control" name="team_category">

				                      <option>Select Team Group</option>
				                      <option value="P.I" {{ $team->team_category == 'P.I' ? 'selected' : ''}}>P.I</option>
				                      <option value="Co-P.I" {{ $team->team_category == 'Co-P.I' ? 'selected' : ''}}>Co-P.I</option>
				                      <option value="Sub-Team Members" {{ $team->team_category == 'Sub-Team Members' ? 'selected' : ''}}>Sub-Team Members</option>
				                      <option value="Research Assistants" {{ $team->team_category == 'Research Assistants' ? 'selected' : ''}}>Research Assistants</option>
				                    </select>
				                </div>
									@error('team_category')
									<span class="text-danger">{{ $message }}</span>
								    @enderror

								</div>
								<div class="col-6">
									
						              <label class="form-label">Team Member Name</label>
									<div class="input-group input-group-outline">
						              <input type="text" class="form-control" name="name" value="{{$team->name}}">
						            </div>
									@error('name')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
								</div>
							</div>
							<br>
							<div class="row">
								
								<div class="col-6">
			                        <label class="form-label">Designation</label>
									<div class="input-group input-group-outline">
			                        <input type="text" class="form-control" value="{{$team->designation}}" name="designation">
			                      </div>
									@error('designation')
									<span class="text-danger">{{ $message }}</span>
								    @enderror

								</div>

								<div class="col-6">
			                        <label class="form-label">Phone</label>
									<div class="input-group input-group-outline">
			                        <input type="text" class="form-control" value="{{$team->phone}}" name="phone">
			                      </div>
									@error('phone')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
								</div>

							</div>
							<br>
							<div class="row">
								<div class="col-6">
									<div class="input-group input-group-outline">
				                  	<label class="form-label">Email</label>
				                    <input type="text" class="form-control" name="email" value="{{$team->email}}">
				                  </div>
				                  @error('email')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
									
								</div>

								<div class="col-6">
									@if($team->image)
			    					<img src="{{asset('team/'.$team->image)}}" alt="Team Image" style="width:200px; height: 200px;">
			    				@endif
									<div class="input-group input-group-outline">
										<input type="file" class="form-control" name="image">
									</div>
									@error('image')
									<span class="text-danger">{{ $message }}</span>
								    @enderror


									
								</div>
							</div>
							<br>

							<div class="row">
								<div class="col-6">
									
									<div class="form-check form-switch ps-0">
										<input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="status" {{$team->status == True ? 'checked' : ''}}>
										<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Status</label>
									</div>
					
								</div>
							</div>
							<br>
							<div class="row">
								
								<div class="col-1 offset-11">
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