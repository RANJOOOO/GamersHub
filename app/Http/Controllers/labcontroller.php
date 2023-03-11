<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;

class labcontroller extends Controller
{
    
    public function see(){
        return view('file/filepdf');
    }
    public function create(Request $request)
    {
        // $data= new images();
        //     $file= $request->file('photo');
        //     $fileName = time().$request->file('photo')->getClientOriginalName();
            // $path = $request->file('photo')->storeAs('image1', $fileName, 'public');
        //     $file-> move('storage/app/public/image1/', $fileName);
        //     $file1=$request->file('photo1');
        //     $fileName1 = time().$request->file('photo1')->getClientOriginalName();
        //     $path1 = $request->file('photo1')->storeAs('image1', $fileName1, 'public');
            // $file1-> move('storage/app/public/image2/', $fileName1);
            // $data['image1']= '/storage/app/public/'.$path;
        //     $data['image2']= '/storage/app/public/'.$path1;
        // $data->save();
        // return redirect('view_result');
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,jpg,jepg,png,bmp',
            ]);
            $data= new images();
            $fileName = time().'.'.$request->file->extension();
            //$request->file->move(public_path('uploads'), $fileName);
            // $request->file->storeAs('uploads', $fileName);
            $path = $request->file('file')->storeAs('image1', $fileName, 'public');
            $data['image1']= '/storage/app/public/'.$path;
            $data->save();
            // return redirect ('check_file');
        }
        public function viewPdf(){
            $imageData= images::all();
            return view('file/viewPdf')->with(['imageData'=>$imageData]);
        }
        public function download($file){
            $img = images::find($file);
            return labController::download($img->image1);
        }
        
}
