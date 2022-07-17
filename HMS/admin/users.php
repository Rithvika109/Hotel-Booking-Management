
  
if (isset($_POST['myprofile'])) {
        $username = mysqli_real_escape_string($db, $_POST['name']);
        $query = "SELECT * FROM user_registration where username='$name' LIMIT 1";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = $result->fetch_assoc();
            echo "<table><tr><th>users</th></tr>";
            echo "<tr><td>User Name: </td>"."<td>".$row["name"]."</td></tr>";
            echo "</table>";
            }
         else {
            echo "0 results";
        }
}