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
                <div class="card-header bg-info text-white">
                    Roles
                    @permitTo('CreateRole')
                    <span class="float-right">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                    </span>
                    @endpermitTo
                </div>

                <div class="card-body">
                    @include('multiauth::message')
                    <ol class="list-group">
                        @foreach ($roles as $role)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $role->name }}
                            <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} Users</span>
                            <span class="badge badge-warning badge-pill">{{ $role->permissions->count() }}
                                Permissions</span>
                            <div class="float-right">
                                @permitTo('DeleteRole,UpdateRole')
                                <a href="" class="btn btn-sm btn-secondary mr-3"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}"
                                    action="{{ route('admin.role.delete',$role->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf @method('delete')
                                </form>
                                @endpermitTo

                                @permitTo('UpdateRole')
                                <a href="{{ route('admin.role.edit',$role->id) }}"
                                    class="btn btn-sm btn-primary mr-3">Edit</a>
                                @endpermitTo
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
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