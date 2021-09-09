# hmac-without-token
Make Temporary Token without Database
1. Set your secret key on "content.php" and "token.php" file.
2. Add ?user=(username) after token.php
example: https://channel.mbed.cc/github/hmac/token.php?user=demo
3. After you got the hmac, now you can access the content.php
add ?user=(username)&token=(hmac-that-you-got-from-token.php)
example: https://channel.mbed.cc/github/hmac/content.php?user=demo&token={put-hmac-here}
