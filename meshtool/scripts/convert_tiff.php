<?php 

$target_dir = "./uploads/";
$completed_dir = "./completed/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename = $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


$newfile = preg_replace ('/(.*)?\.(.*)/','geo_$1.tif',$filename);

//echo $newfile;

$cmd = "gdal_translate -of gtiff -a_ullr ".$_POST['ULx']." ".$_POST['ULy']." ".$_POST['LRx']." ".$_POST['LRy']." -a_srs \"wgs84\" ".$target_file." ".$completed_dir.$newfile;


exec( $cmd );

echo "<a href='".$completed_dir.$newfile."'>".$completed_dir.$newfile."</a>";
