<?php 
include("connec.php");

?>
<?php 
$e_id=$_POST['e_id'];
$e_name=$_POST['e_name'];
$e_surname=$_POST['e_surname'];
$e_address=$_POST['e_address'];
$e_position=$_POST['e_position'];
$e_tel=$_POST['e_tel'];

mysqli_query($conn,"insert into empoyee(e_id,e_name,e_surname,e_address,e_position,e_tel)
values('$e_id','$e_name','$e_surname','$e_address','$e_position','$e_tel')");
if(mysqli_affected_rows($conn)>0){
    echo "<script>
    alert('save sam let');
    window.location.assign('work.php');
    </script>";

}

?>