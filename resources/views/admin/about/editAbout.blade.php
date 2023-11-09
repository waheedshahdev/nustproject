
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add About Us Content</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{url('admin/update-about/'.$aboutinfo->id.'');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	@method('PUT')

              	<div class="container">
              	<div class="row">
              	<div class="col-12">
    
			            <div class="input-group input-group-outline">
			              	<textarea type="text" class="form-control" id="summernote" name="about" rows="10">{{$aboutinfo->about}}</textarea>
			            </div>
			            @error('about')
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