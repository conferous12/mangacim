<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="iletisim/edit.php"><?php 
		if($_GET!=null){
			$id=$_GET["id"];
		include "dbConnect.php";
			$sql = "SELECT * FROM iletisim where id=".$id."";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			
			$id=$row["id"];$adsoyad=$row["adsoyad"];$telefon=$row["telefon"];$mesaj=$row["mesaj"];	echo '
			<div class="form-group">
            <label for="exampleInputEmail1">id</label>
            <input class="form-control" name="id" type="text" value="'.$id.'" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">adsoyad</label>
            <input class="form-control" name="adsoyad" type="text" value="'.$adsoyad.'" placeholder="adsoyad Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">telefon</label>
            <input class="form-control" name="telefon" type="text" value="'.$telefon.'" placeholder="telefon Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">mesaj</label>
            <input class="form-control" name="mesaj" type="text" value="'.$mesaj.'" placeholder="mesaj Girin">
          </div> 	';}
				@$conn->close();
		}
	
		echo '	   <div class="text-center">
			   <a href="iletisim/delete.php?id='.$id.'" class="btn btn-sm btn-danger pull-left">Sil</a>
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Kaydet"/>
        </div>'
		 ?>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$id=$_POST["id"];$adsoyad=$_POST["adsoyad"];$telefon=$_POST["telefon"];$mesaj=$_POST["mesaj"];
		$sql = "UPDATE iletisim SET id='".$id."',adsoyad='".$adsoyad."',telefon='".$telefon."',mesaj='".$mesaj."' where id=".$id."";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=iletisim";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	