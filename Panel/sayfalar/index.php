 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> sayfalar <a href="?page=sayfalar&func=create" class="btn btn-primary btn-sm pull-right">Ekle</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr><th>Islemler</th>
				<th>id</th><th>mangaid</th><th>bolumid</th><th>sayfagorsel</th><th>sira</th>
                </tr>
              </thead>
              <tbody>
              
			<?php
				   include "dbConnect.php";
				   $sql = "SELECT * FROM sayfalar";
					$result = $conn->query($sql);
				   if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { 
					echo "<tr><td><a href=\"?page=sayfalar&func=edit&id=".$row["id"]."\">Düzenle</a></td></td><td>".$row['id']."</td><td>".$row['mangaid']."</td><td>".$row['bolumid']."</td><td><img src='../".$row['sayfagorsel']."' style='width:100px;height:100px;'/></td><td>".$row['sira']."</td></tr>";

					}
				} else {
					echo "0 Sonuç";
				}
				
				?>
			
              </tbody>
            </table>
          </div>
        </div>