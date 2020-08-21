<?php
    require('db.php');

    $id=$_REQUEST['id'];
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "stratodatabaseresume");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

if($_SESSION["username"]==true)
{
echo "welcome"." ".$_SESSION["username"];
}
else
{
	 header('location:view-GIS.php');
}
?>
<?php
	if(ISSET($_REQUEST['file'])){
		$file = $_REQUEST['file'];
		
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=".basename($file));
		header("Content-Type: application/octet-stream;");
		//header("Content-Transfer-Encoding: binary");
		readfile("files/".$file);
	}
?>