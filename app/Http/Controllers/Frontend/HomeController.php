<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Color;
use App\Models\Admin\Product;
use App\Models\Admin\Product_attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::with('children')->has('children')->take(4)->get();
        $categories = Category::with('children')->whereNull('parent_id')->take(4)->limit(4)->firstOrFail();;
        // $categories = Category::where('slug', $slug)->with('children')->take(4)->limit(4)->firstOrFail();
        // $children = $categories->children->chunk(4);
        foreach ($categories as  $category) {
            $subcategory = $category->children->where('show_in_menu','1')->take(4)->limit(4);
            dump($subcategory);
        }
        // $sub = $categories->children;
        // dump($sub);
        die();
        $categoryItems = Category::with('children')->with('childrens')->inRandomOrder()->take(4);
        $productItems = Product::inRandomOrder()->take(4);
        $slider1 = $categoryItems
            // ->union($model2Items)
            // ->union($model3Items)
            // Union other model queries here
            ->get();
        $slider2 = $productItems
            // ->union($model2Items)
            // ->union($model3Items)
            // Union other model queries here
            ->get();
        // dump($slider1);
        return view('frontend.pages.welcome', compact('categories', 'slider1', 'slider2'));
    }
    public function category(Category $category, Request $request, $slug)
    {
        // $slug = $request->query('slug');
        // dump($slug);
        // $slug = $id;
        // dump($slug);
        $data = Category::with('children')->with('childrens')->where('slug', '=', $slug)->where('status', '1')->get();
        // dump($data);
        return view('frontend.pages.categories', compact('data'));
    }
    public function listcategory($slug)
    {
        $categories = Category::where('slug', $slug)->with('children')->take(4)->limit(4)->firstOrFail();
        $children = $categories->children->chunk(4);
        dump($children);
        // die();
        return view('frontend.pages.listcategories', compact('categories', 'children'));
    }
    public function products($slug)
    {
        $data = Product::where('category_slug', '=', $slug)->paginate(10);
        // foreach ($data as  $value) {
        //    $data = $value;
        // }
        // dump($data);
        // die();
        return view('frontend.pages.subproduct', compact('data'));
    }
    public function subproduct(Request $request, $slug)
    {
        $data = Product::with('product_attributes')->with('product_images')->with('brand')->where('slug', $slug)->get();
        foreach ($data as  $value) {
            $data = $value;
        }
        $top_brand = Brand::where('top_brand', 1)->where('id', '!=', $data->brand_id)->take(3)->get();
        $related_product = Product::where('category_id', '=', $data->category_id)->take(4)->get();

        // dump($brand);
        // foreach ($data->product_attributes as $images) {
        //     $product_images = $images;
        //     dump($product_images);
        // }
        // die();
        return view('frontend.pages.product', compact('data', 'top_brand', 'related_product'));
    }
    public function subcategories($name, $prod, $pr)
    {
        $data = Category::with('childrens')->where('slug', '=', $pr)->where('status', '1')->get();
        // $subdata = Product::with('brand')->with('size')->with('category')->with('')   ->where('slug','=',$pr)->where('status','1')->get();
        // $subdata = Product::with('product_attributes')->where('status','1')->get();
        $subdata = Category::with('products')->where('slug', $pr)->get();
        dump($subdata);
        foreach ($subdata as  $item) {
            // echo"<pre>";
            $a  = $item->products;
            // print_r($a);
            // echo"</pre>";
            foreach ($a as $b) {
                $attr = Product_attribute::where('product_id', '=', $b->id)->get();
                //   dump($b->id);
            }
            // dump($item->products);
            // $attr = Product::with('product_attributes')->with('product_images')->where('id','=',$item->products->product_id)->get();
            // $attr = Product_attribute::where('product_id','=',$item->products->id)->get();
            // dump($attr);
        }

        // die();
        // dump($subdata);
        return view('frontend.pages.categories', compact('subdata', 'attr'));
    }

    public function categories($id)
    {
        $subdata = Category::with('products')->where('$slug', $id)->get();
        // foreach ($subdata as  $item) {
        //     // echo "<pre>";
        //     // print_r($item);
        //     // echo "</pre>";
        //     $dot = $item;
        //     dump($dot);
        //     dump($dot);
        // }
        // die();
        dump($subdata);

        return view('frontend.pages.categories', compact('subdata'));
    }
    public function subproductsn($id)
    {
        $subdata = Product::where('category_id', $id)->get();
        // foreach ($subdata as  $item) {
        //     // echo "<pre>";
        //     // print_r($item);
        //     // echo "</pre>";
        //     $dot = $item;
        //     dump($dot);
        //     dump($dot);
        // }
        // die();
        dump($subdata);

        return view('frontend.pages.subproduct', compact('subdata'));
    }
    public function product()
    {
        return view('frontend.pages.product');
    }
    // public function productDetails()
    // {
    //     return view('frontend.pages.product');
    // }
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
    }
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
