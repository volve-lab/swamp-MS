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
                                        <h4>Cooperative users</h4>
                                        
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($cooperatives as $cooperative)
                                            <tr>
                                            

                                                <td> {{$cooperative->name}}</td>
                                                <td>{{$cooperative->email}}</td>
                                                <td>{{$cooperative->status}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                         <button type="button" class="btn btn-secondary btn-sm">Open</button>
                                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference28" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference28">
                                                          <a class="dropdown-item" href="{{route('status.cooperative',['id'=>$cooperative->id])}}">Active</a>
                                                          <a class="dropdown-item" href="{{route('status.cooperative.disactive',['id'=>$cooperative->id])}}">Disactive</a>
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
