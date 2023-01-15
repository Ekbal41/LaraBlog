@extends('layouts.admin')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Messages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Edit A Message / But you shouldn't HAHA.</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('messages.update',$message->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Sender name..." value="{{$message->name}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Sender email..." value="{{$message->email}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <textarea type="text" name="message" class="form-control" rows="4"  placeholder="Messgae...">
                        {{$message->message}}
                    </textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Message</button>
            </div>
        </form>
    </div>
@endsection