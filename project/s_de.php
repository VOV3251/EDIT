<?php 
include("connec.php");
$s_id=$_REQUEST['s_id'];
$query="DELETE FROM sale WHERE s_id=$s_id";
$result=mysqli_query($conn,$query) or die (mysql_error());
if($query){
    echo "<script>
    alert('lop sam let');
    window.location.assign('sale.php');
    
    </script>";
}
else{
    echo "Error"; 
}


?>