<?php
 
$con = mysql_connect("localhost","root","")or die("Could not connect".mysql_error());
$db = mysql_select_db("login")or die("Database does not exits".mysql_error());
     

if(isset($_GET['Submit'])){ 
     
    // Retrieve data 
     
    $id = $_GET['id']; 

    $getid = "SELECT first_name, last_name FROM members WHERE user_id = '$id'"; 
    $result = mysql_query($getid) or die('<pre>' . mysql_error() . '</pre>' ); 

    $num = mysql_numrows($result); 

    $i = 0; 

    while ($i < $num) { 

        $first = mysql_result($result,$i,"first_name"); 
        $last = mysql_result($result,$i,"last_name"); 
         
        echo '<pre>'; 
        echo 'ID: ' . $id . '<br>First name: ' . $first . '<br>Surname: ' . $last; 
        echo '</pre>'; 

        $i++; 
    } 
    mysql_close();
} 
?>