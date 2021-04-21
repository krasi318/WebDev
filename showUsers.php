<!DOCTYPE hmtl>
<html>
	<head>
		<title>
			Login
		</title>
		<link rel="stylesheet" href="css/table.css">
	</head>
	<body>
		<h1>Show register users</h1>

		<?php
			try {
				require('dbConnect.php');
				$query = "SELECT firstName,email,pass FROM users";
				$stm = $db->prepare($query);
				$stm->execute();
				$data = $stm->fetchAll();
				
				echo "<pre>";
				echo var_dump($data);
				echo "<pre>";

				$tableUsers = '<table id="customers">';
				$tableUsers .='<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Pass</th>
								</tr>';
			    //// $currentRow['firstName']  == $currentRow[0]
			    for($i = 0; $i < count($data); $i++){
					$currentRow = $data[$i];
					$tableUsers .= '<tr>
										<td>' .$currentRow['firstName'] . '</td>
										<td>' .$currentRow['email'] .'</td>
										<td>' .$currentRow['pass'] .'</td>
									</tr>';
				}
				$tableUsers .= '</table>';
				echo $tableUsers;
				
			} catch(PDOException $e) {
				echo $e->getMessage();	
			}
		?>
	</body>
</html>