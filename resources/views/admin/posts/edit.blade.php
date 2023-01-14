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
        <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Post Title..." value="{{$post->title}}">
            </div>
           
            
            <div class="form-group">
              <label for="exampleInputFile">Post Image</label>
              
              <div class="mb-3">
                <img src="{{ asset('storage/' . $post->image) }}" height="90px", width="90px" style="border-radius: 9px; margin-bottom: 15px" />
                
                <input class="form-control" type="file" id="formFile" name = "image">
              </div>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" class="form-control" name="author"id="exampleInputEmail1" placeholder="Author name..." value = "{{$post->author}}">
            </div>

            <div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" name="short" rows="3" placeholder="Short Description ...">
                    {{$post->meta_description}}
                </textarea>
            </div>
            
            <div class="form-group">
                <label>Select a category</label>
                <select class="form-control select2" style="width: 100%;" name="category" >
                  <option selected="selected" value="{{$post->category->id}}">{{$post->category->name}}</option>
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
                    {{$post->content}}
                  </textarea>
                </div>
                
              </div>
              <div class="form-group">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <?php
                    if($post->published == 1){
                        echo '<input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1" checked>';
                    }else{
                        echo '<input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1">';
                    }
                    ?>
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
