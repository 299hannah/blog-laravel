@extends('admin.layout.app')

@section('headsection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
{{--
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> --}}
{{--
<link rel="stylesheet" href="{{ asset('') }}"> --}}

<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
{{-- <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> --}}
<script>
  table = $('#example').DataTable( {
    "paging": true,
      "ordering": true,
    "responsive": true,
       "lengthChange": false, 
       "autoWidth": false
} );
</script>
@endsection
@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blank Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Roles</h3><br><br>
        <a class="col-lg-offset-5 btn btn-outline-primary" href="{{ route('role.create') }}">Add New</a>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.Name</th>
                  <th>Role Name</th>
             
                  <th>Edit</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($roles as $role)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $role->name }}</td>
                  <td><a href=" {{ route('role.edit',$role->id) }}"><ion-icon name="create-outline"></ion-icon></a></td>
                 <form method="post" action="{{ route('role.destroy',$role->id) }}" id="delete-form-{{ $role->id }}" style="display: none">
                @csrf
                {{ method_field('DELETE') }}
                </form>
                 
                  <td>
                    <a href="" onclick="if(confirm('Are you sure, You want to delete?')){
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $role->id }}').submit();}
                      else{
                        event.preventDefault();
                      }
                      
                      "><ion-icon size="small" name="close-circle-outline"></ion-icon></a>
                  </td>
                </tr>
                @endforeach



              </tbody>
              <tfoot>

                <tr>
                  <th>S.Name</th>
                  <th>Role Name</th>
                 
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>


@endsection