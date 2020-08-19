<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:47:49 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SWAMP MS </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('asset/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('asset/assets/css/support-chat.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/plugins/charts/chartist/chartist.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/assets/css/default-dashboard/style.css')}}" rel="stylesheet" type="text/css" />    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->  
    
      <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
      <link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/table/datatable/custom_dt_html5.css')}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->

     <!--  BEGIN CUSTOM STYLE FILE  -->
     <link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/dropify/dropify.min.css')}}">
    <link href="{{asset('asset/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->   

         <!-- BEGIN PAGE LEVEL STYLES -->
         <link href="{{asset('asset/plugins/popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/plugins/popup/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->    



</head>
<body class="default-sidebar">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
       
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown language-dropdown ml-1  ml-lg-0">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="flagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/ca.svg" alt=""> <span class="d-lg-inline-block d-none"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="flagDropdown">
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/de.svg" class="flag-width" alt=""> &#xA0;German</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/jp.svg" class="flag-width" alt=""> &#xA0;Japanese</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/fr.svg" class="flag-width" alt=""> &#xA0;French</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ru.svg" class="flag-width" alt=""> &#xA0;Russian</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ca.svg" class="flag-width" alt=""> &#xA0;English</a>
                </div>
            </li>
        </ul>




        <ul class="navbar-nav flex-row ml-lg-auto">
            
           

            


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
            
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12">{{ auth('cooperative')->user()->name }}</span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    
                   
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                              

                    <form id="logout-form" action="{{ route('cooperative.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                </div>
            </li>

          
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="{{route('cooperative.dashboard')}}" class="navbar-brand">
                            <img src="{{asset('asset/assets/img/swamp_logo.jpeg')}}" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{route('cooperative.dashboard')}}" class="nav-link"> SWAMP MS </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <!-- <a href="{{route('cooperative.dashboard')}}" aria-expanded="true" class="dropdown-toggle"> -->
                            <div class="">
                                <!-- <i class="flaticon-computer-6 ml-3"></i> -->
                                <!-- <span>Dashboard</span> -->
                            </div>

                           
                        </a>
                       
                    </li>


                 




                                        <li class="menu">
                                            <a href="#cooperative" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                                <div class="">
                                                    <i class=""></i>
                                                    <span>Cooperative</span>
                                                </div>
                                                <div>
                                                    <i class="flaticon-right-arrow"></i>
                                                </div>
                                            </a>
                                            <ul class="collapse submenu list-unstyled" id="cooperative" data-parent="#accordionExample">
                                            <li>
                                                        <a href="{{ route('cooperative.create') }}"> Register </a>

                                                </li>

                                                <li>
                                                        <a href="{{ route('cooperative.index') }}"> Information </a>

                                                </li>
                                            
                                                
                                            </ul>
                                        </li>

                                        <p hidden>{{ $user=DB::table('cooperatives')->where('id',auth('cooperative')->user()->id)->where('status',1)->value('status') }}</p>
                                        <p hidden>{{ $status=DB::table('cooperative_infos')->where('cooperative_id',auth('cooperative')->user()->id)->where('status','Approved')->value('status') }}</p>

                                        @if($user==1 && $status=='Approved')

                                        <li class="menu">
                                            <a href="#request" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                                <div class="">
                                                    <i class=""></i>
                                                    <span>Request</span>
                                                </div>
                                                <div>
                                                    <i class="flaticon-right-arrow"></i>
                                                </div>
                                            </a>
                                            <ul class="collapse submenu list-unstyled" id="request" data-parent="#accordionExample">
                                            <li>
                                                        <a href="{{ route('cooperative.swamp') }}"> swamp </a>

                                                </li>

                                                <li>
                                                        <a href="{{ route('demand.index') }}"> Requests </a>

                                                </li>
                                                <li>
                                                        <a href="{{ route('payment.index') }}"> Payments </a>

                                                </li>

                                            
                                                
                                            </ul>
                                        </li>
                                        @endif




                                        <li class="menu">
                                            <a href="#contract" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                                <div class="">
                                                    <i class=""></i>
                                                    <span>Contract</span>
                                                </div>
                                                <div>
                                                    <i class="flaticon-right-arrow"></i>
                                                </div>
                                            </a>
                                            <ul class="collapse submenu list-unstyled" id="contract" data-parent="#accordionExample">
                                            <li>
                                                        <a href="{{ route('cooperative.contract.index') }}"> Contracts </a>

                                                </li>

                                            
                                                
                                            </ul>
                                        </li>
</ul>


            </nav>

        </div>

        <!--  END SIDEBAR  -->
        
@yield('content')

    </div>
    <!-- END MAIN CONTAINER -->


    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
             
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('asset/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/loader.js')}}"></script>
    <script src="{{asset('asset/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('asset/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('asset/plugins/charts/chartist/chartist.js')}}"></script>
    <script src="{{asset('asset/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('asset/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('asset/plugins/calendar/pignose/moment.latest.min.js')}}"></script>
    <script src="{{asset('asset/plugins/calendar/pignose/pignose.calendar.js')}}"></script>
    <script src="{{asset('asset/plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/default-dashboard/default-custom.js')}}"></script>
    <script src="{{asset('asset/assets/js/support-chat.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

      <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
      <script src="{{asset('asset/plugins/table/datatable/datatables.js')}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{asset('asset/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('asset/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script src="{{asset('asset/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('asset/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'csv', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'print', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                ]
            },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

     <!--  BEGIN CUSTOM SCRIPTS FILE  -->
     <script src="{{asset('asset/plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('asset/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>    
    <script>
        $('.dropify').dropify({
            messages: { 'default': 'Click to Upload or Drag n Drop', 'remove':  '<i class="flaticon-close-fill"></i>', 'replace': 'Upload or Drag n Drop' }
        });
    </script>
    <!--  END CUSTOM SCRIPTS FILE  -->

            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('asset/plugins/popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/plugins/popup/custom-maginfic-popup.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/preview-equation/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:54:43 GMT -->
</html>