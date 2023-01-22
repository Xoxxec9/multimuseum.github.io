<?php
  $offset = $_POST['offset'];
  $query = "SELECT * FROM table_name LIMIT $offset, 10";
  $result = mysqli_query($conn, $query);
  $rows = "";
  while($row = mysqli_fetch_array($result)) {
$rows .= "<tr>";
$rows .= "<td>" . $row['column1'] . "</td>";
$rows .= "<td>" . $row['column2'] . "</td>";
$rows .= "<td>" . $row['column3'] . "</td>";
$rows .= "</tr>";
}
echo $rows;
mysqli_close($conn);
?>