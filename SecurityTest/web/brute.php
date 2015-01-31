<?php
 
$con = mysql_connect("localhost","root","")or die("Could not connect".mysql_error());
$db = mysql_select_db("login")or die("Database does not exits".mysql_error());


if( isset( $_GET['Login'] ) ) { 

    $user = $_GET['username'];
  //  $user = stripslashes( $user );  //Input filtering method 
  //  $user = mysql_real_escape_string( $user ); //input filtering method
     
    $pass = $_GET['password']; 
    //$pass = md5($pass); 

    $qry = "SELECT * FROM `members` WHERE user='$user' AND password='$pass';";
 
    $result = mysql_query( $qry ) or die( '<pre>' . mysql_error() . '</pre>' ); 

    if( $result && mysql_num_rows( $result ) == 1 ) { 
         
         
         

        // Login Successful 
        echo "<p>Welcome to the password protected area " . $user . "</p>"; 
         
    } else { 
        //Login failed 
        echo "<pre><br>Username and/or password incorrect.</pre>"; 
    } 

    mysql_close(); 
} 

?>