<x-client.layouts.master title="{{ $postTop5[0]->name }}">
    <section>
        <div class="container">
            <div class="row">
                {{-- {{ dd($postTop5) }} --}}
                <div class="col-md-9" data-aos="fade-up">
                    <h3 class="category-title">Category: {{ $postTop5[0]->name }}</h3>
                    @foreach ($postTop5 as $item)
                        <x-client.components.post-entry-2
                            :post="$item"
                            :class="'half'"
                            :width="483"/>
                    @endforeach
                    {{-- {{ dd($key) }} --}}
                    @if (!empty($postTop5[0]))
                        <!-- Paging -->
                        <x-client.components.paging
                            :a="'category/' . $id"
                            :page="$total_pages"
                            :key="$key"/>
                        <!-- End Paging -->
                    @endif
                </div>
                <x-client.components.sidebar/>
            </div>
        </div>
    </section>
</x-client.layouts.master>

