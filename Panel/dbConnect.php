
					<?php
						$servername = "fdb24.awardspace.net";
						$username = "2930909_mang";
						$password = "730625b8";
						$db="2930909_mang";

						// Create connection
						$conn = new mysqli($servername, $username, $password,$db);

						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						?>

					