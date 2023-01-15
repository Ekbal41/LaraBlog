@extends('layouts.admin')

@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories <i class="bi bi-tags"></i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Categories </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card w-100">
        <div class="card-header ">
            <a href="{{ route('messages.create') }}" class="btn btn-primary float-right">Add
                new</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10%">S Number</th>
                        <th>Sender Name </th>
                        <th>Sender Email </th>
                        <th>Time</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                
                                <form action="{{ route('messages.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger float-right ml-2">Delete</button>
                                </form>
                                <a href="{{ route('messages.edit', $data->id) }}"
                                    class="btn btn-primary float-right ml-2">Edit</a>
                                <a href="{{route('admin.home')}}"
                                    class="btn btn-success float-right ml-2">Show</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        
                        <th>S Number</th>
                        <th>Sender Name </th>
                        <th>Sender Email </th>
                        <th>Time</th>
                        <th>Actions</th>

                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
