<?php

            #################################
            //database part
            include("db.php");
            #################################
              
              
              ############Refreshing website ##################
              
               include("timer.php");
             

  
              
              
              ############################


                        function yellowcard()
                                   {                        
                                               
                    $command = $_POST['command'];
                    $text = $_POST['text'];
                    $token = $_POST['token'];
                    $text_part = explode(" ", $text, 2);
                                                   
                                                   
                     #########TRIGGER############           
                    $name = $text_part[0];
                    $reason = $text_part[1];
                    $list = "status";
                    $res_use = "status";
                    $remover = "remove card for making coffee";
                    ###############################
                    
                    
                    ############ want to know list #########################
                            if ($name == $list ){
                            $query = "SELECT name,yellow,red FROM admin ";
                            $data = mysql_query($query);
                                 echo ":neckbeard: Referee: \n\n ";   
                                    while ($row = mysql_fetch_assoc($data))
                                                        {
                                                                $yellow = $row['yellow'];
                                                                $red = $row['red'];
                                                                $name = $row['name'];

                                                               
                                                                echo " $name    :yellowcard: $yellow  & :redcard:  $red\n";
                                                                echo "---------------------------------\n";
                                                        }
                                
                                                    }
                                                    
                      ########----------------------###########################
                      
                      
                      
                      
                      ########## Want to know a person status #################                              
                                                    
                            elseif ($name == true && $reason == $res_use)
                            {
                            $query = "SELECT name,yellow,red,reason FROM admin where name = '$name'";
                            $data = mysql_query($query);
                                         echo ":neckbeard: Referee: \n\n ";
                                    while ($row = mysql_fetch_assoc($data))
                                                        {
                                                                $yellow = $row['yellow'];
                                                                $red = $row['red'];
                                                                $name = $row['name'];
                                                                $reason = $row['reason'];
                                                                
                                                                echo "$name has  $yellow :yellowcard: card & $red :redcard: card\n";
                                                                echo "he got yellow card for $reason";
                                                                
                                                        }
                                
                                                    }
                                          
                                    ########----------------------###########################
                             

                                  ########## Want to delete card a person profile #################                              
                                                    
                            elseif ($reason == $remover)
                            {
                            $query = "SELECT red FROM admin where name = '$name'";
                            $data = mysql_query($query);
                                         echo ":neckbeard: Referee: \n\n ";
                                    while ($row = mysql_fetch_assoc($data))
                                                        {
                                                                
                                                                $red = $row['red'];
                                                                
                                                                $remove_yes = $red - 1 ;
                                                                
                                                               $query9 = "UPDATE admin SET red = '$remove_yes' WHERE name = '$name'";
                                                                  $data9 = mysql_query($query9);
                                                              if($data9)
                                                              {
                                                                    echo "One Red Card is Removed from $name store for making coffee\n";
                                                               
                                                              }  
                                                              
                                                                
                                                        }
                                
                                                    }
                                          
                                    ########----------------------###########################         
                                          
                                 
                                          
                                          
                                          
                                          
                                                    
                                                    
                               else 
                               {
                                   
                                     $query = "SELECT name,yellow,red,reason FROM admin where name = '$name'";
                                         $data = mysql_query($query);
                                            
                                    while ($row = mysql_fetch_assoc($data))
                                                        {
                                                                 $yellow = $row['yellow'];
                                                                $red = $row['red'];
                                                                $name = $row['name'];
                                                               
                                                                
                                                                
                            
                                #######################################
                                
                                
                                
                                
                                
                                
                                
                                
                                ############################################

                                //If yellow card are entered in database start part
                                    if ($yellow == 0 && $red == 0)
                                    
                                    {      
                                                $query1 = "UPDATE admin SET yellow = 1 AND reason = '$reason' WHERE name = '$name'";
                                                $data1 = mysql_query($query1);

                                                
                                                $query5 = "UPDATE admin SET reason = '$reason' WHERE name = '$name'";
                                                $data5 = mysql_query($query5);


                                                date_default_timezone_set("Asia/Dacca");

                                                $mysqldate = date("Y-m-d H:i:s",time()+86400);

                                                $query2 = "UPDATE admin SET remove= '$mysqldate' WHERE name = '$name'";
                                                $data4 = mysql_query($query2);
                                                
                                                if($data4)
                                                
                                                {
                                                     echo ":neckbeard: Referee: \n\n ";
                                                   echo "$name  get :yellowcard: card for $reason";
                                                   
                                                }
                                      }


                                      elseif ($yellow == 0 && $red >=1)
                                    
                                    {      
                                                $query1 = "UPDATE admin SET yellow = 1 WHERE name = '$name'";
                                                $data1 = mysql_query($query1);
                                                
                                                $query5 = "UPDATE admin SET reason = '$reason' WHERE name = '$name'";
                                                $data5 = mysql_query($query5);
                                                
                                                date_default_timezone_set("Asia/Dacca");

                                                $mysqldate = date("Y-m-d H:i:s",time()+86400);

                                                $query2 = "UPDATE admin SET remove= '$mysqldate' WHERE name = '$name' ";
                                                $data4 = mysql_query($query2);
                                                
                                                if($data4)
                                                
                                                {
                                                    echo ":neckbeard: Referee: \n\n ";
                                                   echo "$name  get :yellowcard: card for $reason";
                                                }
                                      }
                                      
                                        //If yellow card are entered in database end part
                                        
                                        
                                        
                                      //If red card are entered in database start part
                                    elseif ($yellow == 1 && $red == 0 )
                                    
                                    {      
                                                 $got = $red + 1;
                                                
                                                $query1 = "UPDATE admin SET yellow= 0 WHERE name = '$name'";
                                                $data1 = mysql_query($query1);

                                                $query5 = "UPDATE admin SET reason = '$reason' WHERE name = '$name'";
                                                $data5 = mysql_query($query5);

                                                $query3 = "UPDATE admin SET red = 1 WHERE name = '$name'";
                                                $data2 = mysql_query($query3);


                                                if($data2)

                                                {
                                                $query2 = "UPDATE admin SET remove= 0 WHERE name = '$name'";
                                                $data4 = mysql_query($query2);

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
                                        $query1 = "UPDATE admin SET yellow = '$get' WHERE name = '$name'";
                                        
                                        $data1 = mysql_query($query1);


                                        $got = $red + 1;

                                        $query3 = "UPDATE admin SET red = '$got' WHERE name = '$name'";
                                        $data2 = mysql_query($query3);
                                        
                                        
                                        $query5 = "UPDATE admin SET reason = '$reason' WHERE name = '$name'";
                                        $data5 = mysql_query($query5);

                                        if($data2)

                                        {
                                        $query2 = "UPDATE admin SET remove= 0 WHERE name = '$name'";
                                        $data4 = mysql_query($query2);

                                                if($data4)
                                                {
                                                     echo ":neckbeard: Referee: \n\n ";
                                                     echo "Now $name got :redcard: card and his total red card is  $got";          

                                                }
                                        }
                                 }     


                                      //If red card are entered in database end part

                                                else {
                                                    
                                                    
                                                echo "$name no  he  don't got card";
                                                }
                      }
                                            
                                   
                                            
                                            
                               }
                  
                 
                                       
                                                }

                                               
                                                yellowcard();
                                                

       
       
?>