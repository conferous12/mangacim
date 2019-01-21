<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="mangalar/edit.php"><?php 
		if($_GET!=null){
			$id=$_GET["id"];
		include "dbConnect.php";
			$sql = "SELECT * FROM mangalar where id=".$id."";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			
			$id=$row["id"];$ad=$row["ad"];$detay=$row["detay"];$kucukgorsel=$row["kucukgorsel"];$buyukgorsel=$row["buyukgorsel"];$begenme=$row["begenme"];	echo '
			<div class="form-group">
            <input class="form-control" name="id" type="hidden" value="'.$id.'" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">ad</label>
            <input class="form-control" name="ad" type="text" value="'.$ad.'" placeholder="ad Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">detay</label>
            <input class="form-control" name="detay" type="text" value="'.$detay.'" placeholder="detay Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">kucukgorsel</label>
			<img src="../'.$kucukgorsel.'"  style="width:100px;height:100px;"/>
            <input type="hidden" value="'.$kucukgorsel.'" name="kucukgorsel"/>
          </div><div class="form-group">
            <label for="exampleInputEmail1">buyukgorsel</label>
           <img src="../'.$buyukgorsel.'"  style="width:100px;height:100px;"/>
		    <input type="hidden" value="'.$buyukgorsel.'" name="buyukgorsel"/>
          </div><div class="form-group">
            <label for="exampleInputEmail1">begenme</label>
            <input class="form-control" name="begenme" type="text" value="'.$begenme.'" placeholder="begenme Girin">
          </div> 	';}
				@$conn->close();
		}
	
		echo '	   <div class="text-center">
			   <a href="mangalar/delete.php?id='.$id.'" class="btn btn-sm btn-danger pull-left">Sil</a>
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Kaydet"/>
        </div>'
		 ?>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$id=$_POST["id"];$ad=$_POST["ad"];$detay=$_POST["detay"];$kucukgorsel=$_POST["kucukgorsel"];$buyukgorsel=$_POST["buyukgorsel"];$begenme=$_POST["begenme"];
		$sql = "UPDATE mangalar SET id='".$id."',ad='".$ad."',detay='".$detay."',kucukgorsel='".$kucukgorsel."',buyukgorsel='".$buyukgorsel."',begenme='".$begenme."' where id=".$id."";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=mangalar";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	