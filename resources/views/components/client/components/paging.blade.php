{{-- {{ dd($a) }} --}}
@php
    $pageN;
    $page;
    $pageP;
    if (isset($_GET['page'])) {
        # code...
        if ($_GET['page'] == $page) {
            $pageN = 1;
        } else {
            $pageN = $_GET['page'] + 1;
        }
        if ($_GET['page'] == 1) {
            $pageP = $page;
        } else {
            $pageP = $_GET['page'] - 1;
        }
    } else {
        if ($page == 1) {
            $pageN = 1;
            $pageP = 1;
        } else {
            $pageN = 2;
            $pageP = $page;
        }
    }

@endphp
<div class="text-start py-4">

    <div class="custom-pagination">
        @if ($key !== '')
            <a href="/{{ $a }}?key={{ $key }}&page={{ $pageP }}" class="prev">Prevous</a>
        @else
            <a href="/{{ $a }}?page={{ $pageP }}" class="prev">Prevous</a>
        @endif

        @if ($key !== '')
            @for ($i = 1; $i <= $page; $i++)
                <a href="/{{ $a }}?key={{ $key }}&page={{ $i }}"
                    class="{{ isset($_GET['page']) && $_GET['page'] == $i ? 'active' : '' }}">
                    {{ $i }}
                </a>
            @endfor
        @else
            @for ($i = 1; $i <= $page; $i++)
                <a href="/{{ $a }}?page={{ $i }}"
                    class="{{ isset($_GET['page']) && $_GET['page'] == $i ? 'active' : '' }}">
                    {{ $i }}
                </a>
            @endfor
        @endif


        @if ($key !== '')
            <a href="/{{ $a }}?key={{ $key }}&page={{ $pageN }}" class="next">Next</a>
        @else
            <a href="/{{ $a }}?page={{ $pageN }}" class="next">Next</a>
        @endif

    </div>
</div>
