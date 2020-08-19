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
                                <div class="info">                                
                                    <h6 class="mt-4"></h6>
                                    <div class="row">
                                       
                                        <div class="col-lg-12 col-md-7 mt-md-0 mt-4">
                                            <div class="form">
                                            <!-- <div class="col"> -->
                                            <div class="card">
                <div class="card-header">
                    User List
                    <span class="float-right">
                        <a href="{{route('admin.register')}}" class="btn btn-sm btn-success">New User</a>
                    </span>
                </div>
                <div class="card-body">
    @include('multiauth::message')
                    <ul class="list-group">
                        @foreach ($admins as $admin)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $admin->name }}
                            <span class="badge">
                                    @foreach ($admin->roles as $role)
                                        <span class="badge-warning badge-pill ml-2">
                                            {{ $role->name }}
                                        </span> @endforeach
                            </span>
                            {{ $admin->active? 'Active' : 'Inactive' }}
                            <div class="float-right">
                                <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </div>
                        </li>
                        @endforeach @if($admins->count()==0)
                        <p>No User created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                        @endif
                    </ul>
                </div>
            <!-- </div> -->
</div>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>


                   

                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

@endsection