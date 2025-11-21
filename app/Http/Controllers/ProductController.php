<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all(); // Assuming you have a Category model
        return view('admin.products.index',['products' => $products, 'categories' => $categories]);
    }

    function showByCategory($category)
    {
        $products = Product::where('category_id', $category)->get();
        
        $output = '';
        foreach ($products as $product) {
            $output .= '<div class="col-md-3 mb-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-1.jpg" alt="">
                        <div class="position-relative p-4 pt-4">
                            <h5 class="mb-3">'.$product->name.'</h5>
                            <p>'.$product->description.'</p>
                            <span class="btn btn-primary rounded-0 py-2 px-lg-3 text-dark text-uppercase font-weight-bold">$'.$product->price.'</a>
                        </div>
                    </div>
                </div>';
        }

        return $output;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //product image
        if($request->image){
            $fileName = time().'_'.$request->file('image')->getClientOriginalName();
            $filePath =$request->image->move('storage/events/branding', $fileName);

            $product_image = $filePath;
        }else{
            $product_image = 'storage/events/default-event.png';
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->image = $product_image;
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
