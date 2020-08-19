@extends('multiauth::layouts.app')
@section('content')
        <!--  BEGIN CONTENT PART  -->

        @admin('district')

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>

                <div class="row layout-spacing ">

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-line-chart"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Available</p>
                                        <!-- <p class="widget-numeric-value">98,225</p> -->
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">{{DB::table('swamps')->where('status','available')->where('district_id',auth('admin')->user()->id)->count()}} Swamp</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-order-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-cart-bag"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Not available</p>
                                        <!-- <p class="widget-numeric-value">24,017</p> -->
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">{{DB::table('swamps')->where('status','not available')->where('district_id',auth('admin')->user()->id)->count()}} Swamp</p>
                            </div>
                        </div>
                    </div>

                    

                

                </div>


            </div>
        </div>

        @endadmin

        @admin('rema')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard</h3>
            </div>
        </div>

        <div class="row layout-spacing ">

            <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-sales-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-line-chart"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Available</p>
                                <!-- <p class="widget-numeric-value">98,225</p> -->
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">{{DB::table('swamps')->where('status','available')->count()}} Swamp</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-sales-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-line-chart"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Not available</p>
                                <!-- <p class="widget-numeric-value">98,225</p> -->
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">{{DB::table('swamps')->where('status','not available')->count()}} Swamp</p>
                    </div>
                </div>
            </div>


           

         

        </div>


    </div>
</div>

@endadmin
        <!--  END CONTENT PART  -->

     
@endsection