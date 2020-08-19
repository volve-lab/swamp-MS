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
                                        <h4> not available Swamp List</h4>
                                        
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>

                                            <th>swamp </th>
                                            <th>district</th>
                                                <th>Cooperative</th>
                                                <th>phone</th>
                                                <th>Location</th>
                                                <th>start date</th>
                                                <th>end date </th>
                                                <!-- <th>leader</th> -->
                                                <!-- <th>Service</th> -->
                                                <!-- <th>status</th> -->
                                                <!-- <th>Comment</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($contracts as $contract)
                                            <tr>
                                           
                                                <td>{{$contract->payment->demand->swamp->name}}</td>
                                                <td>{{DB::table('admins')->where('id',$contract->payment->demand->swamp->district_id)->value('name')}}</td>
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$contract->payment->demand->cooperative_id)->value('names')}}</td>
                                                <td> {{DB::table('cooperative_infos')->where('cooperative_id',$contract->payment->demand->cooperative_id)->value('phone')}}</td>
                                                <td> <a href="{{DB::table('cooperative_infos')->where('cooperative_id',$contract->payment->demand->cooperative_id)->value('location')}}">Link</a></td>
                                                <td>{{$contract->start_date}}</td>
                                                <td>{{$contract->end_date}} {{date("Y-m-d")}} </td>
                                               
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