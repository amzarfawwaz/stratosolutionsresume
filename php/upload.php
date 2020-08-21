
<?php
	
	if(ISSET($_POST['submit'])){
		/***if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
			
			$file = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file);
			$path = "upload1/".$file;
			
			move_uploaded_file($file_temp, $path);
			header("location:insert-GIS.php"); //success
			
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='sendprint.php'</script>";
		}
	}***/
        $title = $_POST["title"];
        $pname = rand (1000,10000)."-".$_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
        $uploads_dir = '/upload1'; 
        move_uploaded_file($name,$uploads_dir.'/'.$pname);
        $sql = "INSERT into fileup(title,image) VALUES('$title','$pname)";
        
        if(mysql_query($conn,$sql)){
            echo "file sucessfully uploaded";
        }
        else{
            echo "error";
        }
        }
?>
<form>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
        <button class="btn btn-primary" name="submit" id="done" type="submit" value="Submit">Submit</button>
</form>

