@php
    $categories = App\Models\Category::getForMenu();
    $postsNew   = App\Models\Post::getTopNew(6);
    $postsTrend = App\Models\Post::getTrending(6);
    $postsOld   = App\Models\Post::getTopOld(6);
@endphp
<div class="col-md-3">
    <!-- ======= Sidebar ======= -->
    <div class="aside-block">

        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular"
                    aria-selected="true">Newest</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending"
                    type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest"
                    type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Oldest</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <!-- Popular -->
            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                aria-labelledby="pills-popular-tab">
                @foreach ($postsNew as $post)
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta">
                            <span class="date">{{ $post->name }}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2">
                            <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                @endforeach
            </div> <!-- End Popular -->

            <!-- Trending -->
            <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                @foreach ($postsTrend as $post)
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta">
                            <span class="date">{{ $post->name }}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2">
                            <a href="{{ route('post', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                @endforeach

            </div> <!-- End Trending -->

            <!-- Latest -->
            <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                @foreach ($postsOld as $post)
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta">
                            <span class="date">{{ $post->name }}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2">
                            <a href="{{ route('post', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                @endforeach


            </div> <!-- End Latest -->

        </div>
    </div>

    <div class="aside-block">
        <h3 class="aside-title">Video</h3>
        <div class="video-post">
            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                <span class="bi-play-fill"></span>
                <img src="/assets/client/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
            </a>
        </div>
    </div><!-- End Video -->

    <div class="aside-block">
        <h3 class="aside-title">Categories</h3>
        <ul class="aside-links list-unstyled">
            @foreach ($categories as $item)
                <li>
                    <a href="{{ route('category', $item->id) }}">
                        <i class="bi bi-chevron-right"></i>
                        {{ $item->name }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div><!-- End Categories -->

    <div class="aside-block">
        <h3 class="aside-title">Tags</h3>
        <ul class="aside-tags list-unstyled">
            @foreach ($categories as $item)
                <li>
                    <a href="{{ route('category', $item->id) }}">
                        {{ $item->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div><!-- End Tags -->

</div>
