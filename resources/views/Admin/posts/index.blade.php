@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        {{-- <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách posts</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        @include('components.formSearch',['a'=>'/admin/posts/create'])
                        @if (isset($_GET['key']))
                            <h2>Từ khóa tìm kiếm: {{ $key }}</h2>
                        @endif
                        <div class="row">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Excerpt</th>
                                        <th>Image</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Excerpt</th>
                                        <th>Image</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <th>{{ $item['id'] }}</th>
                                            <th>{{ $item['name'] }}</th>
                                            <th>{{ $item['title'] }}</th>
                                            <th>{{ $item['excerpt'] }}</th>
                                            <th><img src="{{ $item['image'] }}" alt="" width="200px"></th>
                                            <th style="display: grid; gap:20px">
                                                <a class="btn btn-warning" href="/admin/posts/{{ $item['id'] }}/update">
                                                    Update
                                                </a>
                                                <a class="btn btn-info" href="/admin/posts/{{ $item['id'] }}/show">
                                                    Show
                                                </a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Có chắc chắn xóa khônng!')"
                                                    href="/admin/posts/{{ $item['id'] }}/delete">
                                                    Delete
                                                </a>
                                            </th>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                        @if ($posts != [])
                        <!-- Paging -->
                        @include('components.pagding', [
                            'a' => '/admin/posts' ,
                            'total_pages' => $total_pages,
                            'key' => $key,
                        ])
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    {{-- <script src="/assets/admin/js/demo/datatables-demo.js"></script> --}}
@endsection
