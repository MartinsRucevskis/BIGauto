<?php

namespace App\Http\Controllers;
use App\Mail\AcceptOrder;
use App\Mail\DeclineOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    function acceptMail(Request $req){
        $email =$req->email;
        $id = $req->id;
        Order::where('id', $id)->update(['Status'=> '1']);
        Mail::to($email)->send(new AcceptOrder());
        return redirect('dashboard');
    }

    function declineMail(Request $req){
        $email = $req->email;
        $id = $req->id;
        Order::where('id', $id)->update(['Status'=> '2']);
        Mail::to($email)->send(new DeclineOrder());
        return redirect('dashboard');
    }
}
?>