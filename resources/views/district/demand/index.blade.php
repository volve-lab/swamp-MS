@extends('multiauth::layouts.app') 
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
                                        <h4>Request Swamp List</h4>
                                        
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Cooperative</th>
                                                <th>Service</th>
                                                <th>Email</th>
                                                <th>phone</th>
                                                <th>Location</th>
                                                <th>status</th>
                                                <th>comment</th>
                                                <th>date</th>
                                                <!-- <th>leader</th> -->
                                                <!-- <th>Service</th> -->
                                                <!-- <th>status</th> -->
                                                <!-- <th>Comment</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($demands as $demand)
                                            <tr>
                                           
                                                <td><div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                        <a class="image-popup-no-margins" href="{{ URL::to('/') }}/certificates/{{DB::table('cooperative_infos')->where('cooperative_id',$demand->cooperative_id)->value('certificate')}}">
                                                            <img alt="image-gallery" src="{{ URL::to('/') }}/certificates/{{DB::table('cooperative_infos')->where('cooperative_id',$demand->cooperative_id)->value('certificate')}}" class="img-fluid mb-4" width="150" height="100" >
                                                        </a>                                                        </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$demand->cooperative_id)->value('services')}}</td>
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$demand->cooperative_id)->value('email')}}</td>
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$demand->cooperative_id)->value('phone')}}</td>
                                                <td> <a href="{{DB::table('cooperative_infos')->where('cooperative_id',$demand->cooperative_id)->value('location')}}">Link</a></td>
                                                <!-- <p>{{$district_id=DB::table('swamps')->where('id',$demand->swamp_id)->value('district_id')}}</p> -->
                                                <!-- <td>{{DB::table('admins')->where('id',$district_id)->value('name')}}</td> -->
                                                <td>{{$demand->status}}</td>
                                                <td>{{$demand->comment}} </td>
                                                <td>{{$demand->created_at}} </td>
                                              
                                                <td>
                                                    <div class="btn-group">
                                                         <button type="button" class="btn btn-secondary btn-sm">Open</button>
                                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference28" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference28">
                                                        <a class="dropdown-item" href="{{route('status.request.approve',['id'=>$demand->id])}}">Approve</a>
                                                          <a class="dropdown-item" href="{{route('status.request.deny',['id'=>$demand->id])}}">Deny</a>

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