 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> bolumler <a href="?page=bolumler&func=create" class="btn btn-primary btn-sm pull-right">Ekle</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr><th>Islemler</th>
				<th>id</th><th>mangaid</th><th>bolum</th>
                </tr>
              </thead>
              <tbody>
              
			<?php
				   include "dbConnect.php";
				   $sql = "SELECT * FROM bolumler";
					$result = $conn->query($sql);
				   if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { 
					echo "<tr><td><a href=\"?page=bolumler&func=edit&id=".$row["id"]."\">Düzenle</a></td></td><td>".$row['id']."</td><td>".$row['mangaid']."</td><td>".$row['bolum']."</td></tr>";

					}
				} else {
					echo "0 Sonuç";
				}
				
				?>
			
              </tbody>
            </table>
          </div>
        </div>