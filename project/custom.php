
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
  <form action="c_svae.php" method="POST">
  <h1 class="font"> ຂໍ້ມູນລູກຄາ</h1>
  <div class="table">
  <table>
    <tr>
      <td>c_id</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>c_name</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>c_surname</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>c_address</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>c_tel</td>
      <td><input type="text" name=""></td>
    </tr>
  </table>
    <input type="submit" name="" value="save">
  </form>
    <hr>
    <table border="1" class="colum">

    <tr>
    <th class="p1">c_id</th>
        <th class="p2">c_name</th>
        <th class="p3">c_surname</th>
        <th class="p4">c_address</th>
        <th class="p5">c_tel</th>
        <th class="p6">edit</th>
      <th class="p7">Delete</th>
    </tr>
    <?php 
    include("connec.php");
    $result=mysqli_query($conn, "SELECT * FROM customer");
    while($row=mysqli_fetch_array($result)) {
      $c_id=$row['c_id'];
        echo 
        "<table border=\"2\" class=\"table1\">",
        "<tr>",
        "<td class=\"p1\">",$row['c_id'],"</td>",
        "<td class=\"p2\">",$row['c_name'],"</td>",
        "<td class=\"p3\">",$row['c_surname'],"</td>",
        "<td class=\"p4\">",$row['c_address'],"</td>",
        "<td class=\"p5\">",$row['c_tel'],"</td>",
        "<td class=\"p11\"><a href=''>edit</a></td>",
        "<td class=\"p12\"><a href='c_delete.php?c_id=$c_id''>Delete</a></td>",
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