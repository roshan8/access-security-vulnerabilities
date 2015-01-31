<?php
 
$con = mysql_connect("localhost","root","")or die("Could not connect".mysql_error());
$db = mysql_select_db("login")or die("Database does not exits".mysql_error());
     

if( isset( $_POST[ 'submit' ] ) ) { 

    $target = $_REQUEST[ 'ip' ]; 

    // Determine OS and execute the ping command. 
    if (stristr(php_uname('s'), 'Windows NT')) {  
     
        $cmd = shell_exec( 'ping  ' . $target ); 
        echo '<pre>'.$cmd.'</pre>'; 
         
    } else {  
     
        $cmd = shell_exec( 'ping  -c 3 ' . $target ); 
        echo '<pre>'.$cmd.'</pre>'; 
         
    } 
     
} 
mysql_close();
?>