@extends("user/app")
@section('bg-img',Storage::disk('local')->url($post->image))
@section("head")
<link rel="stylesheet" href="{{asset('/user/css/prism.css')}}">
@endsection
@section("title",$post->title)
@section("subHeading",$post->subtitle)
@section("main-content")
<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=672374649784555&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <small class="post-meta"><em>Created at <span href="#">{{$post->created_at->diffForHumans()}}</span></em></small>
                @foreach($post->categories as $category)
                    <small class="pull-right post-meta" style="margin-right:20px;">
                        <em><span><a href="{{route('category',$category->slug)}}">{{$category->name}}</a></span></em>
                    </small>
                @endforeach
                
                {!!htmlspecialchars_decode($post->body)!!}

                {{--Tag Clouds--}}
                <h3>Tag Clouds</h3>
                @foreach($post->tags as $tag)
                    <a href="{{route('tag',$tag->slug)}}"><small class="pull-left post-meta" style="margin-right:20px; border-radius:5px; border:1px solid grey; padding:5px;"><em><span href="#"> {{$tag->name}}</span></em></small></a>
                @endforeach
                
            </div>
            <!--<div class="col-lg-8 col-md-10 mx-auto">
                <div class="fb-comments" data-href="http://pulsar.io/" data-numposts="10"></div>
            </div>-->            
        </div>
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
            </div>
        </div>
    </div>
</article>
  
<hr>
@endsection
@section('footer')
<script src="{{asset('/user/js/prism.js')}}"></script>
@endsection