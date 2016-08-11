---
view::extends: _includes.base
view::yields: body
---

# Contribution

Simplicity is the key to great user experiences. Create fewer features, but make them great instead of just good.
Show fewer elements, use simplistic styling to reduce cognitive load. Dare to say ‘No’ to prevent the core
functionality from being lost in the noise.

> Don’t go for ‘WOW’, go for ‘of course’

Never chase the **‘wow-effect’**. Product design succeeds when it solves the problem or need of our users in the best possible way.
Design the product effective & delightful. The reaction we are after from our users is “Of course, that is obvious”.

## Here's Some sub title

I wrote down some design _principles_ for our team to help us make design decisions:

- Define the problem first
- Create more value by creating less
- Strive for consistency
- Focus the user on one primary action at a time
- Use your user’s language
- Minimize user input


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
        return (new Message())
            ->iOS()
            ->badge(1)
            ->sound('success')
            ->body("Your {$notifiable->service} account was approved!");
    }
}
```

---

Check the complete post here:

https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c