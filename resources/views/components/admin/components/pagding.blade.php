@php
    $pageN;
    $pageP;
    if (isset($_GET['page'])) {
        # code...
        if ($_GET['page'] == $total_pages) {
            $pageN = 1;
        } else {
            $pageN = $_GET['page'] + 1;
        }
        if ($_GET['page'] == 1) {
            $pageP = $total_pages;
        } else {
            $pageP = $_GET['page'] - 1;
        }
    } else {
        if ($total_pages == 1) {
            $pageN = 1;
            $pageP = 1;
        } else {
            $pageN = 2;
            $pageP = $total_pages;
        }
    }

@endphp
<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
            Showing 1 to {{ $total_pages }} of {{ $total_pages }} entries</div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item previous" id="dataTable_previous">
                    @if ($key !== '')
                        <a href="{{ $a }}?key={{ $key }}&page={{ $pageP }}"
                            aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">
                            Previous
                        </a>
                    @else
                        <a href="{{ $a }}?page={{ $pageP }}" aria-controls="dataTable" data-dt-idx="2"
                            tabindex="0" class="page-link">
                            Previous
                        </a>
                    @endif
                </li>

                @if ($key !== '')
                    @for ($i = 1; $i <= $total_pages; $i++)
                        <li
                            class="paginate_button page-item {{ isset($_GET['page']) && $_GET['page'] == $i ? 'active' : '' }}">
                            <a href="{{ $a }}?key={{$key}}&page={{ $i }}" aria-controls="dataTable"
                                data-dt-idx="{{ $i }}" tabindex="{{ $i - 1 }}" class="page-link">
                                {{ $i }}
                            </a>
                        </li>
                    @endfor
                @else
                    @for ($i = 1; $i <= $total_pages; $i++)
                        <li
                            class="paginate_button page-item {{ isset($_GET['page']) && $_GET['page'] == $i ? 'active' : '' }}">
                            <a href="{{ $a }}?page={{ $i }}" aria-controls="dataTable"
                                data-dt-idx="{{ $i }}" tabindex="{{ $i - 1 }}" class="page-link">
                                {{ $i }}
                            </a>
                        </li>
                    @endfor
                @endif
                <li class="paginate_button page-item next" id="dataTable_next">
                    @if ($key !== '')
                        <a href="{{ $a }}?key={{ $key }}&page={{ $pageN }}"
                            aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">
                            Next
                        </a>
                    @else
                        <a href="{{ $a }}?page={{ $pageN }}" aria-controls="dataTable"
                            data-dt-idx="2" tabindex="0" class="page-link">
                            Next
                        </a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</div>
