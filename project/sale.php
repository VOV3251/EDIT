
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
    <link rel="stylesheet" type="text/css" href="com.css">
</head>
<body>
<table border="0" class="ta">
  <tr>
    <td>
<ul id ="list">
  <li><a href="computershop.php">ຫນ້າລັກ</a></li>
  <li><a href="computershop.php">ຂໍ້ມູນສິນຄ້າ</a></li>
 <li><a href="sale.php">ການຂ້າຍ</a></li>
 <li><a href="work.php">ຂໍ້ມູນພະນັກງານ</a></li>
 <li><a href="custom.php">ຂໍ້ມູນລູກຄາ</a></li>
 <li><a href="bill.php">ໃບບິນ</a></li>
</ul>
<center>
  <form action="s_save.php" method="POST">
  <h1 class="font"> ການຂ້າຍ</h1>
  <div class="table">
  <table>
    <tr>
      <td>s_id</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_id</td>
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
      <td>p_price</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_amount</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>p_total</td>
      <td><input type="text" name=""></td>
    </tr>
  </table>
    <input type="submit" name="" value="save">
    </form>
    <hr>
    <table border="1" class="colum">
    <tr>
    <th class="p1">s_id</th>
        <th class="p2">p_id</th>
        <th class="p3">p_brand</th>
        <th class="p4">p_type</th>
        <th class="p5">p_price</th>
        <th class="p6">p_amount</th>
        <th class="p7">p_detail</th>
        <th class="p8">edit</th>
      <th class="p9">Delete</th>
    </tr>
    <?php 
    include("connec.php");
    $result=mysqli_query($conn, "SELECT * FROM sale");
    while($row=mysqli_fetch_array($result)) {
      $s_id=$row['s_id'];
        echo 
        "<table border=\"2\" class=\"table1\">",
        "<tr>",
        "<td class=\"p1\">",$row['s_id'],"</td>",
        "<td class=\"p2\">",$row['p_id'],"</td>",
        "<td class=\"p3\">",$row['p_brand'],"</td>",
        "<td class=\"p4\">",$row['p_type'],"</td>",
        "<td class=\"p5\">",$row['p_price'],"</td>",
        "<td class=\"p6\">",$row['p_amount'],"</td>",
        "<td class=\"p7\">",$row['p_detail'],"</td>",
        "<td class=\"p8\"><a href=''>edit</a></td>",
        "<td class=\"p9\"><a href='s_de.php?s_id=$s_id''>Delete</a></td>",
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
