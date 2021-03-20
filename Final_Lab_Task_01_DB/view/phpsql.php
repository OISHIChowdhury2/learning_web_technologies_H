<?php
$conn=mysql_pconnect('localhost','root','','weblab1')

$sql='select * from db';

$re= mysql_query($conn , $sql);

?>