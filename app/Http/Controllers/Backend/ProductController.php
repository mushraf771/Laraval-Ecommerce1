<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Color;
use App\Models\Admin\Product;
use App\Models\Admin\Product_attribute;
use App\Models\Admin\product_images;
use App\Models\Admin\Size;
use App\Models\Admin\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        // $products = ['a', 'b', 'c'];
        return view('backend.show.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $products = Product::where('status', '1')->get();
        $brands = Brand::where('status', '1')->get();
        $taxes = Tax::where('status', '1')->get();
        return view('backend.create.product', compact('categories', 'sizes', 'colors','taxes', 'brands', 'products'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dump($request->post());
        $request->validate([
            'name' => 'required|unique:products,name,',
            'brand_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'sku.*' => 'required|unique:product_attributes,sku',
            // 'images.*'=>'mimes:jpg,jpeg,png|max:1000',
        ]);
        // dump($request->post());
        // die();
        // product
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $img = $image->storeAs('public/media/products', $image_name);
        }
        $model = new Product();
        $model->name = $request->post('name');
        $model->category_id = $request->post('category_id');
        // $model->slug = $request->post('slug');
        $model->brand_id = $request->post('brand_id');
        $model->model = $request->post('model');
        $model->image = $img;
        $model->short_description = $request->post('short_description');
        $model->description = $request->post('description');
        $model->keywords = $request->post('keywords');
        $model->technical_specification = $request->post('technical_specification');
        $model->specification = $request->post('specification');
        $model->uses = $request->post('uses');
        $model->featured = $request->post('featured');
        $model->show_menu = $request->post('show_menu');
        $model->status = $request->post('status');
        $model->is_trending = $request->post('is_trending');
        $model->is_discounted = $request->post('is_discounted');
        $model->is_promotional = $request->post('is_promotional');
        $model->warranty = $request->post('warranty');
        $model->tax_id = $request->post('tax_id');
        $model->lead_time = $request->post('lead_time');
        $model->save();
        /*Product Attribute*/
        $pid = $model->id;
        $sku_arr = $request->post('sku');
        $attribute_image = $request->post('attribute_image');
        $mrp_arr = $request->post('mrp');
        $price_arr = $request->post('price');
        $quantity_arr = $request->post('quantity');
        $size_id_arr = $request->post('size_id');
        $color_id_arr = $request->post('color_id');
        // $status = $request->post('status');
        foreach ($sku_arr as $key => $value) {
            $data['product_id'] = $pid;
            $data['sku'] = $sku_arr[$key];
            $data['mrp'] = $mrp_arr[$key];
            $data['price'] = $price_arr[$key];
            $data['quantity'] = $quantity_arr[$key];
            // $data['status'] = $status[$value];
            if ($size_id_arr[$key] == '') {
                $data['size_id'] = 0;
            } else {
                $data['size_id'] = $size_id_arr[$key];
            }
            if ($color_id_arr[$key] == '') {
                $data['size_id'] = 0;
            } else {
                $data['color_id'] = $color_id_arr[$key];
            }
            if ($request->hasFile("attribute_image.$key")) {
                $attr_image = $request->file("attribute_image.$key");
                $filename = uniqid() . '.' . $attr_image->getClientOriginalExtension();
                $image = new product_images();
                $img = $attr_image->storeAs('public/media/attributes', $filename);
                $data['attribute_image'] = $img;
            } else {
                $data['attribute_image'] = '';
            }
            DB::table('product_attributes')->insert($data);
        }
        /*End attribute*/
        // start product images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $imageFile) {

                $pr_image = $request->file("images.$key");
                $filename = uniqid() . '.' . $pr_image->getClientOriginalExtension();
                $img = $attr_image->storeAs('public/media/attributes', $filename);
                $image = new product_images();
                $path = $pr_image->storeAs('public/media/products', $filename);
                $image->product_id = $pid;
                $image->images = $path;
                $image->save();
            }
        }
        // end product images
        $request->session()->flash('success', 'product Added Successfully');
        return redirect('dashboard/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        $categories = Category::where('status', '1')->get();
        $product_attr = Product_attribute::where('product_id', $id)->get();
        $product_images = Product_images::where('product_id', $id)->get();
        $brands = Brand::where('status', '1')->get();
        $colors = Color::all();
        $sizes = Size::all();
        $taxes = Tax::where('status', '1')->get();
        return view('backend.update.product', compact('product', 'categories', 'brands','taxes', 'product_attr', 'product_images', 'sizes', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products,slug,' . $request->post('pid'),
            'attribute_image.*' => 'required|mimes:jpeg,jpg,png',
        ]);
        // dump($request->post());
        // die();
        $id_arr = $request->post('paid');
        $sku_arr = $request->post('sku');
        $attribute_image = $request->post('attribute_image');
        $mrp_arr = $request->post('mrp');
        $price_arr = $request->post('price');
        $quantity_arr = $request->post('quantity');
        $size_id_arr = $request->post('size_id');
        $color_id_arr = $request->post('color_id');
        // $arr_status = $request->post('status');

        foreach ($sku_arr as $key => $value) {
            $check = DB::table('product_attributes')->where('sku', '=', $sku_arr[$key])->where('id', '!=', $id_arr[$key])->get();
            if (isset($check[0])) {
                $request->session()->flash('sku_error', $sku_arr[$key] . 'sku already used plz try different one ');
                return redirect(request()->headers->get('referer'));
            }
        }
        $product = Product::find($request->post('pid'));
        $img = $product->image;
        if ($request->hasFile('image')) {
            Storage::delete($product->image);
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $img = $image->storeAs('public/media/products', $image_name);
        }
        $model = Product::find($request->post('pid'));
        $model->id = $request->post('pid');
        $model->name = $request->post('name');
        // $model->slug = $request->post('slug');
        $model->brand_id = $request->post('brand_id');
        $model->model = $request->post('model');
        $model->image = $img;
        $model->short_description = $request->post('short_description');
        $model->description = $request->post('description');
        $model->keywords = $request->post('keywords');
        $model->technical_specification = $request->post('technical_specification');
        $model->specification = $request->post('specification');
        $model->uses = $request->post('uses');
        $model->featured = $request->post('featured');
        $model->show_menu = $request->post('show_menu');
        $model->is_trending = $request->post('is_trending');
        $model->is_discounted = $request->post('is_discounted');
        $model->is_promotional = $request->post('is_promotional');
        $model->warranty = $request->post('warranty');
        $model->tax_id = $request->post('tax_id');
        $model->lead_time = $request->post('lead_time');

        // $model->status = $request->post('status');
        $model->save();
        /*Product Attribute*/
        $pid = $model->id;
        foreach ($sku_arr as $key => $value) {
            $data['product_id'] = $pid;
            $data['sku'] = $sku_arr[$key];
            $data['mrp'] = $mrp_arr[$key];
            $data['price'] = $price_arr[$key];
            $data['quantity'] = $quantity_arr[$key];
            // $data['status'] = $arr_status[$key];
            if ($size_id_arr[$key] == '') {
                $data['size_id'] = 0;
            } else {
                $data['size_id'] = $size_id_arr[$key];
            }
            if ($color_id_arr[$key] == '') {
                $data['size_id'] = 0;
            } else {
                $data['color_id'] = $color_id_arr[$key];
            }
            if ($request->hasFile("attribute_image.$key")) {
                $attr_image = $request->file("attribute_image.$key");
                $filename = uniqid() . '.' . $attr_image->getClientOriginalExtension();
                $img = $attr_image->storeAs('public/media/attributes', $filename);
                $data['attribute_image'] = $img;
            } else {
                $data['attribute_image'] = '';
            }
            if ($id_arr[$key] != '') {
                DB::table('product_attributes')->where(['id' => $id_arr[$key]])->update($data);
            } else {
                DB::table('product_attributes')->insert($data);
            }
        }
        /*End attribute*/
        // start product images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $imageFile) {

                $pr_image = $request->file("images.$key");
                $filename = uniqid() . '.' . $pr_image->getClientOriginalExtension();
                $img = $attr_image->storeAs('public/media/attributes', $filename);
                $image = new product_images();
                $path = $pr_image->storeAs('public/media/products', $filename);
                $image->product_id = $pid;
                $image->images = $path;
                $image->save();
            }
        }
        // end product images
        $request->session()->flash('success', 'product Updated Successfully');
        return redirect('dashboard/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $model = Product::find($id);
        $img = $model->image;
        Storage::delete($img);
        $model->delete();
        $request->session()->flash('success', 'product Deleted Successfully');
        return redirect('dashboard/product');
    }
    public function attrdel(Request $request, $paid, $pid)
    {
        $model = Product_attribute::find($paid);
        $img = $model->attribute_image;
        Storage::delete($img);
        $model->delete();
        $request->session()->flash('success', 'Attribute Deleted Successfully');
        return redirect('dashboard/product/edit/' . $pid);
    }
    public function imgdel(Request $request, $paid, $pid)
    {
        $model = product_images::find($paid);
        $img = $model->images;
        Storage::delete($img);
        $model->delete();
        $request->session()->flash('success', 'image Deleted Successfully');
        return redirect('dashboard/product/edit/' . $pid);
    }
    public function status(Request $request, $status, $id)
    {
        $model = Product::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Status updated  Successfully');
        return redirect('dashboard/product');
    }
}
