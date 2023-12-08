@extends('layouts.admin')

@section('content')
<style>
        .pdf-card {
            width: 100%;
            height: 100%;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .pdf-card-object {
            flex: 1;
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
<div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
       
        <div class="row">
          <div class="row">
            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Research</h6>
              <a href="{{ url('admin/add-research')}}" class="btn btn-success float-end">Add Research</a>
              </div>
              <div class="row">


                @foreach($researches as $research)
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header pdf-card p-0 mt-n4 mx-3">
                      {{-- <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{ asset('admin/assets/research/'.$research->image.'')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a> --}}
                      <object class="pdf-card-object" data="{{ asset('admin/assets/research/'.$research->image.'')}}" type="application/pdf">
                          <p>It appears you don't have a PDF plugin for this browser.
                              No biggie... you can <a href="{{ asset('admin/assets/research/'.$research->image.'')}}">click here to download the PDF file.</a></p>
                      </object>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Research #{{$research->id}} 
                   
                    <a class="btn btn-link text-danger text-gradient flaot-end px-3 mb-0" style="float: right;" href="{{ asset('admin/delete-research/'.$research->id.'')}}"><i class="material-icons text-sm me-2" >delete</i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0" style="float: right;" href="{{ url('admin/edit-research/'.$research->id.'')}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                 
                      </p>
                      <a href="javascript:;">
                        <h6>
                          {{$research->research_name}}
                        </h6>
                      </a>
                      <p>Category: {{$research->category->name}} <br>
                          Published Date: {{ $research->research_date}} <br>


                      </p>
                      <p class="mb-4 text-sm">
                        {{$research->small_description}}
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                      <span class="{{$research->status == True ? 'text-success' : 'text-danger'}} ms-sm-2 font-weight-bold">{{$research->status == True ? 'Active' : 'Inactive'}}</span> <a href="{{ url('admin/research-detail/'.$research->id.'')}}" class="btn btn-outline-primary  btn-sm mb-0">Research Detail</a>
                       
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection