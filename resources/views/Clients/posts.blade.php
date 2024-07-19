<x-client.layouts.master title="posts">
    <section id="search-result" class="search-result">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if (isset($_GET['key']))
                        <h3 class="category-title">Các bài posts với từ khóa: {{$_GET['key']}}</h3>
                    @else
                        <h3 class="category-title">Các bài posts:</h3>
                    @endif
                    @foreach ($posts as $post)
                        <x-client.components.post-entry-2
                            :post="$post"
                            :class="'small-img'"
                            :width="289"/>
                    @endforeach

                    @if(!empty($posts[0]))
                        <!-- Paging -->
                        <x-client.components.paging
                        :a="'posts'"
                        :page="$total_pages"
                        :key="$key"/>
                        <!-- End Paging -->
                    @endif


                </div>
                <x-client.components.sidebar/>
            </div>
        </div>
    </section> <!-- End Search Result -->
</x-client.layouts.master>
