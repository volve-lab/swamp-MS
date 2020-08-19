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
                                                <th>phone</th>
                                                <th>Location</th>
                                                <th>status</th>
                                                <th>comment</th>
                                                <th>start date</th>
                                                <th>end date</th>
                                                <th>date</th>
                                                <!-- <th>leader</th> -->
                                                <!-- <th>Service</th> -->
                                                <!-- <th>status</th> -->
                                                <!-- <th>Comment</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($contracts as $contract)
                                            <tr>
                                           
                                                
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$contract->payment->demand->cooperative_id)->value('names')}}</td>
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$contract->payment->demand->cooperative_id)->value('phone')}}</td>
                                                <td> <a href="{{DB::table('cooperative_infos')->where('cooperative_id',$contract->payment->demand->cooperative_id)->value('location')}}">Link</a></td>
                                                <td>{{$contract->status}}</td>
                                                <td>{{$contract->comment}} </td>
                                                <td>{{$contract->start_date}}</td>
                                                <td>{{$contract->end_date}} </td>
                                                <td>{{$contract->created_at}} </td>

                                                <td>
                                                @if($contract->status== 'in')

                                                @else
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary btn-sm">Open</button>
                                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference28" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference28">
                                                          <a class="dropdown-item" href="{{route('contract.edit',['id'=>$contract->id])}}">Update</a>
                                                          <a class="dropdown-item" href="{{route('contract.destroy',['id'=>$contract->id])}}">Delete</a>
                                                        </div>
                                                      </div>

                                                      @endif
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