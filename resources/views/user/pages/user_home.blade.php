@extends("user/app")

@section("bg-img",asset("user/img/pulsarhome-bg.png"))
@section("title","Pulsar")
@section("subHeading","Welcome To Pulsar")

@section("main-content")
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    @foreach($posts as $post)
                        <a href="{{route('post',$post->slug)}}">
                            <h2 class="post-title">
                                {{$post->title}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{$post->subtitle}}
                            </h3>
                            
                        </a>
                        <p>{{$post->description}}<br><a href="{{route('post',$post->slug)}}" class="btn btn-info readMore">Read more...</a></p>
                        
                        <p class="post-meta">Posted by
                            <a href="#">Username</a>
                            {{$post->created_at->diffForHumans()}}
                        </p>
                    @endforeach
                </div>
                <div class="clearfix">
                {{$posts->links()}}
                <!--<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>-->
            </div>
            </div>
        </div>
    </div>

    <hr>
@endsection