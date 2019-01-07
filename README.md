# Summary

Clean all Instagram timeline, media, likes, followers, followings etc.

# Dependency

[mgp25 Instagram Private API](https://github.com/mgp25/Instagram-API)

# Install

```bash
composer install
```

# Prepare

If you are using ShadowSocks to access Instagram, please undo comment for line ```$ig->setProxy('socks5://127.0.0.1:1086');```

# Execute task

```bash
cd src
php delete_media.php
php delete_like.php
php remove_followers.php
php remove_followings.php
```

# Reference

[https://iya.ng/2018/12/31/clear-instagram-relationship/](https://iya.ng/2018/12/31/clear-instagram-relationship/)
