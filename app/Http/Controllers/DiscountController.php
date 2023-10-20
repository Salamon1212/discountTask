<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\product;
use App\Models\cart;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartData = cart::get();
        $productData = product::get();
        $reductData = cart::sum('discount_price');
        return view('index',compact('productData','cartData','reductData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $tags = $request->tags;
        $vendor = $request->vendor;
        $data = new discount();
        $dis = $data->where('vendor',$vendor)->value($tags);
        if($price !== '' && $dis !== ''){
            $discount = ( $price * $dis )/100;
            $discount;
            $discountPrice = $price - $discount;
            // echo $discountPrice;
            $product = new product();
            $product->product_name = $name;
            $product->price = $price;
            $product->tags = $tags;
            $product->vendor = $vendor;
            $product->save();
            return redirect('dashboard')->with('message, success');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(discount $discount , $id)
    {
        $name = product::where('id',$id)->value('product_name');
        $vendor = product::where('id',$id)->value('vendor');
        $tags = product::where('id',$id)->value('tags');
        $price = product::where('id',$id)->value('price');
        $data = new discount();
        $dis = $data->where('vendor',$vendor)->value($tags);
        if($price !== '' && $dis !== '' && $dis !== 0){
            $discount = ( $price * $dis )/100;
            $discount;
            $discountPrice = $price - $discount;
            $cart = new cart();
            $cart->product_id = $id;
            $cart->product_name = $name;
            $cart->org_price = $price;
            $cart->discount_percentage = $dis;
            $cart->discount_price = $discountPrice;
            $cart->reduction_price = $price-$discountPrice;
            $cart->vendor = $vendor;
            $cart->save();
            return redirect('dashboard')->with('message', 'success');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(discount $discount, $id)
    {
        cart::where('product_id',$id)->delete();
        return redirect('dashboard');
    }
}
