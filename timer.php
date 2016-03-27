<?php  

class timer{
   public function time(){
   include("db.php");
   
   $sql =sprintf("SELECT remove FROM admin");
   $data = $mysqli->query($sql);
   date_default_timezone_set("Asia/Dacca");
   while($row = $data->fetch_assoc()){
      $time = $row['remove'];
      $timer = date("Y-m-d H:i:s");
      $timer = date("Y-m-d H:i:s");
         if($time <= $timer)
         {
            $sqlon = sprintf("UPDATE admin SET yellow = 0 WHERE  remove = '%s'",$mysqli->real_escape_string($time));
            $data1 = $mysqli->query($sqlon);
         }
      }
   } 
} 
$great = new timer;
$great -> time();
?>
