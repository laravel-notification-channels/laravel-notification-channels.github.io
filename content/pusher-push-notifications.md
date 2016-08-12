---
view::extends: _includes.base
view::yields: body
---

This package makes it easy to send [Pusher push notifications](https://pusher.com/docs/push_notifications) with Laravel 5.3.

## Installation

You can install the package via composer:

``` bash
composer require laravel-notification-channels/pusher-push-notifications
```

You must install the service provider:

```php
// config/app.php
'providers' => [
    ...
    NotificationChannels\PusherPushNotifications\Provider::class,
];
```

### Setting up your Pusher account

Before using this package you should set up a Pusher account. Here are the steps required.

- Login to https://dashboard.pusher.com/
- Select your app from the sidebar or create a new app.
- Click on the "Push Notifications" tab.
- Upload your APNS Certificate or add your GCM API key.
- Now select the "App Keys" tab.
- Copy your `app_id`, `key`, and `secret`.
- Update the values in your `config/broadcasting.php` file under the pusher connection.
- You're now good to go.

## Usage

Now you can use the channel in your `via()` method inside the Notification class.

``` php
use NotificationChannels\PusherPushNotifications\Channel;
use NotificationChannels\PusherPushNotifications\Message;
use Illuminate\Notifications\Notification;

class AccountApproved extends Notification
{
    public function via($notifiable)
    {
        return [Channel::class];
    }

    public function toPushNotification($notifiable)
    {
        return Message::create()
            ->iOS()
            ->badge(1)
            ->sound('success')
            ->body("Your {$notifiable->service} account was approved!");
    }
}
```

### Available Message methods

- `platform('')`: Accepts a string value of `iOS` or `Android`.
- `iOS()`: Sets the platform value to iOS.
- `android()`: Sets the platform value to Android.
- `title('')`: Accepts a string value for the title.
- `body('')`: Accepts a string value for the body.
- `sound('')`: Accepts a string value for the notification sound file. Notice that if you leave blank the default sound value will be `default`.
- `icon('')`: Accepts a string value for the icon file. (Android Only)
- `badge(1)`: Accepts an integer value for the badge. (iOS Only)
- `setOption($key, $value)`: Allows you to set any value in the message payload. For more information [check here for iOS](https://pusher.com/docs/push_notifications/ios/server), [or here for Android](https://pusher.com/docs/push_notifications/android/server).

### Routing a message

By default the pusher "interest" messages will be sent to will be defined using the `{notifiable}.{id}` convention, for example `App.User.1`, however you can change this behaviour by including a `routeNotificationForPusherPushNotifications()` in the notifiable class method that returns the interest name.
