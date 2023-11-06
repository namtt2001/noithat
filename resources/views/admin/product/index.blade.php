
@extends('admin.master')
@section('title-page','Quản Lý Sản Phẩm')

    <!-- Main content -->
    @section('main-content')
<section class="content">

      <!-- Default box -->
      <div class="col-xs-12">
        @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
	         <button type="button" class="close" data-dismiss="alert">×</button>
             <strong>{{ $message }}</strong>
           </div>
       @endif
          <div class="box">
            <div class="box-header">
           <a href="{{route('product.create')}}" class="btn btn-success">Thêm sản phẩm mới</a>
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
                  <tbody><tr>
                    <th>STT</th>
                    <th>Tên Sản phẩm</th>
                    <th>Giá  </th>
                    <th>Giá km</th>
                    <th>Danh mục</th>
                    <th>ảnh</th>
                    <th>ngày tạo</th>
                    <th>Tùy chọn</th>
                </tr>

                @forelse ($product as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->sale_price}}</td>
                    <td>{{$item->category_id}}</td>
                    <td>{{$item->sale_price}}</td>
                    <td>
                        <img src="{{asset('storage/images')}}/{{$item->image}}" alt="" width="150px">
                    </td>

                    <td>
                    <a href="{{route('product.edit',$item)}}" class="btn btn-success">Sửa</a>
                    </td>
                    <td>
                    <form action="{{route('product.destroy',$item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    </td>
                  </tr>


                </tbody></table>
                <a href="{{route('category.trash')}}" class="btn btn-primary"><i class="fa fa-trash"></i> Thùng rác</a>
              </div>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

    @endsection


