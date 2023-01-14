@extends('layouts.admin')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Posts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary m-4">
        <div class="card-header">
          <h3 class="card-title">Add Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Post Title...">
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Post Image</label>
              <div class="mb-3">
                
                <input class="form-control" type="file" id="formFile" name = "image">
              </div>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" class="form-control" name="author"id="exampleInputEmail1" placeholder="Author name...">
            </div>

            <div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" name="short" rows="3" placeholder="Short Description ..."></textarea>
            </div>
            
            <div class="form-group">
                <label>Select a category</label>
                <select class="form-control select2" style="width: 100%;" name="category" >
                  
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Write your Post...
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <textarea id="summernote" name="post">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                  </textarea>
                </div>
                
              </div>
              <div class="form-group">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1">
                  <label class="custom-control-label" for="customSwitch3">Publish Post Immideatly</label>
                </div>
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add post</button>
          </div>
        </form>
      </div>
@endsection
