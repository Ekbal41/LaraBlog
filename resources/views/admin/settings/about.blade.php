@extends('layouts.admin')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Setting</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary m-4">
        <div class="card-header">
          <h3 class="card-title">About Setting</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('setting.nabout')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Author Name</label>
              <input type="text" name="yname" class="form-control" id="exampleInputEmail1" placeholder="name..." value="{{$about->yname}}">
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Author Image</label>
              <div class="mb-3">
                <img src="{{ asset('storage/' . $about->about_image) }}" height="90px", width="90px" style="border-radius: 9px; margin-bottom: 15px" />
                
                <input class="form-control" type="file" id="formFile" name = "image" value="{{$about->about_image}}">
              </div>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Location</label>
                <input type="text" class="form-control" name="location"id="exampleInputEmail1" placeholder="location ..." value="{{$about->location}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email"id="exampleInputEmail1" placeholder="email ..." value="{{$about->email}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="phone"id="exampleInputEmail1" placeholder="phone ..." value="{{$about->phone}}">
            </div>
            
            
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Write your About...
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <textarea id="summernote" name="about">
                    {{$about->about}}
                  </textarea>
                </div>
                
              </div>
             
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Svae Changes</button>
          </div>
        </form>
      </div>
@endsection
