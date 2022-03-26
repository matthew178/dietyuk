<?php

namespace App\Http\Controllers;

use App\dbeliModel;
use App\dbeliproduk;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $req)
    {
        // $data['message'] = "contoh";
        // Mail::send('contoh', ['data'=> $data],
        //     function($message) use ($req)
        //     {
        //         $message->subject("Test");
        //         $message->from("hendrymatthew97@gmail.com","hendrymatthew97@gmail.com");
        //         $message->to("mhendry106@gmail.com");
        //     }
        // );
        echo Str::random(5);
    }

    function tes(Request $req) {
        return view("konfirmasiakun");
    }


}
