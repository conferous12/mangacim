<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="yorumlar/edit.php"><?php 
		if($_GET!=null){
			$id=$_GET["id"];
		include "dbConnect.php";
			$sql = "SELECT * FROM yorumlar where id=".$id."";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			
			$id=$row["id"];$mangaid=$row["mangaid"];$yorum=$row["yorum"];	echo '
			<div class="form-group">
            <label for="exampleInputEmail1">id</label>
            <input class="form-control" name="id" type="text" value="'.$id.'" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">mangaid</label>
            <input class="form-control" name="mangaid" type="text" value="'.$mangaid.'" placeholder="mangaid Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">yorum</label>
            <input class="form-control" name="yorum" type="text" value="'.$yorum.'" placeholder="yorum Girin">
          </div> 	';}
				@$conn->close();
		}
	
		echo '	   <div class="text-center">
			   <a href="yorumlar/delete.php?id='.$id.'" class="btn btn-sm btn-danger pull-left">Sil</a>
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Kaydet"/>
        </div>'
		 ?>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$id=$_POST["id"];$mangaid=$_POST["mangaid"];$yorum=$_POST["yorum"];
		$sql = "UPDATE yorumlar SET id='".$id."',mangaid='".$mangaid."',yorum='".$yorum."' where id=".$id."";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=yorumlar";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	