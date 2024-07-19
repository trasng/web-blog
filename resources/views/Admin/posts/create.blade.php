@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm mới bài viết</h6>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="category_id" class="form-label">Thể loại:</label>
                        <select name="category_id" id="">
                            @foreach ($categories as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="title" class="form-control" id="title" placeholder="Enter title" required
                            name="title">
                    </div>
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt:</label>
                        <input type="excerpt" class="form-control" id="excerpt" placeholder="Enter excerpt" required
                            name="excerpt">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content:</label>
                        <textarea style="height: 500px" type="content" class="form-control" id="editor" placeholder="Enter content" required name="content">
        
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
    
@endsection
