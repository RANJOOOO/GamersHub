<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\payments;
use App\Models\account_buyers;
use App\Models\seller_accounts;



class productController extends Controller
{
    public function view_product(){
        return view('products/create');
    }
    public function create_product(Request $req){
        $data= new products;
        $data->gameName=$req->gameName;
        $data->title=$req->title;
        $data->Genre=$req->Genre;
        $data->SupportedDevices=$req->SupportedDevices;
        $data->price=$req->price;
        $data->description=$req->description;
        //for Images
        $file= $req->file('image1');
        $fileName = time().$req->file('image1')->getClientOriginalName();
        $path = $req->file('image1')->storeAs('image1', $fileName, 'public');
        $file-> move('storage/app/public/image1/', $fileName);
        $file1=$req->file('image2');
        $fileName1 = time().$req->file('image2')->getClientOriginalName();
        $path1 = $req->file('image2')->storeAs('image2', $fileName1, 'public');
        $file1-> move('storage/app/public/image2/', $fileName1);
        $file2=$req->file('image3');
        $fileName2 = time().$req->file('image3')->getClientOriginalName();
        $path2 = $req->file('image3')->storeAs('image3', $fileName2, 'public');
        $file2-> move('storage/app/public/image3/', $fileName2);
        $data['image1']= '/storage/app/public/'.$path;
        $data['image2']= '/storage/app/public/'.$path1;
        $data['image3']= '/storage/app/public/'.$path2;
        $data->save();
        return redirect('items');
    }
    public function see_product(){
        $data = products::all();
        return view('index')->with(['data'=>$data]);
    }
    public function detail_product($Id){
        $items=products::find($Id);
        return view('products/productDetail')->with(['items'=>$items]);
    }
    public function relation(){
        $data=payments::find(1)->orderBy('buyer','asc')->value('id');
        $info=account_buyers::find($data);
        return view('welcome')->with(['info'=>$info]);   
    }
    public function editproduct($id)
    {
        $item=products::find($id);
        return view('products/editProduct')->with(['item'=>$item]);
      
    }
    public function Post_edit_product(Request $request)
    {
       $id=$request->id;
       $gameName=$request->gameName;
       $title=$request->title;
       $Genre=$request->Genre;
       $SupportedDevices=$request->SupportedDevices;
       $price=$request->price;
       $description=$request->description;
       products::where('id','=', $id)->update([
        'gameName'=>$gameName,
        'title'=>$title,
        'Genre'=>$Genre,
        'SupportedDevices'=>$SupportedDevices,
        'price'=>$price,
        'description'=>$description
       ]);
       return redirect('items_display') ;
    }
    public function deleteproduct($id){
        products::where('id','=', $id)->delete();
       return redirect('items_display') ;

        
    }
}
