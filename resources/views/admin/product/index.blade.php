@extends('admin.master')
@section('title-page', 'Quản Lý Sản Phẩm')

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
                <a href="{{ route('products.create') }}" class="btn btn-success">Thêm mới sản phẩm</a>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Giá sale</th>
                            <th>Danh mục</th>
                            <th>Ảnh</th>
                            <th>Sản phẩm hot</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @forelse ($product as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->sale_price }}</td>
                            <td>{{ $item->parentCategory->name ?? 'null' }}</td>
                            <td><img src="{{ asset('uploads') }}/{{ $item->image }}" alt="" width="100px"></td>
                            <td>{{ $item->stock }}</td>
                            <td>
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-success">Sửa</a>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm không?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Chưa có dữ liệu</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</section>
@endsection
