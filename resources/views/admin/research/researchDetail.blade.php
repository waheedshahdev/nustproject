@extends('layouts.admin')

@section('content')


<div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{ asset('admin/assets/research/'.$researchDetail->image.'') }}');">

      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
       
        <div class="row">
          <div class="row">
            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Research Detail {{$researchDetail->research_name}}</h6>
              </div>
              <div class="row">

                <div class="col-xl-12 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                        <h6>
                          {{$researchDetail->research_name}}
                          <span style="float: right;" class="{{$researchDetail->status == True ? 'text-success' : 'text-danger'}} ms-sm-2 font-weight-bold">{{$researchDetail->status == True ? 'Active' : 'Inactive'}}</span>
                        </h6>
                   
                      <p>Category: {{$researchDetail->category->name}} <br>
                          Published Date: {{ $researchDetail->research_date}} <br>


                      </p>
                		<p>
                			
                      {!!$researchDetail->research_text!!}                      
                		</p>
                 
                       
              
                
                  </div>
                </div>
       

             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection