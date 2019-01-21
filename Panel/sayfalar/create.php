<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="sayfalar/create.php">
			<div class="form-group">

            <input class="form-control" name="id"  type="hidden" value="0" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">Manga</label>
            
			<select class="form-control" name="mangaid">
			<?php if(@$_POST==null) @include "mangalist.php";?>
			</select>
			
          </div><div class="form-group">
            <label for="exampleInputEmail1">Bölüm</label>
            <select class="form-control" name="bolumid">
			<?php if(@$_POST==null) @include "bolumlist.php";?>
			</select>
          </div><div class="form-group">
            <label for="exampleInputEmail1">Sayfa Görsel</label>
            <input class="form-control" name="sayfagorsel" type="file" placeholder="sayfagorsel Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">Sira</label>
            <input class="form-control" name="sira" type="text" 
			placeholder="sira Girin">
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
		$id=$_POST["id"];$mangaid=$_POST["mangaid"];$bolumid=$_POST["bolumid"];$sayfagorsel=$_POST["sayfagorsel"];$sira=$_POST["sira"];
		$n1='upload/' .$mangaid.'-'.$bolumid.'-'. basename($_FILES['sayfagorsel']['name']);
		$yuklenecek_dosya = $dizin.$mangaid.'-'.$bolumid.'-'. basename($_FILES['sayfagorsel']['name']);
		move_uploaded_file($_FILES['sayfagorsel']['tmp_name'], $yuklenecek_dosya);
		
		$sql = "INSERT INTO sayfalar (id,mangaid,bolumid,sayfagorsel,sira) VALUES ('".$id."','".$mangaid."','".$bolumid."','".$n1."','".$sira."')";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=sayfalar";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	