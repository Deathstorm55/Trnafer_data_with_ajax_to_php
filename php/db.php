<?php
$conn = new mysqli('localhost', 'form', 'form123', 'form_5');
if(!$conn){
    echo "Connection Denied!" . mysqli_connect_error();

}

?>
