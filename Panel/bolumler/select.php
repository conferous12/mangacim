<?php
						include "dbConnect.php";
						$sql = "SELECT * FROM mangalar";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) { 
						echo '<option value="'.$row['id'].'">'.$row["ad"].'</option>';
						}
						}				
					?>
					