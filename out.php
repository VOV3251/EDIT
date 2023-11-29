<?php 
/*echo "helow"."<br>";

define ("USER","Maly")."<br>";
print "welcome".USER."<br>";

define("GREETING","WELCOME to W3school.com!");
echo GREETING."<br>";*/


/*$a=50;
$b=20;
$c=$a+$b;
$d=$c-$b/2;
$e=$a%$b;
$f=$e*$d;
    echo "A=$a"."ແລະ"."B=$b"."<br>";
    echo "A+B-B/2=$d"."<br>";
    echo "A-B/2=$d"."<br>";
    echo "A%B=$e"."<br>";
    echo "(A/B)*(A+B-B/2)=$f";*/


/*$l=50;
    echo "$l"."<br>";
$l+=10;
    echo "$l"."<br>";
$l-=10;
    echo "$l"."<br>";
$l%=11;
    echo "$l"."<br>";
$l*=2;
    echo "$l"."<br>";
$l/=3;
    echo "$l"."<br>";
$l="ຄະແນ່ນ";
    echo "4"."$l"."<br>";
//ເງືອນໄຂ if else , else if//
$i=100;
if($i=70)
{
    echo "who are you";
}
elseif($i<100)
{
    echo "that was bad";

}
else{
    echo "else";
}

$price = 500000;

if($price>=1 && $price<=100000)
{
    $discount = $price*0.02;
    $dis = "2%";
}

else if($price>=100000 && $price<=200000)
{
    $discount = $price*0.03;
    $dis = "3%";
}

elseif($price>=200000 && $price<=500000){
    $discount = $price*0.05;
    $dis = "5%";
}

else{
    $discount = $price*0.07;
    $dis = "7%";
}

echo "ລາຄ່າສິນຄ້າທັງມົດ:",number_format($price),"ກີບ"."<br>";
echo "ສວນຫຼຸດ:$dis=",number_format($discount),"ກີບ"."<br>";
echo "ລາຄ່າທີ່ຕ້ອງຈ້າຍ:",number_format($price-$discount),"ກີບ";
echo "<h4>ຂອບໃຈທີ່ໃສ່ບໍລິການ</h4>";
//loop for
for ($i=1; $i <= 10; $i++) 
{ echo "$i, "; }
    echo "<br>";
    for ($i=0;$i<= 50; $i+= 5) {
    echo "$i, ";
    }
    echo "<br>";
    for ($i=10; $i>=-10; $i-=2) {
    echo "$i, ";
    }
    echo "<br>";
//loop while
$x=1;
$sum=0;
$oper="+";
while ($x<=5){

    echo "$x$oper";
    if($x==4){
        $oper="";
    }
    $sum += $x;
    $x++;
}
echo "= $sum";
//loop do while
$x=1;

do{

    $x++;
    echo "The number".$x."<br>";

}while($x<=10)
//function sing and duble
function sign(){

    echo "what"."<br>";

    echo "ah!"."<br>";

    echo "who are you"."<br>";

}
sign();

//ສົງລະຫວ່າງ function

function heading($po,$size=3)
{
    print "<h5$size>$po</h5$size>";
}
heading("Book title"."<br>",4);
heading("Chapter title"."<br>",5);
heading("Section haeding"."<br>",6);*/


?>