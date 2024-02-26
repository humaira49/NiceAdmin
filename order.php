<?php

$dbconnection= new mysqli("localhost","root","","shop");

       $name=$_GET['name'];
       $email=$_GET['email'];
       $phonenumber=$_GET['number'];
       $address=$_GET['address'];
       $orderdate=$_GET['date'];
       $ordertype=$_GET['message'];
       $orderquantity=$_GET['text'];

       $dbconnection-> query("insert into orders values ('$name','$email','$phonenumber','$address','$orderdate','$ordertype','$orderquantity')");
       echo "we got your order  ".$_GET['name'];


     





?>
