<div>
    <div class="row">
   @foreach ($list_post as $post)
   <div class="col-md-3 col-12">
    <a href="{{ route('slug.index',['slug'=>$post->slug]) }}">
    <div class="img-wrapper">
        <img class="img-fluid" src="{{ asset('images/post/'.$post->image) }}" alt="{{ $post->image }}">
    </div>
        <h5 class="title">{{ $post->title }}</h5>
    </a>
        <span class="text-center">{!! Str::words($post->detail,15, '  [...]') !!}</span>
   </div>
   @endforeach
</div>
</div>