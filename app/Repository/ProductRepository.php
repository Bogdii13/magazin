<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository {

    public function getAllProducts()
    {
        return Product::all();
    }


    public function createProduct(array $data)
    {
        // Product::create([
        //     'name' => $data['name'],
        //     'description' => $data['description'],
        //     'image' => $data['image'],
        //     'price' => $data['price']
        // ]);

        $product = new Product();
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->image = $data['image'];
        $product->price = $data['price'];


        $product->save();

    }

    public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
        Product::find($id)->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image'],
            'price' => $data['price']
        ]);
    }

}



?>
