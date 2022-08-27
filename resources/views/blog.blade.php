@extends('/app')
@section('bg-img', asset('user/assets/img/home-bg.jpg'))

@section('title','My-blog')
@section('sub-heading','Welcome to this blog you can post the awesomeness in you')
@section('main-content')

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
                        <!-- Post preview-->
            @foreach ($posts as $post)

            <div class="post-preview">

                <a href="{{ route('post', $post->slug) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->subtitle }}
                    </h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    {{ $post->created_at->diffForHumans() }}

                </p>
            </div>

            @endforeach
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            {{  $posts->links() }}
          
        </div>
    </div>
</div>
@endsection