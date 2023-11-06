
@extends('admin.master')
    <!-- Main content -->
    @section('main-content')
<section class="content">

      <!-- Default box -->
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <a href="{{route('users.create')}}" class="btn btn-success">+Thêm mới danh mục</a>
           <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Thao tác</th>

                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>


                            <td>
                            <a href="edit-menu.html" class="btn btn-success">Sửa</a>
                            <a href="" class="btn btn-danger">Xóa</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody></table>
              </div>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

    @endsection


