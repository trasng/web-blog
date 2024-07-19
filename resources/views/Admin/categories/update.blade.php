

@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Cập nhật category:</h6>
            </div>
            <div class="card-body">
                <h1>Cập nhật người category</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{$category['name']}}" required name="name">
                        </div>    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection

