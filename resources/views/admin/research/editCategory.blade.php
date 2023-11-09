
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit/Update Category</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{url('admin/update-category/'.$category->id)}}" method="post" enctype="multipart/form-data">
              	@csrf
              	@method('PUT')
              	<div class="container">
              	<div class="row">
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <label class="form-label">Name</label>
			              <input type="text" class="form-control" value="{{$category->name}}" name="name">
			            </div>

              	</div>
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <textarea class="form-control"  name="description">{{$category->description}}</textarea>
			            </div>

              	</div>

              	</div>
              	<br>
              	<div class="row">
              	
              	<div class="col-6">
			            <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="status" {{$category->status == '1' ? 'checked' : ''}}>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Status</label>
                      </div>

              	</div>

              	<div class="col-6">
			            <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1" name="popular" {{$category->popular == '1' ? 'checked' : ''}}>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Popular</label>
                      </div>
              	</div>
              	</div>
              	<br>
              	<div class="row">
              	

              	</div>
              	<br>
              	<div class="row">
              	<div class="col-6">
    				@if($category->image)
    					<img src="{{asset('admin/assets/category/'.$category->image)}}" alt="Category Image" style="width:200px; height: 200px;">
    				@endif
			            <div class="input-group input-group-outline">
			
			              <input type="file" class="form-control" name="image">
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