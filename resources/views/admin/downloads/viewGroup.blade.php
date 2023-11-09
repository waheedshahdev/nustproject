
@extends('layouts.admin')

@section('content')


<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Upload Document</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="{{url('admin/upload-document/'.$id.'');}}" method="post" enctype="multipart/form-data">
              	@csrf
              	<div class="container">
              	<div class="row">
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <label class="form-label">Document Name</label>
			              <input type="text" class="form-control" name="document_name">
			              	
			            </div>
			            @error('document_name')
						        <p class="text-danger">{{ $message }}</p>
						    @enderror

              	</div>
              	<div class="col-6">
    
			            <div class="input-group input-group-outline">
			              <input type="file" class="form-control" name="pdf_file">
			            </div>
			            @error('pdf_file')
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
                <h6 class="text-white text-capitalize ps-3">Documents</h6>
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Group Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Document Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
               
                   	@foreach($document as $doc)
                  	<tr>
                  		<td class="align-middle text-center text-sm">{{$doc->groupName->group_name}}</td>
                  		<td class="align-middle text-center text-sm"><a href="{{ asset('documents/'.$doc->pdf_file.'')}}" target="_blank">{{$doc->document_name}}</a></td>
                  		<td class="align-middle text-center text-sm">{{$doc->status == True ? 'Active' : 'Inactive'}}</td>
                  		<td class="align-middle text-center text-sm">{{$doc->created_at}}</td>
                  		<td class="align-middle text-center text-sm"><a href="{{ url('admin/delete-document/'.$doc->id)}}" name="edit" class="btn btn-danger">Delete</a></td>
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