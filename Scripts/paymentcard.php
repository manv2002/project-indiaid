<?php
 $name = $_POST['name'];
 $amount = $_POST['amount'];
 $currency = $_POST['currency'];
 $cardno = $_POST['cardno'];
 $cvv = $_POST['cvv'];
 $expirydate = $_POST['expirydate'];

 #connection
 $conn = new mysqli('localhost','root','1234','indiaid');
 if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
 } 
 else{
     $stmt = $conn->prepare("insert into paymentcard(id,name,amount,currency,cardno,cvv,expirydate) values(0,?,?,?,?,?,?)");
     $stmt->bind_param("sisiis",$name,$amount,$currency,$cardno,$cvv,$expirydate);
     $stmt->execute();
     echo "Your Page will redirect you to Razorpay API window!
      Please stay on the page until connected for payment confirmation.";
     $stmt->close();
     $conn->close();
 }
?>

