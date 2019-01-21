
<div class="card card-login mx-auto mt-5">
      <div class="card-header">Oluştur</div>
      <div class="card-body">
        <form  action="bolumler/create.php" method="post">
			<div class="form-group">
            <input class="form-control" name="id" type="hidden" value="0" placeholder="id Girin">
          </div><div class="form-group">
            <label for="exampleInputEmail1">Manga</label>
			<select class="form-control" name="mangaid">
						<?php if(@$_POST==null) @include "select.php";?>
			</select>
           
          </div><div class="form-group">
            <label for="exampleInputEmail1">bolum</label>
            <input class="form-control" name="bolum" type="text"placeholder="bolum Girin">
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
	
		$id=$_POST["id"];$mangaid=$_POST["mangaid"];$bolum=$_POST["bolum"];
		$sql = "INSERT INTO bolumler (id,mangaid,bolum) VALUES ('".$id."','".$mangaid."','".$bolum."')";
		if ($conn->query($sql) === TRUE) {
			echo '<script>window.location.href="../?page=bolumler";</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		@$conn->close();
	}
	
	?>
	
	