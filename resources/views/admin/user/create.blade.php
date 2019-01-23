@extends("admin.app")

@section("adminHome-content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">Add Admin <small>Advanced form element</small></h1>
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
            <form role="form" action="{{route('user.store')}}" method="post">
            {{csrf_field()}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="form-group">
                                <label for="name">User Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="User Name" value="{{old('name')}}" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{old('phone')}}" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{old('password')}}" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="confirm Password" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="status"
                                        @if(old('status') == 1) 
                                            checked
                                        @endif value="1">
                                        Status
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                            <label>Assign Role :</label>
                            <div class="row">
                                @foreach($roles as $role)
                                    <div class="col-lg-4">
                                        <div class="checkbox">
                                        <label><input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('user.index')}}" class="btn btn-warning">Go Back</a>
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