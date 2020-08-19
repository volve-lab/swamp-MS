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
                                                <th>swamp</th>
                                                <th>Amount</th>
                                                <th>status</th>
                                                <th>comment</th>
                                                <th>date</th>
                                                <!-- <th>leader</th> -->
                                                <!-- <th>Service</th> -->
                                                <!-- <th>status</th> -->
                                                <!-- <th>Comment</th> -->
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($payments as $payment)
                                            <tr>
                                            <td>{{ DB::table('cooperative_infos')->where('cooperative_id',$payment->demand->cooperative->id)->value('names')}}</td>
                                                <td><a href="{{$payment->demand->swamp->location}}">Link</a></td>
                                                <td>{{number_format($payment->demand->swamp->amount)}} RWF</td>                                          
                                                      <td>{{$payment->status}} </td>
                                                <td>{{$payment->comment}} </td>
                                                <td>{{$payment->created_at}} </td>

                                              
                                               
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
