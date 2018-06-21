<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function showRegisterPage() {

      $users = DB::table('users')->get(['id', 'nick']);

      return view('register', compact('users'));

    }

    public function register(Request $request) {
      //dd($request->all());
      $user = new User;
      $nick = $request->get('nick');
      $email = $request->get('email');
      $referrerNickId = $request->get('referrerNickId');
      $user->create(['nick' => $nick, 'email' => $email, 'referrerNickId' => $referrerNickId]);
      return redirect()->back()->with('message', 'Registered Successfully');

    }

    public function checkEmailAvailable(Request $request) {

      if($request->get('email')) {

        $email = $request->get('email');
        $data = DB::table("users")->where('email', $email)->count();
        if($data > 0) {
          echo 'not unique';
        } else {
          echo 'unique';
        }

      }

    }

    public function checkNickAvailable(Request $request) {

      if($request->get('nick')) {

        $nick = $request->get('nick');
        $data = DB::table("users")->where('nick', $nick)->count();
        if($data > 0) {
          echo 'not unique';
        } else {
          echo 'unique';
        }

      }

    }

}
