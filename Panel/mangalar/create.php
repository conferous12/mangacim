<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="mangalar/create.php" enctype="multipart/form-data">
			<div class="form-group"> 
            <input class="form-control" value="0" name="id" type="hidden" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">ad</label>
            <input class="form-control" name="ad" type="text"placeholder="ad Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">detay</label>
            <input class="form-control" name="detay" type="text"placeholder="detay Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">kucukgorsel</label>
            <input class="form-control" name="kucukgorsel" type="file" placeholder="kucukgorsel Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">buyukgorsel</label>
            <input class="form-control" name="buyukgorsel" type="file" placeholder="buyukgorsel Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">begenme</label>
            <input class="form-control" name="begenme" type="text"placeholder="begenme Girin">
          </div>
			   <div class="text-center">
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Oluştur"/>
        </div>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$dizin = '../../upload/';
	

	
	
		$id=$_POST["id"];$ad=$_POST["ad"];$detay=$_POST["detay"];$kucukgorsel=$_POST["kucukgorsel"];$buyukgorsel=$_POST["buyukgorsel"];$begenme=$_POST["begenme"];
		
		$n1='upload/' .$id.'-'.$ad.'-'. basename($_FILES['kucukgorsel']['name']);
		$n2='upload/' .$id.'-'.$ad.'-'. basename($_FILES['buyukgorsel']['name']);
		
		$yuklenecek_dosya = $dizin.$id.'-'.$ad.'-'. basename($_FILES['kucukgorsel']['name']);
		$yuklenecek_dosya2 =$dizin.$id.'-'.$ad.'-'. basename($_FILES['buyukgorsel']['name']);
		move_uploaded_file($_FILES['kucukgorsel']['tmp_name'], $yuklenecek_dosya);
		move_uploaded_file($_FILES['buyukgorsel']['tmp_name'], $yuklenecek_dosya2);
		
		
		$sql = "INSERT INTO mangalar (id,ad,detay,kucukgorsel,buyukgorsel,begenme) VALUES ('".$id."','".$ad."','".$detay."','".$n1."','".$n2."','".$begenme."')";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=mangalar";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	