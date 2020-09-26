<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use App\Notifications\TestNotification;
class TestController extends Controller
{
    use Notifiable;

    public function sendMail(Request $request)
    {
       $user = Auth::user();
    //    dd($user);
        // Mail::to($user->email)->send(new TestMail($user));
        $when = Carbon::now()->addMinutes(2);
        Mail::to($user->email)
            ->later($when, new TestMail($user));
        dd("Mail Sent");
    }
    public function sendNotification(){
        $user = Auth::user();
        $user->notify(new TestNotification(Auth::user()));
        dd("Notification Sent");
    }
}
