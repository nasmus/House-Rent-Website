
<?php
print_r($GLOBALS);
$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$sz=$_FILES['fileToUpload']['size'];
$t=$_FILES['fileToUpload']['type'];
$tt=explode("/",$t);
echo $tt[1]."<br>";
echo $s;
echo "<br>".$n;
if(file_exists("f/".$n)){
	echo "file already exists";
}
else{
	move_uploaded_file($s,"f/".$n);
}
$path="f/".$n;
echo "<br>".$path;
//header("location:home.php");
?>
