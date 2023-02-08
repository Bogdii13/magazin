<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Repository\IAdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public $admin;

    public function __construct(IAdminRepository $admin)
    {
        $this->admin = $admin;
    }




    public function adminShowAllProduct()
    {
        return redirect('/products');
    }

    public function adminShowAllUsers($id)
    {
        return redirect('/users');
    }
}































 //    public function adminShowAllProduct() {
    //        $products =  $this->admin->adminShowAllProduct();
    //        return view('products.index')->with('products', $products);
    //    }
    //
    //
    //    public function adminDeleteProduct($id) {
    //        $this->admin->adminDeleteProduct($id);
    //        return redirect('/products');
    //    }
