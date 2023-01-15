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
                        <li class="breadcrumb-item active">Footer</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Navbar Setting</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('setting.nfooter')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Copy right text</label>
                    <input type="text" name="copy" class="form-control" id="exampleInputEmail1" placeholder="link ..." value="{{ $data->copy_right }}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook link</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="link ..." value="{{ $data->facebook }}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Twitter link</label>
                    <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" placeholder="link ..." value="{{ $data->twitter }}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Insta link</label>
                    <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" placeholder="link ..." value="{{ $data->instagram }}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Youtube link</label>
                    <input type="text" name="youtube" class="form-control" id="exampleInputEmail1" placeholder="link ..." value="{{ $data->youtube }}">
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
