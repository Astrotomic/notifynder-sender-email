<?php

namespace Astrotomic\Notifynder;

use Astrotomic\Notifynder\Senders\EmailSender;
use Illuminate\Support\ServiceProvider;

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
