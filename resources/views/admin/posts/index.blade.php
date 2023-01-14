@extends('layouts.admin')

@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Posts <i class="bi bi-tags"></i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Posts </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card w-100">
        <div class="card-header ">
            <a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Add
                new</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width:5%">SN</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/' . $data->image) }}" height="50px", width="50px" /></td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->author }}</td>
                            <td>{{ $data->category->name }}</td>
                            <td>
                                @if ($data->published == true)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-danger">Unpublished</span>
                                @endif
                            
                            <td>
                                
                                <form action="{{ route('posts.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger float-right ml-2">Delete</button>
                                </form>
                                <a href="{{ route('posts.edit', $data->id) }}"
                                    class="btn btn-primary float-right ml-2">Edit</a>
                                <a href="{{route('admin.home')}}"
                                    class="btn btn-success float-right ml-2">Show</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Serial Number</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
