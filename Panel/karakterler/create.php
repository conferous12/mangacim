<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="karakterler/create.php">
			<div class="form-group">
 
            <input class="form-control" name="id" value="0" type="hidden" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">karakteradi</label>
            <input class="form-control" name="karakteradi" type="text"placeholder="Karakter Adı ve Anime">
          </div><div class="form-group">
            <label for="exampleInputEmail1">detay</label>
            <input class="form-control" name="detay" type="text"placeholder="detay Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">gorsel</label>
            <input class="form-control" name="gorsel" type="file"placeholder="gorsel Girin">
          </div>
			   <div class="text-center">
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Oluştur"/>
        </div>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	$dizin = '../../upload/';
	if($_POST!=null){
		$id=$_POST["id"];$karakteradi=$_POST["karakteradi"];$detay=$_POST["detay"];$gorsel=$_POST["gorsel"];
		$n1='upload/' .$id.'-'.basename($_FILES['gorsel']['name']);
		$yuklenecek_dosya = $dizin.$id.'-'.basename($_FILES['gorsel']['name']);
		move_uploaded_file($_FILES['gorsel']['tmp_name'], $yuklenecek_dosya);
		$sql = "INSERT INTO karakterler (id,karakteradi,detay,gorsel) VALUES ('".$id."','".$karakteradi."','".$detay."','".$n1."')";
		if ($conn->query($sql) === TRUE) {
		echo '<script>window.location.href="../?page=karakterler";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	