<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    //
    public function call(Request $request){
      $user = \App\User::findOrFail(1);
      $user->notify(new \App\Notifications\CallUser($request->message));
      return back();
    }
}
