<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
</head>
<body>
<?php
$var="I love you";
?>
 <h1>Hello <?php echo $var ?><br/> </h1>
<?php
echo "chieu dai cua chuoi la";
 echo str_word_count("Hello php"); 
 echo strrev("Hello php");
?>

<h1>Chào Mừng Bạn Đến PHP</h1>

<?php
$a = 5;
$b = 10;
echo ("Giai Phuong trinh bac nhat".$a ."x+$b=0");
if ($a == 0) {

	if ($b ==0) {
		echo("Phuong trinh co vo so nghiem!");
}
	
else {
	echo ("Phuong trinh vo nghiem !");
  }
}
else {
	$x	=	-$b/$a;
	echo ("Phuong trinh co mot nghiem x=$x");
}
?><br><br><br><br><br>

<?php
$gender=1;
if($gender==0) 
	echo "male";

	if($gender==1)
	echo "Female";

	else
		echo "Underfined";
	

?><br><br><br><br>

<?php
$Idol[0]="Son Tung";
$Idol[1]="Hoai Linh";
$Idol[2]="Miximoi";
$Idol[3]="Shizuko";
$Idol[4]="Nobien";
for ($i=0; $i<count($Idol) ; $i++) { 
	echo"$i; $Idol[$i]<br>";
}
?>
<?php
$idol = array("XXX", "YYY", "ZZZ","AAA","BBB");
        $arrlength = count($idol);
        
        for($x = 0; $x < $arrlength; $x++) {
          echo $idol[$x];
          echo "<br>";
        }
?>
</body>
</html>