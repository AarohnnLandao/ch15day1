<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Naming_function.php';
        
        $pattern = '/Harris/';

            $author = 'Ray Harris';
            $editor = 'Joel Murach';

            $author_match = preg_match($pattern, $author);
            // $author_match is 1
            echo '<p>' . $author_match . '</p>';

            $editor_match = preg_match($pattern, $editor);   
            // $author_match is 0
            echo '<p>' . $editor_match . '</p>';

             if ($author_match === false) {
                echo 'Error testing author name.';
            } else if ($author_match === 0) {
                echo 'Author name does not contain Harris.';
            } else {
                echo 'Author name contains Harris.';
            }
            
            seperator();
            
             $string = 
        "© 2010 Mike's Music. \ All rights reserved (5/2010).";

        $test_match = preg_match('/\xA9/', $string);          
        // Matches © and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('///', $string);
        // Returns FALSE and issues a warning
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/\//', $string);
        // Matches / and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/\\\\/', $string);
        // Matches \ and returns 1
        echo '<p>' . $test_match  . '</p>';

        seperator();
        
        echo "<p>Character Types & Classes </p>";
 $string = 'The product code is MBT-3461.';

        $test_match = preg_match('/MB./', $string);           
        // Matches MBT and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/MB\d/', $string);          
        // Matches nothing and returns 0
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/MBT-\d/', $string);        
        // Matches MBT-3 and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/MB[TF]/', $string);           
        // Matches MBT and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/[.]/', $string);              
        // Matches . and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/[13579]/', $string);          
        // Matches 3 and returns 1
        echo '<p>' . $test_match  . '</p>';
        seperator();
        
        echo "<p>Metacharacters & Bracket expressions</p>";
 $string = 'The product code is MBT-3461.';

        $test_match = preg_match('/MB[^TF]/', $string);          
        // Matches nothing and returns 0
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/MBT[^^]/', $string);          
        // Matches MBT- and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/MBT-[1-5]/', $string);        
        // Matches MBT-3 and returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/MBT[_*-]/', $string);         
        // Matches MBT- and returns 1
        echo '<p>' . $test_match  . '</p>';
        
        seperator();
        echo "<p>Matching string positions</p>";
 $author = 'Ray Harris';

        $test_match = preg_match('/^Ray/', $author);                  
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/Harris$/', $author);               
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/^Harris/', $author);               
        // Returns 0
        echo '<p>' . $test_match  . '</p>';

        $editor = 'Anne Boehm';

        $test_match = preg_match('/Ann/', $editor);                   
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/Ann\b/', $editor);                 
        // Returns 0
        echo '<p>' . $test_match  . '</p>';
        seperator();
        $name = 'Rob Robertson';

        $test_match = preg_match('/^(Rob)|(Bob)\b/', $name);          
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match('/^(\w\w\w) \1/', $name);            
        // Returns 1
        echo '<p>' . $test_match  . '</p>';
        seperator();
        
        echo "<p>Repeating subpatterns</p>";
 $phone = '559-555-6627';

        $test_match = preg_match('/^\d{3}-\d{3}-\d{4}$/', $phone);     
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $fax = '(559) 555-6635';

        $test_match = preg_match('/^\(\d{3}\) ?\d{3}-\d{4}$/', $fax);  
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $phone_pattern  = 
            '/^(\d{3}-)|(\(\d{3}\) ?)\d{3}-\d{4}$/';

        $test_match = preg_match($phone_pattern, $phone);              
        // Returns 1
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match($phone_pattern, $fax);                
        // Returns 1
        echo '<p>' . $test_match  . '</p>';
        
        seperator();
        echo "<p>Look-ahead assertions</p>";
 $pattern = '/^(?=.*[[:digit:]])[[:alnum:]]{6}$/';

        $test_match = preg_match($pattern, 'Harris');
        // Assertion fails and returns 0
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match($pattern, 'Harri5');              
        // Matches and returns 1
        echo '<p>' . $test_match  . '</p>';
        
        seperator();
        echo "<p>Negative look-ahead assertions</p>";
 $pattern = '/^(?!3[2-9])[0-3][[:digit:]]$/';

        $test_match = preg_match($pattern, '32');                  
        // Assertion fails and returns 0
        echo '<p>' . $test_match  . '</p>';

        $test_match = preg_match($pattern, '31');                  
        // Matches and returns 1
        echo '<p>' . $test_match  . '</p>';

        seperator();
            echo "<p>Email validation</p>";
 function valid_email ($email) {
            $parts = explode("@", $email);
            if (count($parts) != 2 ) return false;
            if (strlen($parts[0]) > 64) return false;
            if (strlen($parts[1]) > 255) return false;

            $atom = '[[:alnum:]_!#$%&\'*+\/=?^`{|}~-]+';
            $dotatom = '(\.' . $atom . ')*';
            $address = '(^' . $atom . $dotatom . '$)';
            $char = '([^\\\\"])';
            $esc  = '(\\\\[\\\\"])';
            $text = '(' . $char . '|' . $esc . ')+';
            $quoted = '(^"' . $text . '"$)';
            $local_part = '/' . $address . '|' . $quoted . '/';
            $local_match = preg_match($local_part, $parts[0]);
            if ($local_match === false 
                || $local_match != 1) return false;
            
            $hostname = 
                '([[:alnum:]]([-[:alnum:]]{0,62}[[:alnum:]])?)';
            $hostnames = '(' . $hostname . 
                         '(\.' . $hostname . ')*)';
            $top = '\.[[:alnum:]]{2,6}';
            $domain_part = '/^' . $hostnames . $top . '$/';
            $domain_match = preg_match($domain_part, $parts[1]);
            if ($domain_match === false 
                || $domain_match != 1) return false;

            return true;
        }
        if (valid_email ("mickey@mouse")) {
            echo "Valid!";
        } else { echo "Invalid!"; }

        ?>
    </body>
</html>
