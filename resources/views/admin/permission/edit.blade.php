@extends('admin.layout.app')

@section('main-content')

<div class="content-wrapper">

  <div class="card ">
    <div class="row justify-content-center">

      <!-- /.card-header -->
      <!-- form start -->



      <form role="form" action="{{ route('permission.update',$permission->id) }}" method="post" class="col-lg-12">
        @csrf
        {{-- {{ csrf_field() }} --}}
        {{ method_field('PATCH') }}


        <div class="col-lg-6  " style="align-items: center">

          <div class="card-header">
            <h3 class="card-title">Permissions</h3>
          </div>
          <div class="card-body ">
            @include('inc.messages')
            <div class="form-group">
              <label for="name">Permission title</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="permission" value="{{ $permission->name }}">
            </div>
            

          </div>
          <div class=" card-footer text-center form-group col-lg-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href='{{ route('permission.index') }}' class="btn btn-info">Back</a>

          </div>
        </div>

      </form>

    </div>
  </div>
</div>



@endsection