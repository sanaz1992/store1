@extends('layouts.main')

@section('title', 'لیست کاربران')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>جداول ساده</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('admin.users.show',['name'=>'sanaz'])}}">خانه</a></li>
                        <li class="breadcrumb-item active">جداول ساده</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">جدول ریسپانسیو</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="جستجو">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tr>
                                    <th>شماره</th>
                                    <th>کاربر</th>
                                    <th>تاریخ</th>
                                    <th>وضعیت</th>
                                    <th>دلیل</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>محمد</td>
                                    <td>11-7-2014</td>
                                    <td><span class="badge badge-success">تایید شده</span></td>
                                    <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>حسام</td>
                                    <td>11-7-2014</td>
                                    <td><span class="badge bg-danger">در حال بررسی</span></td>
                                    <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>رضا</td>
                                    <td>11-7-2014</td>
                                    <td><span class="badge badge-primary">تایید شده</span></td>
                                    <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>پرهام</td>
                                    <td>11-7-2014</td>
                                    <td><span class="badge badge-danger">رد شده</span></td>
                                    <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
