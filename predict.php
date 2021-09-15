<?php include('server.php') ?>

<?php 
//   if (!isset($_SESSION['username'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: index.php#join_us');
//   }

   if( $_GET["water_level"] || $_GET["ph"] ) {
      $water_level = $_GET["water_level"];
      $ph = $_GET["ph"];
      $action = 0;

      if ($water_level >= 6 && $ph >= 6 ) {
         $action = 0;
      }
      elseif($water_level < 6 && $ph >= 6){
         $action = 1;
      }
      elseif($water_level >= 6 && $ph < 6){
         $action = 2;
      }
      else{
         $action = 3;
      }
      // echo ("action was : ".$action);
      // header('Content-Type: application/json; charset=utf-8');
      // http_response_code(202);
      echo json_encode($action);
      // return json_encode($action);
   }
?>
