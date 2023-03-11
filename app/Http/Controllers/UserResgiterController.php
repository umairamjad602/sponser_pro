<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Return_;

class UserResgiterController extends Controller
{

    public $data;

    public function __construct()
    {

    }

    public function RegisterUser(Request $request) {
        $request = $request->all();
        $this->data = $request;
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_athlete' => $request['is_athlete'],
        ]);
        if($user) {
            Mail::send('emails.admin-notification-new-user', $this->data, function ($message) {
                $message->to(env('ADMIN_EMAIL'))
                ->subject($this->data['first_name'].' '.$this->data['last_name'].' new User');
            });
            Mail::send('emails.admin-notification-new-user', $this->data, function ($message) {
                $message->to($this->data['email'])
                ->subject('You have Register Successfully.');
            });
            return redirect(url('/#resgiter?resgiter=true'));
        }
    }
}
