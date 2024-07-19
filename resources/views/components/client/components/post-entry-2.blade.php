@php
    if (!isset($class)) {
        $class = '';
    }
    // print_r($post)
@endphp
<div class="d-md-flex post-entry-2 {{$class}}">
    <a href="{{ route('post', $post->id) }}" class="me-4 thumbnail">
      <img src="/storage/{{$post->image}}" alt="" width="{{$width ?? ''}}" class="img-fluid">
    </a>
    <div>
      <div class="post-meta"><span class="date">{{$post->name}}</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
        <h3>
            <a href="{{ route('post', $post->id) }}">{{$post->title}}</a>
        </h3>
        <p>{{$post->excerpt}}</p>
        <div class="d-flex align-items-center author">
            <div class="photo">
                <img src="/assets/client/assets/img/person-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="name">
                <h3 class="m-0 p-0">Wade Warren</h3>
            </div>
        </div>
    </div>
  </div>
