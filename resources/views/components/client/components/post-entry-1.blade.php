@php
    if (!isset($class)) {
        $class = '';
    }
    // print_r($post)
@endphp
<div class="post-entry-1 {{$class}}" >
    @if ($hiddenImage == false )
        <a href="{{ route('post', $post->id) }}">
            <img src="storage/{{$post->image}}" alt="" class="img-fluid">
        </a>
    @endif

    <div class="post-meta">
        <span class="date">{{$post->name}}</span>
        <span class="mx-1">&bullet;</span>
        <span>Jul 5th '22</span>
    </div>
    <h2 class="mb-2">
        <a href="{{ route('post', $post->id) }}">{{$post->title}}</a>
    </h2>
    @if ($hiddenEx == false)
        <p class="mb-4 d-block">{{$post->excerpt}}</p>
    @endif

    @if ($hiddenAuthor == false)
        <div class="d-flex align-items-center author">

            @if ($hiddenImAuthor == false)
            <div class="photo">
                <img src="/assets/client/assets/img/person-1.jpg" alt="" class="img-fluid">
            </div>
            @endif

            <div class="name">
                <span class="m-0 p-0">Cameron Williamson</span>
            </div>
        </div>
    @endif
</div>
