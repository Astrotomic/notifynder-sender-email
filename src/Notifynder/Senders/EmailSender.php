<?php

namespace Astrotomic\Notifynder\Senders;

use Fenos\Notifynder\Contracts\SenderContract;
use Fenos\Notifynder\Contracts\SenderManagerContract;
use Mail;
use Illuminate\Mail\Message;

class EmailSender implements SenderContract
{
    /**
     * @var array
     */
    protected $notifications;

    /**
     * EmailSender constructor.
     *
     * @param array $notifications
     */
    public function __construct(array $notifications)
    {
        $this->notifications = $notifications;
    }

    /**
     * Send all notifications.
     *
     * @param SenderManagerContract $sender
     * @return bool
     */
    public function send(SenderManagerContract $sender)
    {
        $view = config('notifynder.senders.email.view');
        $callback = config('notifynder.senders.email.callback');
        foreach ($this->notifications as $notification) {
            Mail::send($view, compact('notification'), function (Message $message) use ($notification, $callback) {
                return call_user_func($callback, $message, $notification);
            });
        }

        return true;
    }
}
