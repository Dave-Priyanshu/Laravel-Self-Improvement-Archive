<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function index(){
        // Fetch all products from the 'product' table
        // $products = \DB::table('product')->simplePaginate(10); 
        $products = Product::simplePaginate(10);// Adjusted to match table name
        return view('products.index', compact('products'));

        // Insert multiple products into the 'products' table
        // DB::table('product')->insert([
        //     [
        //         'name' => 'Product A',
        //         'price' => 29.99,
        //         'description' => 'Description for Product A',
        //     ],
        //     [
        //         'name' => 'Product B',
        //         'price' => 19.99,
        //         'description' => 'Description for Product B',
        //     ],
        //     [
        //         'name' => 'Product C',
        //         'price' => 39.99,
        //         'description' => 'Description for Product C',
        //     ],
        // ]);

        // return "Products inserted successfully!";
    }

    public function updateProduct($id){
        //update the price with the id
        DB::table('product')
            ->where('id',$id)
            ->update(['price' => 600]);

        return "Product with ID: $id updated successfully!";
    }
}
