@extends('admin.layout.main')
@section('title')
    Blog
@endsection
@section('titlePage')
    Create Page
@endsection
@section('body')
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input name="title" value="{{old('title')}}" type="text" class="form-control @error('title') is-ivanlid @enderror" id="title" placeholder="Enter products name">
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Content">Post Content</label>
                                <textarea name="Content"  class="form-control @error('Content') is-invalid @enderror" rows="3" placeholder="Enter auther...">{{old('Content')}}</textarea>
                                @error('Content')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="auther">Post auther</label>
                                <input type="text" value="{{old('auther')}}" name="auther" class="form-control @error('auther') is-invalid @enderror" id="auther" placeholder="Enter name auther">
                                @error('auther')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="image">post Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" clsas="custom-file-input @error('image') is-invalid @enderror" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose image</label>
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror

                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
