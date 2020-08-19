@extends('cooperative.layouts.app')

@section('content')
 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    
                </div>
                
                <div class="container">
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form  method="post" method="post"  action="{{route('cooperative.store')}}"  class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}     
                                     <div class="info">                                
                                    <h6 class="mt-4">Register Cooperative</h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="upload ml-md-5 mt-4 pr-md-4">
                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="" data-max-file-size="2M" name="certificate" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Certificate</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input id="" type="text" class="form-control mb-4" name="names" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Email</label>
                                                    <input id="" type="email" class="form-control mb-4" name="email" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">phone</label>
                                                    <input id="" type="text" class="form-control mb-4" name="phone" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Cooperative leader</label>
                                                    <input id="" type="text" class="form-control mb-4" name="leader" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Map Url</label>
                                                    <input id="" type="text" class="form-control mb-4" name="location" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Services</label>
                                                    <textarea id="" type="text" class="form-control mb-4" name="services" 
                                                     required autofocus> </textarea>
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
