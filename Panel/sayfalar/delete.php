<?php	
	
	if($_GET!=null){
		$id=$_GET["id"];
		@include "../dbConnect.php";	
		
		$sql = "DELETE FROM sayfalar WHERE id=".$id."";

		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=sayfalar";</script>';
		} else {
			echo "Error deleting record: " . $conn->error;
		}
		
		@$conn->close();
	}else{
		echo '<script>window.location.href="../?page=sayfalar";</script>';
	}
	
	
	
	?>
	
	