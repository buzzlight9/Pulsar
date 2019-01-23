@extends("admin.app")
@section("headSection")
<link rel="stylesheet" href="{{asset('/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
@section("adminHome-content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Create Post <small>Create something beautiful</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Editors</li>
            </ol>
        </section>
        @include("messages.error")
        <!-- Main content -->
        <section class="content">
                <div class="box">
                    <div class="box-header">
                        <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Post Title</label>
                                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Post SubTitle</label>
                                                <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Sub Title" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Category</label>
                                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" >{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Post Slug</label>
                                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Tags</label>
                                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Tag" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                                    @foreach($tags as $tag)
                                                        <option value="{{$tag->id}}" >{{$tag->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">File input</label>
                                                <input type="file"  name="image" id="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Description</label>
                                                <textarea type="text" name="description" class="form-control" id="desc" placeholder="Short description about your post" autofocus></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-body">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-body pad">
                                            <textarea id="editor1" name="body" rows="10" cols="80" autofocus></textarea>
                                        </div>
                                        <div class="box-footer box-body">
                                            <label>
                                                <input type="checkbox" name="status" value="1"> Publish
                                            </label>
                                        </div>
                                        <div class="box-footer box-body">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{route('post.index')}}" class="btn btn-warning">Go Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-header -->
                </div>
            </section>
    </div>
@endsection
@section('footerSection')
<script src="{{asset('/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('/admin/ckeditor/ckeditor.js')}}"></script>
<script>
    $(document).ready(function()
    {
        $('.select2').select2();
    });
</script>
@endsection