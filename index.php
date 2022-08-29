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
    echo '¡variable CUSTOM_VAR: ' . $_ENV["CUSTOM_VAR"] . '!';
    ?>
    
    <?php phpinfo(); ?>
  </body>

</html>
