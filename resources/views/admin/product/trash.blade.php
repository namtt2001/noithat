
@extends('admin.master')
@section('title-page','Thùng rác')

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


            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Danh mục cha </th>
                    <th>Ngày tạo</th>
                    <th>Trạng thái</th>
                    <th>Tùy chọn</th>
                </tr>

                @forelse ($categories as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->parent_id}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{!!$item->status ? '<span class="label label-success">Hiển thị</span>':'<span class="label label-danger">Ẩn</span>'!!}</td>
                    <td>
                    <a href="{{route('category.restore',$item->id)}}" class="btn btn-success">Khôi phục</a>
                    <a href="{{route('category.forceDelete',$item->id)}}" onclick="return confirm('ban có chắc')" class="btn btn-danger">Xoá vĩnh viễn</a>
                    </td>


                  </tr>
                  @empty
                  <span>chưa có dữ liệu</span>
                  @endforelse

                </tbody></table>

              </div>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

    @endsection


