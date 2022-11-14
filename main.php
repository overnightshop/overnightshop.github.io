<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <title>Overnight Shop</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
  </head>
  <body dir="ltr">
    <main>
      <h1>Overnight Shop</h1>
      <?php 
      $log = false;
      
      if ($log == true) {
        echo "Welcome Back";
      } else if ($log == false) {
        echo "Browsing As Guest";
      } else {
        // do nothing
      }
      ?>
    </main>
  </body>
</html>
