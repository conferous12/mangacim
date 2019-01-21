<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form method="post" action="sayfalar/edit.php"><?php 
		if($_GET!=null){
			$id=$_GET["id"];
		include "dbConnect.php";
			$sql = "SELECT * FROM sayfalar where id=".$id."";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			
			$id=$row["id"];$mangaid=$row["mangaid"];$bolumid=$row["bolumid"];$sayfagorsel=$row["sayfagorsel"];$sira=$row["sira"];	echo '
			<div class="form-group">
            <label for="exampleInputEmail1">id</label>
            <input class="form-control" name="id" type="text" value="'.$id.'" placeholder="id Girin" disabled>
			 <input class="form-control" name="id" type="hidden" value="'.$id.'" placeholder="id Girin" >
          </div><div class="form-group">
            <label for="exampleInputEmail1">mangaid</label>
            <input class="form-control" name="mangaid" type="text" value="'.$mangaid.'" placeholder="mangaid Girin" disabled>
			   <input class="form-control" name="mangaid" type="hidden" value="'.$mangaid.'" placeholder="mangaid Girin" >
          </div><div class="form-group">
            <label for="exampleInputEmail1">bolumid</label>
            <input class="form-control" name="bolumid" type="text" value="'.$bolumid.'" placeholder="bolumid Girin" disabled>
			<input class="form-control" name="bolumid" type="hidden" value="'.$bolumid.'" placeholder="bolumid Girin" >
          </div><div class="form-group">
            <label for="exampleInputEmail1">sayfagorsel</label>
			<img src="../'.$sayfagorsel.'" style="width:100px;height:100px;"/>
            <input class="form-control" name="sayfagorsel" type="hidden" value="'.$sayfagorsel.'" placeholder="sayfagorsel Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">sira</label>
            <input class="form-control" name="sira" type="text" value="'.$sira.'" placeholder="sira Girin">
          </div> 	';}
				@$conn->close();
		}
	
		echo '	   <div class="text-center">
			   <a href="sayfalar/delete.php?id='.$id.'" class="btn btn-sm btn-danger pull-left">Sil</a>
          <input type="submit" class="btn btn-sm btn-primary pull-right"  value="Kaydet"/>
        </div>'
		 ?>
        </form>
     
      </div>
    </div>
	
	<?php
	@include "../dbConnect.php";
	if($_POST!=null){
		$id=$_POST["id"];$mangaid=$_POST["mangaid"];$bolumid=$_POST["bolumid"];$sayfagorsel=$_POST["sayfagorsel"];$sira=$_POST["sira"];
		$sql = "UPDATE sayfalar SET id='".$id."',mangaid='".$mangaid."',bolumid='".$bolumid."',sayfagorsel='".$sayfagorsel."',sira='".$sira."' where id=".$id."";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=sayfalar";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	@$conn->close();
	?>
	
	