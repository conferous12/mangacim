<?php	
	
	if($_GET!=null){
		$id=$_GET["id"];
		@include "../dbConnect.php";	
		
		$sql = "DELETE FROM karakterler WHERE id=".$id."";

		if ($conn->query($sql) === TRUE) {
				echo '<script>window.location.href="../?page=karakterler";</script>';
		} else {
			echo "Error deleting record: " . $conn->error;
		}
		
		@$conn->close();
	}else{
	echo '<script>window.location.href="../?page=karakterler";</script>';
	}
	
	
	
	?>
	
	