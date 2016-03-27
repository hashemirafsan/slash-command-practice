<<<<<<< HEAD
<?php  


   class timer{
       public function time(){
            include("db.php");

    $sql ="SELECT remove FROM admin";
    $data = $mysqli->query($sql);
    date_default_timezone_set("Asia/Dacca");
    while($row = $data->fetch_assoc())
    {

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
=======
<?php  


    include("db.php");

    $sql = "select remove from admin ";
    $data = mysql_query($sql);
    date_default_timezone_set("Asia/Dacca");
    while($row = mysql_fetch_array($data))
    {

        $time = $row['remove'];
        $timer = date("Y-m-d H:i:s");
        $timer = date("Y-m-d H:i:s");

        if($time <= $timer)
        {
            $sqlon = "UPDATE admin SET yellow = 0 WHERE  remove = '$time'";
            $data1 = mysql_query($sqlon);
        }
    }
>>>>>>> 44bc7b23d9af34ce8a2783f2637bffb12da4ecdf
?>