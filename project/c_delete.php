<?php 
include("connec.php");
$c_id=$_REQUEST['c_id'];
$query="DELETE FROM customer WHERE c_id=$c_id";
$result=mysqli_query($conn,$query) or die (mysql_error());
if($query){
    echo "<script>
    alert('lop sam let');
    window.location.assign('custom.php');
    
    </script>";
}
else{
    echo "Error"; 
}


?>