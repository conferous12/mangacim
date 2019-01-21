<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="karakterler/edit.php"><?php 
		if($_GET!=null){
			$id=$_GET["id"];
		include "dbConnect.php";
			$sql = "SELECT * FROM karakterler where id=".$id."";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			
			$id=$row["id"];$karakteradi=$row["karakteradi"];$detay=$row["detay"];$gorsel=$row["gorsel"];	echo '
			<div class="form-group">
            <label for="exampleInputEmail1">id</label>
            <input class="form-control" name="id" type="text" value="'.$id.'" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">karakteradi</label>
            <input class="form-control" name="karakteradi" type="text" value="'.$karakteradi.'" placeholder="Karakter Adı - Anime">
          </div><div class="form-group">
            <label for="exampleInputEmail1">detay</label>
            <input class="form-control" name="detay" type="text" value="'.$detay.'" placeholder="detay Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">gorsel</label>
			<img src="../'.$gorsel.'" style="width:100px;height:100px;"/>
            <input class="form-control" name="gorsel" type="hidden" value="'.$gorsel.'" placeholder="gorsel Girin">
          </div> 	';}
				@$conn->close();
		}
	
		echo '	   <div class="text-center">
			   <a href="karakterler/delete.php?id='.$id.'" class="btn btn-sm btn-danger pull-left">Sil</a>
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Kaydet"/>
        </div>'
		 ?>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$id=$_POST["id"];$karakteradi=$_POST["karakteradi"];$detay=$_POST["detay"];$gorsel=$_POST["gorsel"];
		$sql = "UPDATE karakterler SET id='".$id."',karakteradi='".$karakteradi."',detay='".$detay."',gorsel='".$gorsel."' where id=".$id."";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=karakterler";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	