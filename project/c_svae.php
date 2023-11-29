<?php 
include("connec.php");

?>
<?php 
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$c_surname=$_POST['c_surname'];
$c_address=$_POST['c_address'];
$c_tel=$_POST['c_tel'];

mysqli_query($conn,"insert into customer(c_id,c_name,c_surname,c_address,c_tel)
values('$c_id','$c_name','$c_surname','$c_address','$c_tel')");
if(mysqli_affected_rows($conn)>0){
    echo "<script>
    alert('save sam let');
    window.location.assign('custom.php');
    </script>";

}

?>