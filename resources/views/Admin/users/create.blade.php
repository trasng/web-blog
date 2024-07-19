
@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm mới người dùng</h6>
            </div>
            <div class="card-body">
                <h1>Thêm mới người dùng</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required
                    name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required
                    name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" required
                    name="password">
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar:</label>
                <input type="file" class="form-control" id="avatar" placeholder="Enter avatar" name="avatar">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
    </div>
@endsection
