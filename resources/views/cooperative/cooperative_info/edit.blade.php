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
                        <form  method="post" method="post"  action="{{route('cooperative.update')}}"  class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}     
                                     <div class="info">                                
                                    <h6 class="mt-4">Update Cooperative</h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="upload ml-md-5 mt-4 pr-md-4">
                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ URL::to('/') }}/certificates/{{$cooperative_info->certificate}}" data-max-file-size="2M" name="certificate" value="{{$cooperative_info->certificate}}"/>
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Certificate</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input id="" type="text" class="form-control mb-4" name="names" value="{{$cooperative_info->names}}"
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Email</label>
                                                    <input id="" type="email" class="form-control mb-4" name="email" value="{{$cooperative_info->email}}"
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">phone</label>
                                                    <input id="" type="text" class="form-control mb-4" name="phone" value="{{$cooperative_info->phone}}"
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Cooperative leader</label>
                                                    <input id="" type="text" class="form-control mb-4" name="leader" value="{{$cooperative_info->leader}}" 
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Map Url</label>
                                                    <input id="" type="text" class="form-control mb-4" name="location" value="{{$cooperative_info->location}}"
                                                     required autofocus> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="firstName">Services</label>
                                                    <textarea id="" type="text" class="form-control mb-4" name="services" value="{{$cooperative_info->services}}"
                                                     required autofocus> {{$cooperative_info->services}} </textarea>
                                                </div>

                                                
                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="save-info">
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                        <input id="" type="hidden" class="form-control mb-4" name="id" value="{{$cooperative_info->id}}">

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
