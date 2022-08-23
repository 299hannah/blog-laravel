@extends('/app')
@section('bg-img', asset('user/assets/img/post-bg.jpg'))

@section('title',$post->title)
@section('sub-heading',$post->subtitle)



@section('main-content')
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
     
            <div class="col-md-10 col-lg-8 col-xl-7">
                <small>created at {{ $post->created_at->diffForHumans() }}</small>
                @foreach ( $post->categories as $category )
                <small class="pull-right badge" style="margin-right: 5px; border-radius:5px; border: 1px solid gray;">{{ $category->name }}</small>
                    
                @endforeach

       {!! htmlspecialchars_decode($post->body) !!}
       <h4>Tag cloud</h4>
       @foreach ( $post->tags as $tag )
       <small class="pull-right" style="margin-right: 5px; border-radius:5px; border: 1px solid gray; padding:5px">{{ $tag->name }}</small>
           
       @endforeach
            </div>
        </div>
    </div>
</article>
@endsection