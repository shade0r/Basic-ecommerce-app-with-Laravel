<?php

namespace App\Http\Controllers;

use App\Models\Product;
class ProductController extends Controller
{
    //Before Using the Eloquent Model
    // public static $products = [
    //     ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "image" => "game.png", "price"=>"1000"],
    //     ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "image" => "safe.png", "price"=>"999"],
    //     ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "image" => "submarine.png", "price"=>"30"],
    //     ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "image" => "game.png", "price"=>"100"]
    //     ];
        public function index()
        {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        return view('products.index')->with("viewData", $viewData);
        }
        public function show($product_id)
        {
        $viewData = [];
        $product = Product::findOrFail($product_id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] = $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('products.show')->with("viewData",$viewData);
}
}
