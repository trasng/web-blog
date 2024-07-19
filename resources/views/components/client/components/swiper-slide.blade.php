<div class="swiper-slide">

    <a href="/post/{{$post->id}}" class="img-bg d-flex align-items-end"
        style="background-image: url('storage/{{$post->image}}');">
        <div class="img-bg-inner">
            <h2>{{$post->title}}</h2>
            <p>
                {{$post->excerpt}}
            </p>
        </div>
    </a>
</div>
