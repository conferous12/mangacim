<?php
						@include "dbConnect.php";
						$sql = "SELECT * FROM mangalar";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) { 
										$sql2 = "SELECT * FROM bolumler where mangaid=".$row["id"]." order by id";
										$result2 = $conn->query($sql2);
										while($row2 = $result2->fetch_assoc()) { 
										echo '<option value="'.$row2["id"].'">'.$row["ad"]." - ".$row2["bolum"].'. Bölüm</option>';
											}
								}
						}				
					?>
					