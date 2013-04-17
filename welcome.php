<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- welcome.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Welcome Message with Output from the PHP date() Function</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <h2>Welcome!</h2>
    <?php
    echo "<h3>It's ".date("l, F jS").".<br />";
    echo "The time is ".date("g:ia").".</h3>";
    ?>
  </body>
</html>
