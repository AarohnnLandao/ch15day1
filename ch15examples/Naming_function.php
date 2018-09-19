<?php
         // use this in php tags to include on pages:     include 'Naming_function.php';     
         // and seperator() to call the function in the document

 function seperator($val = null){
                if (!$val){
                $val = 1;
                $val = mt_rand(1,4);
                }
               echo "<br><b>";
                switch($val){
               case 1:
                        echo "*****************Automated headers function!***************";
                    break;
                 
                case 2:
                        echo "*******************ESPLOSIONS!!!!****************";
                    break;
                 
                case 3:
                        echo "***************¯\_(ツ)_/¯*************************";
                    break;
                
                case 4:
                        echo "****************Funky Function! refresh for more!!********************";
                    break;
                
                default:
                    echo "<br><b>************** $val *******************</b><br>";
                    break;                
                }
               echo "<br></b>";
                    
            }