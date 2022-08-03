<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $pdata = Product::all();
        //return $data;
        //return view('list',compact('data'));
        return view('list',['data'=>$pdata]);
    }
    public function addProduct() {
        return view('add-product');
    }
    public function saveProduct(Request $req) {

        $productid = $req->get('productid');
        $productname = $req->get('productname'); 
        $productprice = $req->get('productprice');
        $productdetails = $req->get('productdetails'); 
        $productimage1 = $req->file('productimage1')->getClientOriginalName();
       // $productimage2 = $req->file('productimage2')->getClientOriginalName();
       // $productimage3 = $req->file('productimage3')->getClientOriginalName(); 
        $producerid = $req->get('producerid');

        $req->productimage1->move(public_path('images'), $productimage1);
       // $req->productimage2->move(public_path('images'), $productimage2);
       // $req->productimage3->move(public_path('images'), $productimage3);

        //return $req->input();

        $prd = new Product();
        $prd->productid = $productid;
        $prd->productname = $productname; 
        $prd->productprice = $productprice;
        $prd->productdetails = $productdetails; 
        $prd->productimage1 = $productimage1;
       // $prd->productimage2 = $productimage2; 
       // $prd->productimage3 = $productimage3; 
        $prd->producerid = $producerid;
        $prd->save();

        return redirect('list');

        /*dd($producttb->all());
       
        $id = $producttb->id;
        $name = $producttb->name; 
        $price = $producttb->price;
        $details = $producttb->details; 
        $image1 = $producttb->image1;
        $image2 = $producttb->image2; 
        $image3 = $producttb->image3; 
        $producer = $producttb->producer;

        $prd = new Product();
        $prd->name = $name; 
        $prd->price = $price;
        $prd->details = $details; 
        $prd->image1 = $image1;
        $prd->image2 = $image2; 
        $prd->image3 = $image3; 
        $prd->producer = $producer;
        $prd->save();

        return redirect()->back()->with('success','A new product has been added'); */


    }
}