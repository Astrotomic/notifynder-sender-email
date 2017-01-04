<?php

namespace Astrotomic\Notifynder;

use Illuminate\Support\ServiceProvider;
use Astrotomic\Notifynder\Senders\EmailSender;

class NotifynderSenderEmailServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        app('notifynder')->extend('sendEmail', function (array $notifications) {
            return new EmailSender($notifications);
        });
    }
}
