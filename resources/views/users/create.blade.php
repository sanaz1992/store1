@extends('layouts.main')

@section('title', 'افزودن کاربر')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>افزودن کاربر</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">خانه</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">مدیریت کاربران</a></li>
                        <li class="breadcrumb-item active">افزودن کاربر</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">افزودن کاربر</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.users.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">نام</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="نام را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">آدرس ایمیل</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                        placeholder="ایمیل را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">رمز عبور</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                        placeholder="رمز عبورّ را وارد کنید">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
