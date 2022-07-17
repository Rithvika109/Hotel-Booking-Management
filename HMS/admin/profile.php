<!DOCTYPE html>
<html>
<head>
	<title> Profiles</title>
	<link rel="stylesheet">
</head>
<body class="four" style="background:MediumSeaGreen">
	<div class="containerfour" style = "background: rgba(0, 0, 50, 0.3)">
		<center>
		<?php
		$db = mysqli_connect('localhost', 'root', '', 'hotel management');
        $query = "SELECT * FROM users";
		$result = mysqli_query($db, $query);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Details of registered users</th></tr>";
            while($row = $result->fetch_assoc()) {
				echo "<tr><td>Username: </td>"."<td>".$row["username"]."</td></tr>";
                echo "<tr><td>Email: </td>"."<td>".$row["email"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
		?>
	</center>
	</div>
</body>
</html>