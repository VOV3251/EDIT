<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        
    $price = "125000";
    echo "my motorbike is" . $price."<br>";
    $size = "15.26";
    echo "my house maybe" .$size."<br>";
    echo 'hello'."<br>";
    $hh = "25";
    echo "".$hh."<br>";
    
    define("cars",[
        "lao",
        "fgs",
        "work"
    ]);
    echo cars[0]."<br>";
    echo cars[1]."<br>";
    echo cars[2]."<br>";
    $x=5;
    $y=10;
    echo ($x<=>$y);
    $i=1;
    while($i<=10){
        echo "loops is $i <br>";
        $i++;
    }
    ?>
     
     <p class =text-center></p>
     <picture class=text-end>
        <source srcset="Artboard 1.png" type="image/svg+xml">
        <img src="Artboard 1.png" width="100%" class="img-fluid" alt="Artboard 1.png">
    </picture>
    <div class="table-responsive">
        <table border="2" class="table table-primary">
            <thead>
                <tr>
                    <a href="uu.php">uu<th scope="col">Column 1</th></a>
                    <th scope="col">Column 2</th>
                    <th scope="col">Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
        </table>
    </div>
    
 <div class="container">
    <h3 class="mt-4">ສະມັກສະມາຊິກ</h3>
    <hr>
    <from actiont="signup-db.php"
method="post">
<div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
</div>
<div class="mb-3">
    <label for="lastname" class="form-label">lastname</label>
    <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
</div>
<div class="mb-3">
    <label for="Email" class="form-label">Emai</label>
    <input type="text" class="form-control" name="Emai" aria-describedby="Emial">
</div>
<div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="text" class="form-control" name="password" aria-describedby="password">
</div>
<button type="submit" name="signup" class="btn-primary">Sign Up</button>
 </from>
 <hr>
 <p>ເປັນສາມາະຊິກແລ້ວແມ່ນບໍ່ ຄິກທີ່ນີ້ເພືອ<a href="signin.php">ເຂົ້າສູ້ລະບົບ</a></p>
 </div>

</body>
</html>