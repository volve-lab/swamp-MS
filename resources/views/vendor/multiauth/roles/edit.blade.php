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
                <div class="card-header">Edit this Role</div>

                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" value="{{ $role->name }}" name="name" class="form-control" id="role">
                        </div>
                        <div class="form-group">
                            <label for="role">Assign Permissions</label>
                            <div class="container">
                                @foreach($permissions as $key => $value)
                                <label for="role">{{$key}}</label>
                                <div class="d-flex justify-content-between">
                                    @foreach($value as $permission)
                                    <div class="form-group">
                                        <label for="{{$permission->id}}">{{$permission->name}}</label>
                                        <input type="checkbox" name="permissions[]" class="form-control"
                                            @if(in_array($permission->id,$role->permissions->pluck('id')->toArray()))
                                        checked
                                        @endif
                                        value="{{$permission->id}}" id="{{$permission->id}}">
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-danger btn-sm float-right">Back</a>
                    </form>
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