# Old Laravel Notification Channels 

This repo contains the old Katana site that was hosted on github pages.

We've moved to netlify & vuepress, and the [new repository is here](https://github.com/laravel-notification-channels/website).

## Building
The site uses [Katana](http://themsaid.github.io/katana/).

```
php katana build
```

## Deploying
Github pages deploys from the master branch.

```bash
git subtree split --prefix public -b master
git push upstream master:master
```

## Contribution

Contributions are welcome. Feel free to create an Issue or PR.
