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
                        <form  method="post" method="post"  action="{{route('swamp.store')}}"  class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}     
                                     <div class="info">                                
                                    <h6 class="mt-4">Register Swamp</h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                        </div>
                                        <div class="col-lg-8 col-md-7 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input id="" type="text" class="form-control mb-4" name="name" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Map Url</label>
                                                    <input id="" type="text" class="form-control mb-4" name="location" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Amount</label>
                                                    <input id="" type="number" class="form-control mb-4" name="amount" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Bank Account </label>
                                                    <input id="" type="text" class="form-control mb-4" name="bank_account" 
                                                     required autofocus> 
                                                </div>
                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="save-info">
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
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