
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empoyee</title>
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
  <form action="w_save.php" method="POST">
  <h1 class="font"> ຂໍ້ມູນພະນັກງານ</h1>
  <div class="table">
  <table>
    <tr>
      <td>e_id</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_name</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_surname</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_address</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_position</td>
      <td><input type="text" name=""></td>
    </tr>
    <tr>
      <td>e_tel</td>
      <td><input type="text" name=""></td>
    </tr>
  </table>
    <input type="submit" name="" value="save">
    </form>
    <hr>
    <table border="1" class="colum">
    <tr>
    <th class="p1">e_id</th>
        <th class="p2">e_name</th>
        <th class="p3">e_surname</th>
        <th class="p4">e_address</th>
        <th class="p5">e_position</th>
        <th class="p6">e_tel</th>
        <th class="p7">edit</th>
      <th class="p8">Delete</th>
    </tr>
    <?php 
    include("connec.php");
    $result=mysqli_query($conn, "SELECT * FROM empoyee");
    while($row=mysqli_fetch_array($result)) {
      $e_id=$row['e_id'];
        echo 
        "<table border=\"2\" class=\"table1\">",
        "<tr>",
        "<td class=\"p1\">",$row['e_id'],"</td>",
        "<td class=\"p2\">",$row['e_name'],"</td>",
        "<td class=\"p3\">",$row['e_surname'],"</td>",
        "<td class=\"p4\">",$row['e_address'],"</td>",
        "<td class=\"p5\">",$row['e_position'],"</td>",
        "<td class=\"p6\">",$row['e_tel'],"</td>",
        "<td class=\"p7\"><a href=''>edit</a></td>",
        "<td class=\"p8\"><a href='w_de.php?e_id=$e_id''>Delete</a></td>",
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