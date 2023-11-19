@extends('admin.master')
@section('title-page', 'Danh Sách Danh Mục')

@section('main-content')
<section class="content">
    <div class="col-xs-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="box">
            <div class="box-header">
                <a href="{{ route('category.create') }}" class="btn btn-success">Thêm mới danh mục</a>


                <form >
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input  name="key" class="form-control right" placeholder="Tìm kiếm">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search">Tìm</i></button>
                        </div>
                    </div>
                </form>
                <hr>

            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Danh mục cha</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @forelse ($categories as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->parentCategory->name ?? 'null' }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{!! $item->status ? '<span class="label label-success">Hiển thị</span>' : '<span class="label label-danger">Ẩn</span>' !!}</td>
                            <td>
                                <a href="{{ route('category.edit', $item) }}" class="btn btn-success">Sửa</a>
                            </td>
                            <td>
                                <form action="{{ route('category.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">Chưa có dữ liệu</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <a href="{{ route('category.trash') }}" class="btn btn-primary"><i class="fa fa-trash"></i> Thùng rác</a>
            </div>
        </div>
    </div>

</section>
@endsection
