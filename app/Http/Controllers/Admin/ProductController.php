<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ImgProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Product::all();
       // $product = Product::with('category:id,name')->paginate(10);

        return view('admin.product.index',compact('product'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('photo')) {
            $avatar = $request->file('photo');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->parent_id = $request->input('parent_id');
        $product->image = $fileName;
        $product->description = $request->input('description');

        $product->save();

        $productId = $product->id;

        // Xử lý và thêm danh sách ảnh chi tiết
        $photos = $request->file('photos');
        $photoPaths = [];

        if (!empty($photos)) {
            foreach ($photos as $photo) {
                $path = $photo->store('product_photos');

                // Thêm ảnh vào bảng product_images và liên kết với sản phẩm bằng product_id
                ImgProduct::create([
                    'product_id' => $productId,
                    'image' => $path,
                ]);
                // dd(ImgProduct::create([
                //     'product_id' => $productId,
                //     'image' => $path,
                // ]));
            }
        }


        return redirect()->intended(route('products.index'))->with ('success',' thêm thành công');


    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('photo')) {
            $avatar = $request->file('photo');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->parent_id = $request->input('parent_id');
        $product->image = $fileName;
        $product->description = $request->input('description');

        $product->save();

        $productId = $product->id;
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product = Product::find($id);
        $ImgProduct =ImgProduct ::where('product_id', $product->id)->delete();
        $product->delete();
        return redirect()->route('products.index')->with('success',' Xoá   thành công');

    }
}
