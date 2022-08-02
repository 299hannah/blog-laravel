@extends('admin.layout.app')

@section('main-content')

<div class="content-wrapper">

  <div class="card ">
    <div class="row justify-content-center">

      <!-- /.card-header -->
      <!-- form start -->



      <form role="form" action="{{ route('tag.store') }}" method="post" class="col-lg-12">
        @csrf
        {{-- {{ csrf_field() }} --}}

        <div class="col-lg-6  " style="align-items: center">

          <div class="card-header">
            <h3 class="card-title">Titles</h3>
          </div>
          <div class="card-body ">
            @include('inc.messages')
            <div class="form-group">
              <label for="name">Tag title</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Write your Tag Title">
            </div>
            
            <div class="form-group">
              <label for="slug">Tag Slug</label>
              <input type="text" class="form-control" name="slug" id="slug" placeholder="Write your slug">
            </div>

          </div>
          <div class=" card-footer text-center form-group col-lg-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>



@endsection