<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checks;
use App\Models\images;
use App\Models\account_buyers;

// use resources\views\Buyer\view;

class Buyers extends Controller
{
    public function view(){
        $data = account_buyers::all();
        // return view('view/Buyer')->with(['Checks'=>$data]);
        return view('Buyer/view')->with(['data'=>$data]);
    }
    public function see(){
        return view('Buyer/create');
    }
    public function create(Request $req){
        $account_buyers= new account_buyers;
        $account_buyers->buyer_name=$req->buyer_name;
        $account_buyers->buyer_address=$req->buyer_address;
        $account_buyers->Email=$req->Email;
        $account_buyers->Password=$req->Password;
        $account_buyers->Contact=$req->Contact;
        $account_buyers->CNIC=$req->CNIC;
        $account_buyers->save();
        return redirect ('store');
    }
    public function see_img(){
        return view('Buyer/upload');
    }
    public function upload_img(Request $request)
    {
     
        $data= new images();
            $file= $request->file('photo');
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('image1', $fileName, 'public');
            $file-> move('storage/app/public/image1/', $fileName);
            $file1=$request->file('photo1');
            $fileName1 = time().$request->file('photo1')->getClientOriginalName();
            $path1 = $request->file('photo1')->storeAs('image1', $fileName1, 'public');
            $file1-> move('storage/app/public/image2/', $fileName1);
            $data['image1']= '/storage/app/public/'.$path;
            $data['image2']= '/storage/app/public/'.$path1;
        $data->save();
        return redirect('view_result');
    }
    public function result(){
        $imageData= images::all();
        return view('Buyer/view_img')->with(['imageData'=>$imageData]);
    }
}
