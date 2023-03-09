<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\StatusUpdate;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    function list() {
        return view('admin.users.list', ['user' => User::all()]);
    }
    public function approvalChange($id, $status)
    {
        $response = User::findOrFail($id)->update(['is_approved' => $status]);
        $user = User::find($id);
        $data = [];
        $data['greeting'] = "Hey " . $user->first_name . ",";
        if ($status == '1') {
            $text = 'Approved';
            $data['text'] = "Your account at sidelinesports has been approved. Use this link to login your account.";
            $data['link'] = "";
            $data['thanks'] = "Thanks";
        } else {
            $text = 'Denyed';
            $data['text'] = "Your account at sidelinesports has been rejected please contact support.";
            $data['link'] = url("/contact");
            $data['thanks'] = "Thanks";
        }
        if ($response) {
            $type = 1;
            $msg = "User is $text successfully";
        } else {
            $type = 0;
            $msg = 'Something went wrong';
        }
        // $notification = new StatusUpdate($data);
        // $mailMessage = $notification->toMail($user);
        $data['status'] = $status;
        Notification::send($user, new StatusUpdate($data));
        $result = ['type' => $type, 'msg' => $msg];
        echo json_encode($result);
        exit();

    }

    public function deleteUser($id)
    {
        $response = User::destroy($id);
        if ($response) {
            $type = 1;
            $msg = 'Data is deleted successfully';
        } else {
            $type = 0;
            $msg = 'Something went wrong';
        }
        $result = ['type' => $type, 'msg' => $msg];
        echo json_encode($result);
        exit();
    }
}
