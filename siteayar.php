<?php

if(@$_POST!=null){
	@$doldur=$_POST["doldur"];
	$servername = "fdb24.awardspace.net";
	$username = "2930909_mang";
	$password = "730625b8";
	$db="2930909_mang";
	$conn = mysqli_connect($servername, $username, $password,$db);
		
		
	switch ($doldur) {
		case "anasayfa":
        $sql = "SELECT * FROM mangalar";
		$result = mysqli_query($conn, $sql);
		$json_array=array();
		header("Content-Type: application/json; charset=UTF-8");
		 while($veri = mysqli_fetch_assoc($result)) {
				$json_array[]=$veri;
			}	
			echo json_encode($json_array);die;
	
		mysqli_close($conn);
		break;
		case "detay":
		@$id=$_POST["id"];
        $sql = "SELECT * FROM mangalar where id=".$id."";
		$result = mysqli_query($conn, $sql);
		$json_array=array();
		header("Content-Type: application/json; charset=UTF-8");
		 while($veri = mysqli_fetch_assoc($result)) {
				$json_array[]=$veri;
			}	
			echo json_encode($json_array);die;
	
		mysqli_close($conn);
		break;	
		case "bolumler":
		@$id=$_POST["id"];
        $sql = "SELECT * FROM bolumler where mangaid=".$id." order by bolum";
		$result = mysqli_query($conn, $sql);
		$json_array=array();
		header("Content-Type: application/json; charset=UTF-8");
		 while($veri = mysqli_fetch_assoc($result)) {
				$json_array[]=$veri;
			}	
			echo json_encode($json_array);die;
	
		mysqli_close($conn);
		break;	
		case "yorumlar":
				@$id=$_POST["id"];
				$sql = "SELECT * FROM yorumlar where mangaid=".$id."";
				$result = mysqli_query($conn, $sql);
				$json_array=array();
				header("Content-Type: application/json; charset=UTF-8");
				 while($veri = mysqli_fetch_assoc($result)) {
						$json_array[]=$veri;
					}	
					echo json_encode($json_array);die;
			
				mysqli_close($conn);
				break;	
				case "yorumekle":
				@$id=$_POST["id"];
				@$yorum=$_POST["yorum"];
				$sql = "INSERT INTO yorumlar (mangaid,yorum) VALUES (".$id.",'".$yorum."')";
				$result = mysqli_query($conn, $sql);
				$json_array=array();
				echo json_encode($json_array);die;
				mysqli_close($conn);
				break;	
				case "begeni":
				@$id=$_POST["id"];
				@$sayi=$_POST["sayi"];
				$sql = "UPDATE mangalar SET begenme=".$sayi." WHERE id=".$id."";
				mysqli_query($conn, $sql);
				
				$json_array=array();
				echo json_encode($json_array);die;
				mysqli_close($conn);
				break;	
				case "sayfalar":
				@$bolumid=$_POST["bolumid"];
				@$mangaid=$_POST["mangaid"];
				$sql = "SELECT * FROM sayfalar WHERE mangaid='".$mangaid."' AND bolumid='".$bolumid."' ORDER BY sira";
				$result = mysqli_query($conn, $sql);
				$json_array=array();
				header("Content-Type: application/json; charset=UTF-8");
				 while($veri = mysqli_fetch_assoc($result)) {
						$json_array[]=$veri;
					}	
					echo json_encode($json_array);die;
			
				mysqli_close($conn);
				break;	
				
				case "karakterler":
				$sql = "SELECT * FROM karakterler";
				$result = mysqli_query($conn, $sql);
				$json_array=array();
				header("Content-Type: application/json; charset=UTF-8");
				 while($veri = mysqli_fetch_assoc($result)) {
						$json_array[]=$veri;
					}	
					echo json_encode($json_array);die;
			
				mysqli_close($conn);
				break;
				case "karakterdetay":
				@$id=$_POST["id"];
				$sql = "SELECT * FROM karakterler where id=".$id."";
				$result = mysqli_query($conn, $sql);
				$json_array=array();
				header("Content-Type: application/json; charset=UTF-8");
				 while($veri = mysqli_fetch_assoc($result)) {
						$json_array[]=$veri;
					}	
					echo json_encode($json_array);die;
			
				mysqli_close($conn);
				break;	
				case "mesaj":
				@$adsoyad=$_POST["adsoyad"];
				@$telefon=$_POST["telefon"];
				@$mesaj=$_POST["Mesaj"];
				$sql = "INSERT INTO iletisim (adsoyad,telefon,mesaj) VALUES ('".$adsoyad."','".$telefon."','".$mesaj."')";
				mysqli_query($conn, $sql);
				echo '<script>alert("Mesajınız İletilmiştir Yönlendirliyorsunuz...");window.location.href="index.html";</script>';
				
				mysqli_close($conn);
				break;	
	}
}

?>