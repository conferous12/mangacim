 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> mangalar <a href="?page=mangalar&func=create" class="btn btn-primary btn-sm pull-right">Ekle</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr><th>Islemler</th>
				<th>id</th><th>ad</th><th>detay</th><th>kucukgorsel</th><th>buyukgorsel</th><th>begenme</th>
                </tr>
              </thead>
              <tbody>
              
			<?php
				   include "dbConnect.php";
				   $sql = "SELECT * FROM mangalar";
					$result = $conn->query($sql);
				   if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { 
					echo "<tr><td><a href=\"?page=mangalar&func=edit&id=".$row["id"]."\">Düzenle</a></td></td><td>".$row['id']."</td><td>".$row['ad']."</td><td>".$row['detay']."</td><td><img src='../".$row['kucukgorsel']."' style='width:100px;height:100px;'/></td><td><img src='../".$row['buyukgorsel']."' style='width:100px;height:100px;'/></td><td>".$row['begenme']."</td></tr>";

					}
				} else {
					echo "0 Sonuç";
				}
				
				?>
			
              </tbody>
            </table>
          </div>
        </div>