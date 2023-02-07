<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
class ProductsController extends Controller
{

        public function sayHelloTocache(){
          $cache=  Cache::set("name","saqib");
            if($cache){
                return "Hello cache".$cache;
        }
        else{
            return "Hello failed";

        }
        Cache::set("products",Product::all());
        echo Cache::get("products");
        $dataOfCache= Cache::rememberForever("Products" , function(){
           return  Product::all();
        });
        if($dataOfCache){
            echo $dataOfCache;
            echo "success   ";

        }else{
            echo "no no no ";

        }

    }
}
