<?php 
include("connec.php");

?>
<?php 
$b_id=$_POST['b_id'];
$e_id=$_POST['e_id'];
$e_name=$_POST['e_name'];
$c_name=$_POST['c_name'];
$p_brand=$_POST['p_brand'];
$p_type=$_POST['p_type'];
$p_amount=$_POST['p_amount'];
$p_detail=$_POST['p_detail'];
$p_price=$_POST['p_price'];
$b_total=$_POST['b_total'];

mysqli_query($conn,"insert into bill(b_id,e_id,e_name,c_name,p_brand,p_type,p_amount,p_detail,p_price,b_total)
values('$b_id','$e_id','$e_name','$c_name','$p_brand','$p_type','$p_amount','$p_detail','$p_price','$b_total')");
if(mysqli_affected_rows($conn)>0){
    echo "<script>
    alert('save sam let');
    window.location.assign('bill.php');
    </script>";

}

?>