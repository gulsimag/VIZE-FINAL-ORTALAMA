<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php
$viz1 = $_POST['vize1'];
$fin1 = $_POST['final1'];
$not1 = $_POST['notagg1'];
$viz2 = $_POST['vize2'];
$fin2 = $_POST['final2'];
$not2 = $_POST['notagg2'];
$viz3 = $_POST['vize3'];
$fin3 = $_POST['final3'];
$not3 = $_POST['notagg3'];
$viz4 = $_POST['vize4'];
$fin4 = $_POST['final4'];
$not4 = $_POST['notagg4'];
$viz5 = $_POST['vize5'];
$fin5 = $_POST['final5'];
$not5 = $_POST['notagg5'];
$viz6 = $_POST['vize6'];
$fin6 = $_POST['final6'];
$not6 = $_POST['notagg6'];
$viz7 = $_POST['vize7'];
$fin7 = $_POST['final7'];
$not7 = $_POST['notagg7'];
$viz8 = $_POST['vize8'];
$fin8 = $_POST['final8'];
$not8 = $_POST['notagg8'];
$viz9 = $_POST['vize9'];
$fin9 = $_POST['final9'];
$not9 = $_POST['notagg9'];
$viz0 = $_POST['vize0'];
$fin0 = $_POST['final0'];
$not0 = $_POST['notagg0'];

if($viz1==null || $fin1==null || $not1==null){
    $viz1=0;
    $fin1=0;
    $not1=0;
}
if($viz2==null || $fin2==null || $not2==null){
    $viz2=0;
    $fin2=0;
    $not2=0;
}
if($viz3==null || $fin3==null || $not3==null){
    $viz3=0;
    $fin3=0;
    $not3=0;
}
if($viz4==null || $fin4==null || $not4==null){
    $viz4=0;
    $fin4=0;
    $not4=0;
}
if($viz5==null || $fin5==null || $not5==null){
    $viz5=0;
    $fin5=0;
    $not5=0;
}
if($viz6==null || $fin6==null || $not6==null){
    $viz6=0;
    $fin6=0;
    $not6=0;
}
if($viz7==null || $fin7==null || $not7==null){
    $viz7=0;
    $fin7=0;
    $not7=0;
}
if($viz8==null || $fin8==null || $not8==null){
    $viz8=0;
    $fin8=0;
    $not8=0;
}
if($viz9==null || $fin9==null || $not9==null){
    $viz9=0;
    $fin9=0;
    $not9=0;
}
if($viz0==null || $fin0==null || $not0==null){
    $viz0=0;
    $fin0=0;
    $not0=0;
}
$ort1=($viz1*0.4)+($fin1*0.6);
$ort2=($viz2*0.4)+($fin2*0.6);
$ort3=($viz3*0.4)+($fin3*0.6);
$ort4=($viz4*0.4)+($fin4*0.6);
$ort5=($viz5*0.4)+($fin5*0.6);
$ort6=($viz6*0.4)+($fin6*0.6);
$ort7=($viz7*0.4)+($fin7*0.6);
$ort8=($viz8*0.4)+($fin8*0.6);
$ort9=($viz9*0.4)+($fin9*0.6);
$ort0=($viz0*0.4)+($fin0*0.6);

$genelort=($ort1*$not1)+($ort2*$not2)+($ort3*$not3)+($ort4*$not4)+($ort5*$not5)+($ort6*$not6)+($ort7*$not7)+($ort8*$not8)+($ort9*$not9)+($ort0*$not0);
$agirlik=$not1+$not2+$not3+$not4+$not5+$not6+$not7+$not8+$not9+$not0;
$genelortsonuc=$genelort/$agirlik;
echo "GENEL YIL ORTALAMANIZ=".$genelortsonuc;

?>
</br></br>
</br>
</br>
</br>
</br>



<h1>Yeniden denemek için <a href="ortalama.php"> tıklayınız. </h1></a>


</body>
</html>

