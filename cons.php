<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
 $conn = new mysqli('localhost','root','','clothes');
 if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
 }
else{
    $stmt = $conn->prepare("insert into unser(name, email, number)
        values(?,?,?)");
    $stmt->bind_param("ssi",$name, $email, $number);
    $stmt->execute();
        echo "sucessfully";
    $stmt->close();
    $conn->close();
}
?>