
@extends('admin.master')
@section('title','Trang Admin')
@section('title-page','Thêm mới')
    <!-- Main content -->
    @section('main-content')
<section class="content">

      <!-- Default box -->
      <div class="col-xs-12">
          <div class="box">

            </div>
            <!-- /.box-header -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới người dùng</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" action="{{route('users.add')}}" method="POST">
                    @csrf
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Tên">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Email">
                      </div>
                      </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                  </form>
                </div>

                <!-- /.box -->

              </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

    @endsection


