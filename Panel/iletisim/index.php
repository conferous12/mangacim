 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> iletisim </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr><th>Islemler</th>
				<th>id</th><th>adsoyad</th><th>telefon</th><th>mesaj</th>
                </tr>
              </thead>
              <tbody>
              
			<?php
				   include "dbConnect.php";
				   $sql = "SELECT * FROM iletisim";
					$result = $conn->query($sql);
				   if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { 
					echo "<tr><td><a href=\"?page=iletisim&func=edit&id=".$row["id"]."\">Düzenle</a></td></td><td>".$row['id']."</td><td>".$row['adsoyad']."</td><td>".$row['telefon']."</td><td>".$row['mesaj']."</td></tr>";

					}
				} else {
					echo "0 Sonuç";
				}
				
				?>
			
              </tbody>
            </table>
          </div>
        </div>