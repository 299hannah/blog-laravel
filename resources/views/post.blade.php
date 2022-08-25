@extends('/app')
@section('bg-img',Storage::disk('local')->url($post->image))
@section('head')

<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection

@section('title',$post->title)
@section('sub-heading',$post->subtitle)



@section('main-content')


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="CNNDEXEj"></script>


<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
     
            <div class="col-md-10 col-lg-8 col-xl-7">
                <small>created at {{ $post->created_at->diffForHumans() }}</small>
                @foreach ( $post->categories as $category )
                <small class="pull-right badge" style="margin-right: 5px; border-radius:5px; border: 1px solid gray;">
                    <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a> 
                </small>
                    
                @endforeach

       {!! htmlspecialchars_decode($post->body) !!}
       <h4>Tag cloud</h4>
       @foreach ( $post->tags as $tag )
         <a href="{{ route('tag',$tag->slug) }}">
            <small class="pull-right" style="margin-right: 5px; 
            border-radius:5px; border: 1px solid gray; 
            padding:5px">{{ $tag->name }}</small></a>
         
       @endforeach
            </div>
            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
        </div>
    </div>
</article>
@endsection