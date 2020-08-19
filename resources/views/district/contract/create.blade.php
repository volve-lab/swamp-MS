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
                              <form  class="general-info" method="POST" action="{{ route('contract.store') }}" aria-label="{{ __('Admin Change Password') }}">
                        @csrf
                                <div class="info">                                
                                    <h6 class="mt-4">Create Contract</h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- <div class="upload ml-md-5 mt-4 pr-md-4">
                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="assets/img/user-profile.jpeg" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                            </div> -->
                                        </div>
                                        <div class="col-lg-8 col-md-7 mt-md-0 mt-4">
                                            <div class="form">
                                                
                                                
                                                <div class="form-group">
                                                    <label for="profession">Start date</label>
                                                    <input id="password-confirm" type="date" class="form-control mb-4" name="start_date" required>

                                                </div>

                                                <div class="form-group">
                                                    <label for="profession">end date</label>
                                                    <input id="password-confirm" type="date" class="form-control mb-4" name="end_date" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="save-info">
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                        <input id="" type="hidden" class="form-control mb-4" name="id" value="{{$payment->id}}">

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