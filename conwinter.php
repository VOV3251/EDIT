<?php 
$name = $_POST['name'];
$age = $_POST['age'];
$forms = $_POST['forms'];
$number = $_POST['number'];
 $conn = new mysqli('localhost','root','','auto_systems');
 if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
 }
else{
    $stmt = $conn->prepare("insert into wintercamp(name, age, forms,number)
        values(?,?,?,?)");
    $stmt->bind_param("sisi",$name, $age, $forms, $number);
    $stmt->execute();
        echo "sucessfully";
    $stmt->close(); 
    $conn->close();
}
?>