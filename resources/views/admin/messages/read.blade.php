@extends('layouts.admin')

@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Messages <i class="bi bi-tags"></i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Messages </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('messages.index') }}" class="btn btn-primary btn-block mb-3">Back To Inbox</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Folders</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-inbox"></i> Inbox
                                    <span class="badge bg-primary float-right"></span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Read Message</h3>

                        <div class="card-tools">
                            <a href="{{ route('messages.edit', $message->id) }}"
                                class="btn btn-primary float-right ml-2">Edit</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <strong class="h3 font-weight-bold" >{{ $message->name }}</strong>
                            <br>
                            <div><strong class=" font-weight-bold">From:</strong>   {{ $message->email }}
                                <span class="mailbox-read-time float-right">{{ $message->created_at }}</span>
                            </div>
                        </div>

                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            {{ $message->message }}
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <div class="float-right">
                            <!--create mailto link to send email to the sender-->
                            <a href="mailto:{{ $message->email }}" class="btn btn-default"><i class="fas fa-share"></i>
                                Reply</a>

                        </div>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-default">Delete</button>
                        </form>


                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
@endsection
