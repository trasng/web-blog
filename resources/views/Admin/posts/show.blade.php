@extends('layouts.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chi tiết post {{ $title }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <td>Trường dữ liệu
                        </td>
                        <td>
                            Giá trị
                        </td>
                    </tr>
                    <tr>
                        <td>ID
                        </td>
                        <td>{{ $id }}
                        </td>
                    </tr>
                    <tr>
                        <td>Category
                        </td>
                        <td>{{ $name }}
                        </td>
                    </tr>
                    <tr>
                        <td>Title
                        </td>
                        <td>{{ $title }}
                        </td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="{{ $image }}" alt=""></td>
                    </tr>
                    <tr>
                        <td>Excerpt
                        </td>
                        <td>{{ $excerpt }}
                        </td>
                    </tr>
                    <tr>
                        <td>Content
                        </td>
                        <td>{!! $content !!}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

