@extends("admin.app")

@section("adminHome-content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">Edit Permission <small>Advanced form element</small></h1>
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
            <form role="form" action="{{route('permission.update',$permision->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="form-group">
                                <label for="name">Permission Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Role Name" value="{{$permision->name}}">
                            </div>
                            <div class="form-group">
                                <label for="for">Permission for</label>
                                <select name="for" id="for" class="form-control">
                                    <option selected disabled>Select Permission for</option>
                                    <option value="user">User</option>
                                    <option value="post">Post</option>
                                    <option value="other">Other</option>
                                </select>
                                </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('permission.index')}}" class="btn btn-warning">Go Back</a>
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