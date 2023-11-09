@extends('admin.master')
@section('title', 'Trang Admin')
@section('title-page', 'Sửa sản phẩm')
<!-- Main content -->
@section('main-content')
    <section class="content">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="col-md-8">
                <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border"> </div>
         <form role="form" method="POST" action="{{ route('products.update',$product->id ) }}" enctype="multipart/form-data">

            @csrf

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @error('name') has-error @enderror">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" id="productName" name="name" onkeyup="ChangeToSlug()" value="{{ $product->name }}" required>
                            @error('name')
                                </span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="exampleInputEmail1">Đường dẫn slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug }}" required>
                        @error('name')
                            </span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input type="text" class="form-control" id="menu" name="price" value="{{ $product->price }}" required>
                        @error('name')
                            </span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="exampleInputEmail1">Giá sale</label>
                        <input type="text" class="form-control" id="menu" name="sale_price" value="{{ $product->sale_price }}" required>
                        @error('name')
                            </span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="exampleInputEmail1">Ảnh sản phẩm</label>
                        <input type="file" class="form-control" id="menu" name="photo" value="{{ $product->photo }}" >
                        @error('name')
                            </span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chọn Danh Mục</label>
                        <select name="parent_id" id="input" class="form-control" value="{{ $product->parent_id }}" required>
                            <option value="">Chọn danh mục cha </option>
                            <td>
                                {{ $item->parentCategory->name ?? 'null' }}
                            </td>

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="exampleInputEmail1">Ảnh chi tiết</label>
                        <input type="file" class="form-control" id="name" name="photos[]" multiple value="{{ $product->photos }}" >
                        @error('name')
                            </span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

            </div>
                <div class="form-group @error('name') has-error @enderror">
                    <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                    <textarea name="description" id="editor1" rows="7" cols="80" value="{{ $product->description }}" required>

                             </textarea>
                </div>

            </div>

            <!-- /.box -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
            </form>
        </div>


        </div>
        <!-- /.box -->
        </div>
        <!-- /.box -->

    </section>

@endsection
@section('custom-js')

    <script src="{{ asset('asset/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>

<script language="javascript">
    function ChangeToSlug()
    {
        var productName, slug;

        //Lấy text từ thẻ input title
        productName = document.getElementById("productName").value;

        //Đổi chữ hoa thành chữ thường
        slug = productName.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>

@endsection
