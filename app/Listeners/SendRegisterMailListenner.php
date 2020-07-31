<?php

namespace App\Listeners;

use App\Notifications\RegisterMailNotify;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegisterMailListenner {
    /**
    * Create the event listener.
    *
    * @return void
    */

    public function __construct() {
        //
    }

    /**
    * Handle the event.
    *
    * @param  Registered  $event
    * @return void
    */

    public function handle( Registered $event ) {
        //注册的时候 会回传用户信息，这里执行生成邮箱验证的token,并且通过消息通知发送邮件
        $user = $event->user;
        $user->mail_token = str_random( 10 );
        $user->save();

        $user->notify(new RegisterMailNotify($user));
    }
}
