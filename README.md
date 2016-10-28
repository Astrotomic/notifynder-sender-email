# Notifynder 4 - Laravel 5

[![GitHub release](https://img.shields.io/github/release/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-email/releases)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/astrotomic/notifynder-sender-email/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-email/issues)
[![Total Downloads](https://img.shields.io/packagist/dt/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://packagist.org/packages/astrotomic/notifynder-sender-email)

[![StyleCI](https://styleci.io/repos/72202425/shield)](https://styleci.io/repos/72202425)

[![Code Climate](https://img.shields.io/codeclimate/github/fenos/Notifynder.svg?style=flat-square)](https://codeclimate.com/github/fenos/Notifynder)

[![Slack Team](https://img.shields.io/badge/slack-notifynder-orange.svg?style=flat-square)](https://astrotomic.slack.com)
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