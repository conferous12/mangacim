<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="bolumler/edit.php"><?php 
		if($_GET!=null){
			$id=$_GET["id"];
		include "dbConnect.php";
			$sql = "SELECT * FROM bolumler where id=".$id."";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			
			$id=$row["id"];$mangaid=$row["mangaid"];$bolum=$row["bolum"];	echo '
			<div class="form-group">
            <label for="exampleInputEmail1">id</label>
            <input class="form-control" name="id" type="text" value="'.$id.'" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">Manga</label><select class="form-control" name="mangaid">';
				
				 if(@$_POST==null) {@include "select.php";}
					
			
		   
		   echo '</select>
          </div><div class="form-group">
            <label for="exampleInputEmail1">bolum</label>
            <input class="form-control" name="bolum" type="text" value="'.$bolum.'" placeholder="bolum Girin">
          </div> 	';
		  }
				@$conn->close();
		}
	
		echo '	   <div class="text-center">
			   <a href="bolumler/delete.php?id='.$id.'" class="btn btn-sm btn-danger pull-left">Sil</a>
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Kaydet"/>
        </div>'
		 ?>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$id=$_POST["id"];$mangaid=$_POST["mangaid"];$bolum=$_POST["bolum"];
		$sql = "UPDATE bolumler SET id='".$id."',mangaid='".$mangaid."',bolum='".$bolum."' where id=".$id."";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=bolumler";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	