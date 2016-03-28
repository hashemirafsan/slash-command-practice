<?php

class cardlist{
    public $error1 = "Token is not accurate please try again";
    public $error2 = "this is not right gateway please go to right way";
    public $error3 = "Please Give Correct Command";
    
    public function yellowcard(){
    
        /*
        Database Part enter
        */
        include("db.php");
        
        /*
        Timer part here
        */
        include("timer.php");
        
       
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $command = $mysqli->real_escape_string($_POST['command']);
        $text = $mysqli->real_escape_string($_POST['text']);
        $token = $mysqli->real_escape_string($_POST['token']);
        $text_part = explode(" ", $text, 2);    //divide the command in 2 part

        if($token == "qlWayshu0PPRqaKFGoU1Jkqh"){
            /*
            command line 
            */          
            $name = $mysqli->real_escape_string($text_part[0]);
            $reason =$mysqli->real_escape_string($text_part[1]);
            $list = "status";
            $list = $mysqli->real_escape_string($list);
            $res_use = "status";
            $res_use = $mysqli->real_escape_string($res_use);
            $remover = "remove card make coffee";
            $remover = $mysqli->real_escape_string($remover);
           


           /* 
           if you want Every Person Card list this portion will work
           */
            if ($name == $list ){
                $query = sprintf("SELECT name,yellow,red FROM admin");
                $data = $mysqli->query($query);
                echo ":neckbeard: Referee: \n\n ";   
                while ($row = $data->fetch_assoc())
                {
                    $yellow = $row['yellow'];
                    $red = $row['red'];
                    $name = $row['name'];
                    echo " $name    :yellowcard: $yellow  & :redcard:  $red\n";
                    echo "---------------------------------\n";
                }
            }
           


            /*
            if you Want to know one person card status this portion will work
            */                           
            elseif ($name == true && $reason == $res_use)
            {
                $query = sprintf("SELECT name,yellow,red,reason FROM admin WHERE name = '%s'",$mysqli->real_escape_string($name));
                $data = $mysqli->query($query);
                echo ":neckbeard: Referee: \n\n ";
                while ($row = $data->fetch_assoc())
                {
                    $yellow = $row['yellow'];
                    $red = $row['red'];
                    $name = $row['name'];
                    $reason = $row['reason'];
                    echo "$name has  $yellow :yellowcard: card & $red :redcard: card\n";
                    echo "he got yellow card for $reason";
                }
            }


            /*
            if you Want to delete card of a person then this portion will work 
            */                             
            elseif ($reason == $remover)
            {
                $query = sprintf("SELECT red FROM admin where name = '%s'",$mysqli->real_escape_string($name));
                $data = $mysqli->query($query);
                echo ":neckbeard: Referee: \n\n ";
                while ($row = $data->fetch_assoc())
                {
                    $red = $row['red'];
                    $remove_yes = $red - 1 ;
                    $query9 = sprintf("UPDATE admin SET red = '%s' WHERE name = '%s'",$mysqli->real_escape_string($remove_yes),$mysqli->real_escape_string($name));
                    $data9 = $mysqli->query($query9);
                    if($data9)
                    {
                        echo "One Red Card is Removed from $name store for making coffee\n";
                    }  
                }
            }
            
            
                
            /*
            this portion is work for giving yellow card or red card
            */
            elseif($name == true && $reason == true){

                $query = sprintf("SELECT name,yellow,red,reason FROM admin WHERE name = '%s'",$mysqli->real_escape_string($name));
                $data = $mysqli->query($query);

                while ($row = $data->fetch_assoc())
                {
                    $yellow = $row['yellow'];
                    $red = $row['red'];
                    $name = $row['name'];
                    
                    
                    //One person get yellow card then this portion will work
                    
                    if ($yellow == 0 && $red == 0)
                    {      
                        $query1 = sprintf("UPDATE admin SET yellow = 1 WHERE name = '%s'",$mysqli->real_escape_string($name));
                        $data1 = $mysqli->query($query1);
                        $query5 = sprintf("UPDATE admin SET reason = '$reason' WHERE name = '%s'",$mysqli->real_escape_string($name));
                        $data5 = $mysqli->query($query5);
                        date_default_timezone_set("Asia/Dacca");
                        $mysqldate = date("Y-m-d H:i:s",time()+ 86400);
                        $query2 = sprintf("UPDATE admin SET remove= '%s' WHERE name = '%s'",$mysqli->real_escape_string($mysqldate),$mysqli->real_escape_string($name));
                        $data4 = $mysqli->query($query2);
                        if($data4)
                        {
                            echo ":neckbeard: Referee: \n\n ";
                            echo "$name  get :yellowcard: card for $reason";
                        }
                    }


                    elseif ($yellow == 0 && $red >=1)
                    {      
                        $query1 =sprintf("UPDATE admin SET yellow = 1 WHERE name = '%s'",$mysqli->real_escape_string($name));
                        $data1 = $mysqli->query($query1);

                        $query5 = sprintf("UPDATE admin SET reason = '%s' WHERE name = '%s'",$mysqli->real_escape_string($reason),$mysqli->real_escape_string($name));
                        $data5 = $mysqli->query($query5);

                        date_default_timezone_set("Asia/Dacca");

                        $mysqldate = date("Y-m-d H:i:s",time()+86400);

                        $query2 = sprintf("UPDATE admin SET remove= '%s' WHERE name = '%s' ",$mysqli->real_escape_string($mysqldate),$mysqli->real_escape_string($name));
                        $data4 = $mysqli->query($query2);

                        if($data4)
                        {
                            echo ":neckbeard: Referee: \n\n ";
                            echo "$name  get :yellowcard: card for $reason";
                        }
                    }


                    //If get red card one person this portion will work
                    elseif ($yellow == 1 && $red == 0 )
                    {      
                        $got = $red + 1;

                        $query1 = sprintf("UPDATE admin SET yellow= 0 WHERE name = '%s'",$mysqli->real_escape_string($name));
                        $data1 = $mysqli->query($query1);

                        $query5 = sprintf("UPDATE admin SET reason = '%s' WHERE name = '%s'",$mysqli->real_escape_string($reason),$mysqli->real_escape_string($name));
                        $data5 = $mysqli->query($query5);

                        $query3 = sprintf("UPDATE admin SET red = 1 WHERE name = '%s'",$mysqli->real_escape_string($name));
                        $data2 = $mysqli->query($query3);


                        if($data2)

                        {
                            $query2 = sprintf("UPDATE admin SET remove= 0 WHERE name = '%s'",$mysqli->real_escape_string($name));
                            $data4 = $mysqli->query($query2);

                            if($data4)
                            {
                                echo ":neckbeard: Referee: \n\n ";
                                echo "Now $name got :redcard: card and his total red card is  $got";
                            }
                        }
                    }     


                    elseif ($yellow == 1 && $red >= 1 )
                    {      
                        $get = 0;           
                        $query1 = sprintf("UPDATE admin SET yellow = '%s' WHERE name = '%s'",$mysqli->real_escape_string($get),$mysqli->real_escape_string($name));

                        $data1 = $mysqli->query($query1);


                        $got = $red + 1;

                        $query3 = sprintf("UPDATE admin SET red = '%s' WHERE name = '%s'",$mysqli->real_escape_string($got),$mysqli->real_escape_string($name));
                        $data2 = $mysqli->query($query3);


                        $query5 = sprintf("UPDATE admin SET reason = '%s' WHERE name = '%s'",$mysqli->real_escape_string($reason),$mysqli->real_escape_string($name));
                        $data5 = $mysqli->query($query5);

                        if($data2)

                        {
                            $query2 = sprintf("UPDATE admin SET remove= 0 WHERE name = '%s'",$mysqli->real_escape_string($name));
                            $data4 = $mysqli->query($query2);

                            if($data4)
                            {
                                echo ":neckbeard: Referee: \n\n ";
                                echo "Now $name got :redcard: card and his total red card is  $got";          
                            }
                        }
                    }     

                    else {
                         echo ":neckbeard: Referee: \n\n ";
                    echo "$name No he  don't got card";
                    }
                }
            }
            else{
                 echo ":neckbeard: Referee: \n\n ";
                echo $this -> error3;
            }
        }
        else {
            echo $this->error1;
        }
    }
    else {
        echo $this ->error2;
    } 
  }    
}
        
$cardlist = new cardlist;
$cardlist -> yellowcard(); 
   
?>
