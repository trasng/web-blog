
@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        @include('components.formSearch',['a'=>'/admin/users/create'])
                        @if (isset($_GET['key']))
                            <h2>Từ khóa tìm kiếm: {{ $key }}</h2>
                        @endif
                        <div class="row">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Avatar</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Avatar</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <th>{{ $item['id'] }}</th>
                                            <th>{{ $item['name'] }}</th>
                                            <th>{{ $item['email'] }}</th>
                                            <th>{{ $item['password'] }}</th>
                                            <th><img src="{{ $item['avatar'] }}" alt="" width="200px"></th>
                                            <th>
                                                <a class="btn btn-warning"
                                                    href="/admin/users/{{ $item['id'] }}/update">Update</a>
                                                <a class="btn btn-info"
                                                    href="/admin/users/{{ $item['id'] }}/show">Show</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Có chắc chắn xóa khônng!')"
                                                    href="/admin/users/{{ $item['id'] }}/delete">Delete</a>
                                            </th>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                        @if ($users != [])
                        <!-- Paging -->
                        @include('components.pagding', [
                            'a' => '/admin/users',
                            'total_pages' => $total_pages,
                            'key' => $key,
                        ])
                        <!-- End Paging -->
                    @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
