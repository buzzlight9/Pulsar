@extends("admin.app")

@section("adminHome-content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">Create Roles <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
        </ol>
    </section>
    @include("messages.error")
    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                        <div class="box box-info">
                                <div class="box-body">
            <form role="form" action="{{route('role.store')}}" method="post">
            {{csrf_field()}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Role Title">
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="">Posts Permissions</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'post')
                                            <div class="checkbox">
                                                <label for=""><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <label for="">User Permissions</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'user')
                                            <div class="checkbox">
                                                <label for=""><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Other Permissions</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'other')
                                            <div class="checkbox">
                                                <label for=""><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('role.index')}}" class="btn btn-warning">Go Back</a>
                            </div>
                        
                        </div>
                    </div><!-- /.box-body -->
                </form>
                                </div></div></div>
            </div><!-- /.box-header -->
        </div>
    </section>
</div>
@endsection