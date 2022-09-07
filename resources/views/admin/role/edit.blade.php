@extends('admin.layout.app')

@section('main-content')

<div class="content-wrapper">

  <div class="card ">
    <div class="row justify-content-center">

      <!-- /.card-header -->
      <!-- form start -->



      <form role="form" action="{{ route('role.update',$role->id) }}" method="post" class="col-lg-12">
        @csrf
        {{-- {{ csrf_field() }} --}}
        {{ method_field('PATCH') }}

        <div class="col-lg-6  " style="align-items: center">

          <div class="card-header">
            <h3 class="card-title"> Edit Role</h3>
          </div>
          <div class="card-body ">
            @include('inc.messages')
            <div class="form-group">
              <label for="name">Role title</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="role title" value="{{ $role->name }}">
            </div>
            
            <div class="row">
              <div class="col-lg-4">
                <label for="name">Post Permissions</label>
                @foreach ($permissions as $permission)
                @if ($permission->for == 'post')
                <div class="checkbox">
                  <label for=""><input type="checkbox" name="permission[]" value="{{ $permission->id }}"   @foreach ($role->permissions as $role_permit )
                    @if($role_permit->id == $permission->id)
                        checked
                    @endif()
                  @endforeach>{{ $permission->name }}</label>
                
              
                </div>
                @endif
               
                @endforeach
              
             
              </div>
              <div class="col-lg-4">
                <label for="name">User Permissions</label>
                @foreach ($permissions as $permission)
                @if ($permission->for == 'user')
                <div class="checkbox">
                  <label for=""><input type="checkbox" name="permission[]" value="{{ $permission->id }}"   @foreach ($role->permissions as $role_permit )
                    @if($role_permit->id == $permission->id)
                        checked
                    @endif()
                  @endforeach>{{ $permission->name }}</label>
                </div>
                @endif
               
                @endforeach
             
              </div>

              <div class="col-lg-4">
                <label for="name">User Permissions</label>
                @foreach ($permissions as $permission)
                @if ($permission->for == 'other')
                <div class="checkbox">
                  <label for=""><input type="checkbox" name="permission[]" value="{{ $permission->id }}"  
                     @foreach ($role->permissions as $role_permit )
                    @if($role_permit->id == $permission->id)
                        checked
                    @endif()
                  @endforeach>{{ $permission->name }}</label>
                </div>
                @endif
               
                @endforeach
             
              </div>
            </div>
          </div>
          <div class=" card-footer text-center form-group col-lg-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href='{{ route('role.index') }}' class="btn btn-info">Back</a>

          </div>
        </div>

      </form>

    </div>
  </div>
</div>



@endsection