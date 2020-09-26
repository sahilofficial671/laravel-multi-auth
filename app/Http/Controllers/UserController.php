<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\User;
class UserController extends Controller
{
    public function showUserEditForm()
    {
        return view('user.edit')->with('user', Auth::user());
    }
    public function submitUserEdit(Request $request)
    {
        $user = User::find(Auth::id());
        $fileName = "";
        if($request->hasFile('image')){
             $fileName = "user_image-".Auth::id()."-".Carbon::now()->toDateString()."-".Str::random(5);
             $request->image->storeAs('images', $fileName,'public');
        }
        User::find(Auth::id())->update([
            'name' => $request->name,
        ]);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->image = $fileName;
        // $user->update();

        return redirect()->back()->with('success','User Updated.');

    }
}
