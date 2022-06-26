<?php

namespace App\Http\Controllers;
use App\Mail\AcceptOrder;
use App\Mail\DeclineOrder;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    function acceptMail(Request $req){
        $email =$req->email;
        Mail::to($email)->send(new AcceptOrder());
        return redirect('dashboard');
    }

    function declineMail(Request $req){
        $email = $req->email;
        Mail::to($email)->send(new DeclineOrder());
        return redirect('dashboard');
    }
}
?>