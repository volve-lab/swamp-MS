@extends('multiauth::layouts.app') 
@section('content')
 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    
                </div>
                
                <div class="container">
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                              <form  class="general-info" method="POST" action="{{ route('contract.update') }}" aria-label="{{ __('Admin Change Password') }}">
                        @csrf
                                <div class="info">                                
                                    <h6 class="mt-4">Edit Contract</h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                          
                                        </div>
                                        <div class="col-lg-8 col-md-7 mt-md-0 mt-4">
                                            <div class="form">
                                                
                                                
                                                <div class="form-group">
                                                    <label for="profession">Start date</label>
                                                    <input id="password-confirm" type="date" class="form-control mb-4" name="start_date" value="{{$contract->start_date}}" required>

                                                </div>

                                                <div class="form-group">
                                                    <label for="profession">end date</label>
                                                    <input id="password-confirm" type="date" class="form-control mb-4" name="end_date" value="{{$contract->end_date}}" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="save-info">
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                        <input id="" type="hidden" class="form-control mb-4" name="id" value="{{$contract->id}}">

                                            <button type="submit" class="btn btn-gradient-warning mb-4 float-right btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                   

                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

@endsection