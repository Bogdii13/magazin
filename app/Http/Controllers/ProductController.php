<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     * */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function indexes(Request $request)
    {
        $products = Product::orderBy('name', 'ASC')->paginate(5);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('products.index', compact('products'))->with('i', $value);
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'description' => 'required', 'image' => 'required', 'price' => 'required']); // create new product
        Product::create($request->all());



        return redirect()->route('products.index')->with('success', 'Your product added successfully!');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function updates(Request $request, $id)
    {

        Product::find($id)->update($request->all());
        return redirect()->route('products.index')->with('message', 'Product updated successfully');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product removed successfully');
    }
}




































 //        $this->validate($request, [
        //            'name' => 'required',
        //            'description' => 'required',
        //            'image' => 'required',
        //            'price' => 'required'
        //        ]);






        //        if($image = $request->file('image')) {
        //            $name = time(). '.' .$image->getClientOriginalName();
        //            $image->move(public_path('images'), $name);
        //            $data['image'] = "$name";
        //        }