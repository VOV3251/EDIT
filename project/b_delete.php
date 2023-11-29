<?php 
include("connec.php");
$b_id=$_REQUEST['b_id'];
$query="DELETE FROM bill WHERE b_id=$b_id";
$result=mysqli_query($conn,$query) or die (mysql_error());
if($query){
    echo "<script>
    alert('lop sam let');
    window.location.assign('bill.php');
    
    </script>";
}
else{
    echo "Error"; 
}


?>