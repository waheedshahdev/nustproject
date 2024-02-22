
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
					<form action="{{url('admin/update-research/'.$researchInfo->id.'');}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="container">
							<div class="row">
								<div class="col-6">
									
										<label class="form-label">Research Name</label>
									<div class="input-group input-group-outline">
										<input type="text" class="form-control" name="research_name" value="{{$researchInfo->research_name}}">
									</div>
									@error('research_name')
									<span class="text-danger">{{ $message }}</span>
								    @enderror

								</div>
								<div class="col-6">
									
										<label class="form-label">Research Category</label>
									<div class="input-group input-group-outline">
										<select class="form-control" name="category_id">

											<option>Please Select Category</option>
											@foreach($category as $researchCat)
											<option value="{{$researchCat->id}}" {{$researchInfo->category_id == $researchCat->id ? 'selected' : ''}}>{{$researchCat->name}}</option>
											@endforeach
										</select>
									</div>
									@error('category_id')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
								</div>
							</div>
							<br>
							<div class="row">
								
								<div class="col-6">
									
										<label class="form-label">Research Date</label>
									<div class="input-group input-group-outline">
										<input type="date" class="form-control" name="research_date" value="{{ $researchInfo->research_date}}">
									</div>
									@error('research_date')
									<span class="text-danger">{{ $message }}</span>
								    @enderror

								</div>

								<div class="col-6">
									
										<label class="form-label">Small Description</label>
									<div class="input-group input-group-outline">
										<textarea class="form-control" name="small_description" cols="2" rows="3">{{ $researchInfo->small_description}}</textarea>
									</div>
									@error('small_description')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
								</div>

							</div>
							<br>
							<div class="row">
								<div class="col-6">
									@if($researchInfo->image)
			    					<img src="{{asset('admin/assets/research/'.$researchInfo->image)}}" alt="Reasearch Image" style="width:200px; height: 200px;">
			    				@endif
									<div class="input-group input-group-outline">
										<input type="file" class="form-control" name="image">
									</div>
									@error('image')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
								</div>

								<div class="col-6">
									<div class="form-check form-switch ps-0">
										<input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="status" {{$researchInfo->status == True ? 'checked' : ''}}>
										<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Status</label>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Thumbnil</label>
								<div class="col-6">
									@if($researchInfo->thumbnil)
			    					<img src="{{asset('admin/assets/research/'.$researchInfo->thumbnil)}}" alt="Reasearch thumbnil" style="width:200px; height: 200px;">
			    				@endif
									<div class="input-group input-group-outline">
										<input type="file" class="form-control" name="thumbnil">
									</div>
									@error('thumbnil')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
								</div>

								
							</div>
							<br>

							<div class="row">
								<div class="col-12">
									
									<div class="input-group input-group-outline">
										<textarea class="form-control"  id="summernote" name="research_text" cols="20" rows="20" >{!! $researchInfo->research_text !!}</textarea>
									</div>
									@error('research_text')
									<span class="text-danger">{{ $message }}</span>
								    @enderror
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