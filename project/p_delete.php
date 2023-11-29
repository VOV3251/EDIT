<?php 
include("connec.php");
$p_id=$_REQUEST['p_id'];
$query="DELETE FROM product WHERE p_id=$p_id";
$result=mysqli_query($conn,$query) or die (mysql_error());
if($query){
    echo "<script>
    alert('lop sam let');
    window.location.assign('computershop.php');
    
    </script>";
}
else{
    echo "Error"; 
}


?>