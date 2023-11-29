<?php 
include("connec.php");
$e_id=$_REQUEST['e_id'];
$query="DELETE FROM empoyee WHERE e_id=$e_id";
$result=mysqli_query($conn,$query) or die (mysql_error());
if($query){
    echo "<script>
    alert('lop sam let');
    window.location.assign('work.php');
    
    </script>";
}
else{
    echo "Error"; 
}


?>