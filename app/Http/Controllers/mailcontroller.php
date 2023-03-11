<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;
use App\Mail\testmail;


class mailcontroller extends Controller
{
    public function view_mail(){
        return view('mail/hello');
    }

    public function create_mail(Request $req) {
        $emails = [
            'email'=>$req->get('email'),
            'cc'=>$req->get('cc'),
            'bcc'=>$req->get('bcc')
        ];
        $details =[
            'subject'=>$req->get('subject'),
            'body'=>$req->get('body')

        ];
        if($emails["cc"] =='' && $emails["bcc"]==''){
            Mail::to($emails['email'])->send(new testmail($details));
            // return redirect('/sendmail');
        }   
    }
}
