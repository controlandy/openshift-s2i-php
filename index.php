<html>

  <head>
    <title>Hello World!</title>
    <style>
      h1 {
        text-align: center;
      }
      
      h2 {
        text-align: left;
      }
      
      h3 {
        text-align: right;
      }
</style>
  </head>

  <body>
    <?php echo "<h1> Hello World! </h1>"; ?>

    <?php

$_SERVER['REMOTE_ADDR'];        //find the current user's IP address

putenv("tmp=usr");              //set an value of environment variable

echo $_SERVER['tmp'];

?>
    
    <?php phpinfo(); ?>
  </body>

</html>
