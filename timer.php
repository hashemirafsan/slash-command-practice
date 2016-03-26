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
?>