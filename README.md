# Notifynder 4 Email Sender - Laravel 5

[![GitHub release](https://img.shields.io/github/release/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-email/releases)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/astrotomic/notifynder-sender-email/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-email/issues)
[![Total Downloads](https://img.shields.io/packagist/dt/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://packagist.org/packages/astrotomic/notifynder-sender-email)

[![StyleCI](https://styleci.io/repos/72202425/shield)](https://styleci.io/repos/72202425)

[![Code Climate](https://img.shields.io/codeclimate/github/Astrotomic/notifynder-sender-email.svg?style=flat-square)](https://codeclimate.com/github/Astrotomic/notifynder-sender-email)

[![Slack Team](https://img.shields.io/badge/slack-astrotomic-orange.svg?style=flat-square)](https://astrotomic.slack.com)
[![Slack join](https://img.shields.io/badge/slack-join-green.svg?style=social)](https://notifynder.signup.team)


Documentation: **[Notifynder Docu](http://notifynder.info)**

-----

## Installation

### Step 1

```
composer require astrotomic/notifynder-sender-email
```

### Step 2

Add the following string to `config/app.php`

**Providers array:**

```
Astrotomic\Notifynder\NotifynderSenderEmailServiceProvider::class,
```

### Step 3

Add the following array to `config/notifynder.php`

```
'senders' => [
    'email' => [
        'view' => 'your.email.view.name',
        'callback' => function(\Illuminate\Mail\Message $message, \Fenos\Notifynder\Models\Notification $notification) {
            // handle the message and append the from, to, subject and so on
        },
        'store' => false, // wether you want to also store the notifications in database
    ],
],
```