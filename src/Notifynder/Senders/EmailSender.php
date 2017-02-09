<?php

namespace Astrotomic\Notifynder\Senders;

use Illuminate\Mail\Message;
use Fenos\Notifynder\Traits\SenderCallback;
use Fenos\Notifynder\Contracts\SenderContract;
use Fenos\Notifynder\Contracts\SenderManagerContract;

class EmailSender implements SenderContract
{
    use SenderCallback;

    /**
     * @var array
     */
    protected $notifications;

    /**
     * @var array
     */
    protected $config;

    /**
     * EmailSender constructor.
     *
     * @param array $notifications
     */
    public function __construct(array $notifications)
    {
        $this->notifications = $notifications;
        $this->config = notifynder_config('senders.email');
    }

    /**
     * Send all notifications.
     *
     * @param SenderManagerContract $sender
     * @return bool
     */
    public function send(SenderManagerContract $sender)
    {
        $view = $this->config['view'];
        $store = $this->config['store'];
        $callback = $this->getCallback();
        foreach ($this->notifications as $notification) {
            app('mailer')->send($view, compact('notification'), function (Message $message) use ($notification, $callback) {
                return call_user_func($callback, $message, $notification);
            });
        }

        if ($store) {
            return $sender->send($this->notifications);
        }

        return true;
    }
}
