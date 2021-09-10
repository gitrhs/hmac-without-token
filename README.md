# hmac-without-token
Make Temporary Token that Valid for 2-3 Hours without Database
1. Set your secret key on "content.php" and "token.php" file.
2. go to /yourwebsite.com/token.json?user={put user name here!}
example: https://channel.mbed.cc/github/hmac/token.json?user=demo
3. After you got the hmac, now you can access the content.php
go to /yourwebsite.com/content.php?user={put user name here!}&token={put hmac that you got from token.php}
example: https://channel.mbed.cc/github/hmac/content.php?user=demo&token={put-hmac-here}
