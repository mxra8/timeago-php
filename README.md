# timeago in PHP
Using [http://php.net/manual/en/function.time.php](http://php.net/manual/en/function.time.php) to determinate time ago

You online need to require the timeago.class.php file and call the Class

```
require ("timeago.class.php");
$timeago = new get_timeago;
```

Then, you can use the following examples:

```
echo $timeago->timeago("2016-01-19");
echo $timeago->timeago("2016-01-19 15:31:16");
echo $timeago->timeago("2016/01/19");
echo $timeago->timeago("2016/01/19 15:31:16");
```
