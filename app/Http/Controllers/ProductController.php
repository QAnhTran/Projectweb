<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;

class ProductController extends Controller
{
    public function index() {
        $pdata = Product::all();
        return view('list',['data'=>$pdata]);
    }
    public function addProduct() {
        $prcdata = Producer::all();
        $prcdata1 = Producer::pluck('producerid','producername');
        return view ('add-product',['prcdata'=>$prcdata, 'prcdata1'=>$prcdata1]);
    
    }

    public function saveProduct(Request $req) {

        $productid = $req->get('productid');
        $productname = $req->get('productname'); 
        $productprice = $req->get('productprice');
        $productdetails = $req->get('productdetails'); 
        $productimage1 = $req->file('productimage1')->getClientOriginalName();
        $productimage2 = $req->file('productimage2')->getClientOriginalName();
        $productimage3 = $req->file('productimage3')->getClientOriginalName(); 
        $producerid = $req->get('producerid');

        $req->productimage1->move(public_path('images'), $productimage1);
        $req->productimage2->move(public_path('images'), $productimage2);
        $req->productimage3->move(public_path('images'), $productimage3);

  

        $prd = new Product();
        $prd->productid = $productid;
        $prd->productname = $productname; 
        $prd->productprice = $productprice;
        $prd->productdetails = $productdetails; 
        $prd->productimage1 = $productimage1;
        $prd->productimage2 = $productimage2; 
        //$prd->productimage3 = $productimage3; 
        $prd->producerid = $producerid;
        $prd->save();

        return redirect('list');
    }

    public function editProduct($productID){
        $data = Product::where('productID','=',$productID)->first();
        $prcdata = Producer::all();
        $prcdata1 = Producer::pluck('producerid','producername');
       
            return view('update', ['data'=>$data, 'prcdata'=>$prcdata, 'prcdata1'=>$prcdata1]);
        }

    public function updateProduct(Request $req) {
         $productID = $req->productid;
         $productName = $req->productname;
         $productPrice = $req->productprice;
         $productDetails = $req->productdetails;
         $productImage1 = $req->productimage1;
         $productImage2 = $req->productimage2;
         $productImage3 = $req->productimage3;
         $producerID = $req->producerid;
                                  
         
         Product::where('productID','=',$productID)->update([
            'productID'=>$productID,
            'productName' => $productName, 
            'productPrice' => $productPrice,
            'productDetails' => $productDetails, 
            'productImage1' => $productImage1,
            'productImage2' => $productImage2,
            'productImage3' => $productImage3,
            'producerID' => $producerID]);
            return redirect('list');
    }
    public function deleteProduct($productID){
        Product::where('productID','=',$productID)->delete();
        return redirect('list');
    }
}