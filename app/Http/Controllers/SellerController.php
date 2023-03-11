<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller_accounts;
// use App\Models\images;

class SellerController extends Controller
{
    public function view_seller()
    {
        return view('Seller/view');
    }
    public function create(Request $req){
        $data = new seller_accounts;
        $data->seller_name=$req->sellerName;
        $data->seller_address=$req->sellerAddress;
        $data->Email=$req->sellerEmail;
        $data->Password=$req->sellerPassword;
        $data->Contact=$req->contact;
        $data->CNIC=$req->cnic;
        $data->save();
        return redirect ('adding_seller');
    }
    public function see()
    {
        return view('Seller/create');

    }
}
