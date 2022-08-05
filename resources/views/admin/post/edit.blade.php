@extends('admin.layout.app')

@section('main-content')


<div class="content-wrapper">

  <div class="card ">
    <div class="row">

      <!-- /.card-header -->
      <!-- form start -->
      {{-- <div role="form" action="{{ route('post.store') }}" method="post"> --}}


        <form role="form" action="{{ route('post.update',$post->id) }}" method="post" class="col-lg-12">
            @csrf
            {{-- {{ csrf_field() }} --}}
            {{-- 'PUT or PATCH are same' --}}
            {{ method_field('PUT') }}

            <div class="col-md-6">

              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
              @include('inc.messages')


              <div class="card-body ">

                <div class="form-group">
                  <label for="title">Post title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Write your Title"value="{{ $post->title }}">
                </div>
                <div class="form-group">
                  <label for="subtitle">Post Sub-title</label>
                  <input type="text" class="form-control" name="subtitle" id="subtitle"
                    placeholder="Write your subtitle" value="{{ $post->subtitle }}">
                </div>
                <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Write your slug"value="{{ $post->slug}}">
                </div>

              </div>
            </div>
            <div class="col-md-6">

              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                  {{-- <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div> --}}
                </div>
              </div><br>
              <div class="form-check">
                <label>
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" 
                @if ($post->status ==1) checked                
                @endif
                >
               Publish</label>
              </div>
            </div>

            {{--
          </div> --}}

          <!-- /.card-body -->
          {{--
          <section class="content-header">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <h3>post body</h3>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </section>
          --}}
          <!-- Main content -->




      <section class="content">
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <h3>post body</h3>

                <div class="card-header">
                  <h3 class="card-title">Summernote</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <textarea id="summernote" name="body">
                    {{ $post->body }}
                  {{-- Place <em>some</em> <u>text</u> <strong>here</strong> --}}

                </textarea>
                </div>

              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->

        <!-- ./row -->
      </section>

      <div class="card-footer col-lg-12">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href='{{ route('post.index') }}' class="btn btn-info">Back</a>

      </div>


      
      </form>
    </div>
  </div>
</div>
<script>
  $(function () {
      // Summernote
      $("#summernote").summernote();

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
      });
    });

    
</script>

@endsection