
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
           <a href="{{route('category.create')}}" class="btn btn-success">Thêm mới sản phẩm</a>
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
                    <th>Tên </th>
                    <th>Giá</th>
                    <th>Giá sale</th>
                    <th>Danh mục</th>
                    <th>Ảnh </th>
                    <th>Ngày tạo</th>
                    <th>Tuỳ chọn </th>
                </tr>
                {{-- @foreach ($pr as $item)

                @endforeach --}}

                @forelse ($product as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->sale_price}}</td>
                    <td>{{$item->parent_id}}</td>
                    <td>
                        <img src="{{asset('uploads')}}/{{$item->image}}" alt="" width="100px">
                    </td>



                  <td>
                    <a href="{{route('products.edit',$item)}}" class="btn btn-success">Sửa</a>
                  </td>


                    <td>
                    <form action="{{route('products.destroy',$item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    </td>
                  </tr>
                  @empty
                  <span>chưa có dữ liệu</span>
                  @endforelse

                </tbody></table>
                <a href="{{route('category.trash')}}" class="btn btn-primary"><i class="fa fa-trash"></i> Thùng rác</a>
              </div>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

    @endsection


