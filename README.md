# timeago in PHP
Using [http://php.net/manual/en/function.time.php](http://php.net/manual/en/function.time.php) to determinate time ago

#About
This class works like [DateTime::diff](http://php.net/manual/en/datetime.diff.php).
This will work with PHP versions 5.3.0 or lower.

#Methods to use
You online need to require the timeago.class.php file and call the Class

```
require ("timeago.class.php");
$timeago = new get_timeago;
```

Then, you can use the following examples:

```
// about %s %time ago
echo $timeago->timeago("2016-01-19");
echo $timeago->timeago("2016-01-19 15:31:16");
echo $timeago->timeago("2016/01/19");
echo $timeago->timeago("2016/01/19 15:31:16");
```

#Spanish Version Added
```
// Hace %s %time
echo $timeago->timeago("2016-01-19", "es");
echo $timeago->timeago("2016-01-19 15:31:16", "es");
echo $timeago->timeago("2016/01/19", "es");
echo $timeago->timeago("2016/01/19 15:31:16", "es");
```

#Changes (versions)
1.2 Can add more languages to the function get_lan

1.1 Spanish Version Added to the class get_timeago on timeago.class.php

1.0 Create timeago.class.php
