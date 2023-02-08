<?php


namespace App\Repository;

use App\Models\Comment;
use App\Models\Product;

class AdminRepository implements IAdminRepository {

    public function adminShowAllProduct()
    {
        return Product::all();
    }


    public function adminDeleteProduct($id)
    {
        return Product::find($id)->delete();
    }



}



?>
