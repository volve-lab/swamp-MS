@extends('cooperative.layouts.app')

@section('content')
 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                   
                </div>
                
                <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Swamp List</h4>
                                        
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>certificate</th>

                                                <th>Name</th>
                                                <th>location</th>
                                                <th>phone</th>
                                                <th>email</th>
                                                <th>leader</th>
                                                <th>Service</th>
                                                <th>status</th>
                                                <th>Comment</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($cooperative_infos as $cooperative_info)
                                            <tr>
                                            <td>
                                                    <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                        <a class="image-popup-no-margins" href="{{ URL::to('/') }}/certificates/{{$cooperative_info->certificate}}">
                                                            <img alt="image-gallery" src="{{ URL::to('/') }}/certificates/{{$cooperative_info->certificate}}" class="img-fluid mb-4" width="150" height="100" >
                                                        </a>                                                        </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td> {{$cooperative_info->names}}</td>
                                                <td><a href="{{$cooperative_info->location}}">link</a></td>
                                                <td>{{$cooperative_info->phone}}</td>
                                                <td>{{$cooperative_info->email}}</td>
                                                <td>{{$cooperative_info->leader}} </td>
                                                <td>{{$cooperative_info->services}} </td>
                                                <td>{{$cooperative_info->status}} </td>
                                                <td>{{$cooperative_info->comment}} </td>
                                                <td>
                                                    <div class="btn-group">
                                                         <button type="button" class="btn btn-secondary btn-sm">Open</button>
                                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference28" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference28">
                                                          <a class="dropdown-item" href="{{route('cooperative.edit',['id'=>$cooperative_info->id])}}">Update</a>
                                                          <a class="dropdown-item" href="{{route('cooperative.destroy',['id'=>$cooperative_info->id])}}">Delete</a>
                                                        </div>
                                                      </div>
                                                </td>
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
        </div>
        <!--  END CONTENT PART  -->

@endsection
