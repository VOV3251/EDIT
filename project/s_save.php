<?php 
include("connec.php");

?>
<?php 
$s_id=$_POST['s_id'];
$p_id=$_POST['p_id'];
$p_brand=$_POST['p_brand'];
$p_type=$_POST['p_type'];
$p_price=$_POST['p_price'];
$p_amount=$_POST['p_amount'];
$p_detail=$_POST['p_detail'];
mysqli_query($conn,"insert into sale(s_id,p_id,p_brand,p_type,p_price,p_amount,p_detail)
values('$s_id','$p_id','$p_brand','$p_type','$p_price','$p_amount','$p_detail')");
if(mysqli_affected_rows($conn)>0){
    echo "<script>
    alert('save sam let');
    window.location.assign('sale.php');
    </script>";

}

?>