
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="stylesheet" type="text/css" href="com.css">
</head>
<body>
<table border="0" class="ta">
  <tr>
    <td>
<ul id ="list">
  <li><a href="computershop.php">ຫນ້າລັກ</a></li>
  <li><a href="#product.php">ຂໍ້ມູນສິນຄ້າ</a></li>
 <li><a href="sale.php">ການຂ້າຍ</a></li>
 <li><a href="work.php">ຂໍ້ມູນພະນັກງານ</a></li>
 <li><a href="custom.php">ຂໍ້ມູນລູກຄາ</a></li>
 <li><a href="bill.php">ໃບບິນ</a></li>
</ul>
<center>
  <form action="B_save.php" method="POST">
  <h1 class="font"> ໃບບິນ</h1>
  <div class="table">
  <table>
  <tr>
      <td>b_id</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_id</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_name</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>c_name</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_brand</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_type</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_amount</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_detail</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_price</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>b_total</td>
      <td><input type="text" name=""></td>
    </tr>
  </table>
    <input type="submit" name="" value="save">
    </form>
    <hr>
    <table border="1" class="colum">
    <tr>
    <th class="p1">b_id</th>
        <th class="p2">e_id</th>
        <th class="p3">e_name</th>
        <th class="p4">c_name</th>
        <th class="p5">p_brand</th>
        <th class="p6">p_type</th>
        <th class="p7">p_amount</th>
        <th class="p8">p_detail</th>
        <th class="p9">p_price</th>
      <th class="p10">b_total</th>
      <th class="p11">edit</th>
      <th class="p12">Delete</th>
    </tr>
    <?php 
    include("connec.php");
    $result=mysqli_query($conn, "SELECT * FROM bill");
    while($row=mysqli_fetch_array($result)) {
      $b_id=$row['b_id'];
        echo 
        "<table border=\"2\" class=\"table1\">",
        "<tr>",
        "<td class=\"p1\">",$row['b_id'],"</td>",
        "<td class=\"p2\">",$row['e_id'],"</td>",
        "<td class=\"p3\">",$row['e_name'],"</td>",
        "<td class=\"p4\">",$row['c_name'],"</td>",
        "<td class=\"p5\">",$row['p_brand'],"</td>",
        "<td class=\"p6\">",$row['p_type'],"</td>",
        "<td class=\"p7\">",$row['p_amount'],"</td>",
        "<td class=\"p8\">",$row['p_detail'],"</td>",
        "<td class=\"p9\">",$row['p_detail'],"</td>",
        "<td class=\"p10\">",$row['b_total'],"</td>",
        "<td class=\"p11\"><a href=''>edit</a></td>",
        "<td class=\"p12\"><a href='b_delete.php?b_id=$b_id''>Delete</a></td>",
        "</tr>",
        "</table>";
    }
    
    ?>

</table>
</div>
</center>
</td>
</tr>
</table> 
</body>
</html>
