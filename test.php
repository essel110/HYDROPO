<?php include('server.php') ?>
<html>
   <body>
      
      <form action = "predict.php" method = "POST">
         Water Level: <input type = "text" name = "water_level" />
         PH: <input type = "text" name = "ph" />
         <input type = "submit" />
      </form>
      
   </body>
</html>