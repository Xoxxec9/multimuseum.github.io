<?php
include 'config.php';
$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");
// Select the entire table
$query = "SELECT * FROM users LIMIT 10";
$result = mysqli_query($conn, $query);
echo "<table>";
echo "<tr><th>id</th><th>full_name</th><th>email</th><th>password</th><th>token</th><th>status</th></tr>";
// Iterate over the rows and create the table
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['full_name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo '<button class="load-more" data-offset="10">Load More</button>';
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Museum Quest</title>
	<script src="https://cdn.jsdelivr.net/npm/ol@v7.2.2/dist/ol.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.2.2/ol.css">
	<link rel="stylesheet" href="https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="museums.css">
    <style>
        table {
            margin-top:20px;
    border-collapse: collapse; /* Merge cells border */
    width: 100%; /* Make the table take the full width of the container */
    padding: 10px; /* Add padding to the entire table */
}

th, td {
    border: 1px solid #dddddd; /* Add border to the cells */
    padding: 8px; /* Add padding to the cells */
    text-align: left; /* Align the text to the left */
}

th {
    background-color: #dddddd; /* Add a background color to the header cells */
}

    </style>

</head>


</html>