<?php

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$ist_adi= $_POST['ist_adi'];

echo $ad."<br>".$soyad."<br>".$ist_adi;
echo "<br>";



$data=array(
   "User ad" =>$ad,
   "User soyad" =>$soyad,
   "User ist_adi" =>$ist_adi

	);
echo json_encode($data);
// File::append('store.json',$data);


 ?>
