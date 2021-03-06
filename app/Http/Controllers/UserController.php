<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;
use App\Http\Controllers\Controller;
use App\Events\Event;

class UserController extends Controller
{
    /**
     * Send a reminder e-mail to a given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendReminderEmail(Request $request)
    {
        // echo $id; exit;
        //$user = User::findOrFail($id);

        $sendEmailJob = new SendReminderEmail();

        // or if you want a specific queue

        //$sendEmailJob = (new SendReminderEmail())->onQueue('');

        // or if you want to delay it

        //$sendEmailJob = (new SendReminderEmail())->delay(30); // seconds

        $this->dispatch($sendEmailJob);
        return view('job');
    }

    public function sendEvent(Request $request){
        broadcast(new Event('Hi I am comming!!!'))->toOthers();
        return view('event');
    }
}