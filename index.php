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
    <?php echo 'The username is: ' .$_ENV["DATE"] . '!'; ?>
    <?php phpinfo(); ?>
  </body>

</html>
