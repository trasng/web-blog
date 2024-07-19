<x-client.layouts.master title="{{ $post->title }}">
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta">
                            <span class="date">{{ $post->name }}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h1 class="mb-5">{{ $post->title }}</h1>
                        <p>{{ $post->excerpt }}</p>

                        <figure class="my-4">
                            <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">
                        </figure>
                        <div class="ioioi" style="white-space: break-spaces;">
                            {!! $post->content !!}
                        </div>
                    </div><!-- End Single Post Content -->


                </div>
                {{-- @include('Client.components.sidebar') --}}
                <x-client.components.sidebar/>
            </div>
        </div>
    </section>
</x-client.layouts.master>
