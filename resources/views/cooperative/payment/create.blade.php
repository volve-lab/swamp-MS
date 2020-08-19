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
                        <form  method="post" method="post"  action="{{route('payment.store')}}"  class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}     
                                     <div class="info">                                
                                    <h6 class="mt-4">Upload bank receipt</h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="upload ml-md-5 mt-4 pr-md-4">
                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="" data-max-file-size="2M" name="bank_receipt" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload bank receipt</p>
                                            </div>
                                        </div>

                                        <input id="" type="hidden" class="form-control mb-4" name="id" value="{{$demand->id}}">

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
