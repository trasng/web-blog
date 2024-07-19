<x-client.layouts.master title="Home">
    <!-- ======= Hero Slider Section ======= -->
    <x-client.layouts.slide :postSlide="$postSlide"/>

    <!-- End Hero Slider Section -->
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4">
                    <x-client.components.post-entry-1
                        :post="$postFirst[0]"
                        :hiddenAuthor="false"
                        :class="'lg'"
                        :hiddenEx="false"
                        :hiddenImage="false"
                        :hiddenImAuthor="false"/>
                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($postTop6 as $item)
                            <div class="col-lg-4 border-start custom-border">
                                @foreach ($item as $post)
                                    <x-client.components.post-entry-1
                                        :post="$post"
                                        :hiddenAuthor="false"
                                        :class="''"
                                        :hiddenEx="true"
                                        :hiddenImage="false"
                                        :hiddenImAuthor="false" />
                                @endforeach
                            </div>
                        @endforeach

                        <!-- Trending Section -->
                        <div class="col-lg-4">
                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    @foreach ($postTrending as $key => $post)
                                        <li>
                                            <a href="/post/{{ $post->id }}">
                                                <span class="number">{{ $key }}</span>
                                                <h3>{{ $post->title }}</h3>
                                                <span class="author">Jane Cooper</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->


                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Văn hóa</h2>
                <div>
                    <a href="/category/6" class="more">Tất cả bài viết về văn hóa</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <x-client.components.post-entry-2
                        :post="$postFirstVH"
                        :hiddenAuthor="false"
                        :hiddenEx="false"/>
                    <div class="row">
                        <div class="col-lg-4">

                            @foreach ($posts2VH as $key => $post)
                                @if ($key == 0)
                                    <x-client.components.post-entry-1
                                        :post="$post"
                                        :class="'border-bottom'"
                                        :hiddenAuthor="true"
                                        :hiddenEx="false"
                                        :hiddenImage="false"
                                        :hiddenImAuthor="false"/>
                                @else
                                    <x-client.components.post-entry-1
                                        :post="$post"
                                        :hiddenEx="true"
                                        :class="''"
                                        :hiddenImage="true"
                                        :hiddenAuthor="true"
                                        :hiddenImAuthor="true"/>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-lg-8">
                            <x-client.components.post-entry-1
                                :post="$posts3VH[0]"
                                :hiddenEx="false"
                                :class="''"
                                :hiddenImage="false"
                                :hiddenAuthor="true"
                                :hiddenImAuthor="false"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    @foreach ($posts6VH as $post)
                        <x-client.components.post-entry-1
                            :post="$post"
                            :hiddenEx="true"
                            :class="'border-bottom'"
                            :hiddenImage="true"
                            :hiddenAuthor="false"
                            :hiddenImAuthor="true"/>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Thể Thao</h2>
                <div><a href="/category/7" class="more">Tất cả bài viết về thể thao</a></div>
            </div>

            <div class="row">
                <div class="col-md-9 order-md-2">
                    <x-client.components.post-entry-2
                        :post="$postFirstTT"/>
                    <div class="row">
                        <div class="col-lg-4">
                            @foreach ($posts2TT as $key => $post)
                                @if ($key == 0)
                                    <x-client.components.post-entry-1
                                        :post="$post"
                                        :hiddenEx="false"
                                        :class="'border-bottom'"
                                        :hiddenImage="false"
                                        :hiddenAuthor="true"
                                        :hiddenImAuthor="false"/>
                                @else
                                    <x-client.components.post-entry-1
                                            :post="$post"
                                            :hiddenEx="true"
                                            :class="''"
                                            :hiddenImage="true"
                                            :hiddenAuthor="true"
                                            :hiddenImAuthor="true"/>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-lg-8">
                            <x-client.components.post-entry-1
                                :post="$posts3TT[0]"
                                :hiddenEx="false"
                                :class="''"
                                :hiddenImage="false"
                                :hiddenAuthor="true"
                                :hiddenImAuthor="false"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    @foreach ($posts6TT as $post)
                        <x-client.components.post-entry-1
                            :post="$post"
                            :hiddenEx="true"
                            :class="'border-bottom'"
                            :hiddenImage="true"
                            :hiddenAuthor="false"
                            :hiddenImAuthor="true"/>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Đời Sống</h2>
                <div>
                    <a href="/category/5" class="more">
                        Tất cả bài viết về đời sống
                    </a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    @foreach ($posts3DS as $key => $post)
                        @if ($key == 0)
                            <x-client.components.post-entry-1
                                :post="$post"
                                :hiddenEx="false"
                                :class="'lg'"
                                :hiddenImage="false"
                                :hiddenAuthor="false"
                                :hiddenImAuthor="false"/>
                        @elseif($key == 1)
                            <x-client.components.post-entry-1
                                :post="$post"
                                :hiddenEx="true"
                                :class="'border-bottom'"
                                :hiddenImage="true"
                                :hiddenAuthor="true"
                                :hiddenImAuthor="true"/>
                        @else
                            <x-client.components.post-entry-1
                                :post="$post"
                                :hiddenEx="true"
                                :class="''"
                                :hiddenImage="true"
                                :hiddenAuthor="true"
                                :hiddenImAuthor="true"/>
                        @endif
                    @endforeach

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($postTop6DS as $item)
                            <div class="col-lg-4 border-start custom-border">
                                @foreach ($item as $post)
                                    <x-client.components.post-entry-1
                                        :post="$post"
                                        :hiddenEx="true"
                                        :class="''"
                                        :hiddenImage="false"
                                        :hiddenAuthor="true"
                                        :hiddenImAuthor="false"/>
                                @endforeach
                            </div>
                        @endforeach

                        <div class="col-lg-4">
                            @foreach ($posts6DS as $post)
                                <x-client.components.post-entry-1
                                    :post="$post"
                                    :hiddenEx="true"
                                    :class="'border-bottom'"
                                    :hiddenImage="true"
                                    :hiddenAuthor="false"
                                    :hiddenImAuthor="true"/>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section><!-- End Lifestyle Category Section -->
</x-client.layouts.master>

