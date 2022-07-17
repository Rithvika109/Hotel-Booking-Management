<? php
if (isset($_POST['myprofile'])) {

        $query = "SELECT * FROM users_registration";
		$result = mysqli_query($db, $query);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>Name</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td>"</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
}
?>