@extends("admin.app")
@section('headSection')
<link rel="stylesheet" href="{{asset('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section("adminHome-content")
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        POSTS
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
        <a href="{{route('post.create')}}" class="btn btn-primary col-lg-offset-6">Create Post</a>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Slug</th>
                  <th>Created At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                  <td> {{$loop->index + 1}} </td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  <td>{{$post->created_at}}</td>
                <td><a href="{{route('post.edit',$post->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                  <form id="delete-form-{{$post->id}}" action="{{route('post.destroy',$post->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <a href=""  onclick="
                  if(confirm('Are you sure, You Want to delete this?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $post->id }}').submit();
                      }
                      else{
                        event.preventDefault();
                      }" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-trash"  ></span>
                    
                  </a>
                  
                </tr>
               
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Slug</th>
                  <th>Created At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>
@endsection