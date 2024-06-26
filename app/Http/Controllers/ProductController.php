<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product-list', compact('products'));
    }

    public function create()
{
    $categories = Category::all();
    return view('admin.product.product-add', compact('categories'));
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required|numeric|min:0', // Validate price
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required', // Validate category_id
        ]);
    
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
    
        $request->image->move(public_path('image'), $imageName);
    
        // Create a new Product instance
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->input('unit_price'); // Assign price
        $product->image = $imageName; // Save the image file name
        $product->category_id = $request->input('category_id'); // Assign category_id
        $product->save();
    
        // Redirect back to the list of products
        return redirect()->route('products.index')->with('success', 'Thêm mới sản phẩm thành công.');
    }
    

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.product-edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        // Tìm xe cần cập nhật thông tin
        $products = Product::findOrFail($id);
    
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra hình ảnh (nếu cần)
        ]);
    
        // Update car information
        $products->name = $request->name;
        $products->description = $request->description;
    
        // Kiểm tra nếu có file ảnh mới được gửi lên
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có
            if ($products->image) {
                $oldImagePath = public_path('image/' . $products->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Lưu ảnh mới
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('image'), $imageName);
            $products->image = $imageName;
        }
    
        // Kiểm tra nếu checkbox "Xóa ảnh" được chọn
        if ($request->has('delete_image')) {
            // Kiểm tra xem xe có ảnh hay không
            if ($products->image) {
                // Xóa ảnh hiện tại
$imagePath = public_path('image/' . $products->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                // Đặt trường image thành null
                $products->image = null;
            }
        }
    
        // Lưu thông tin xe đã cập nhật
        $products->save();
    
        // Redirect về danh sách xe sau khi cập nhật thành công
        return redirect()->route('products.index')->with('success', 'Thông tin xe đã được cập nhật thành công.');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Category deleted successfully.');
    }
}
