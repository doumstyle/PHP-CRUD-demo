<?php
include '../db.php';

$sql = "SELECT * FROM demo_table";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
  if (isset($_GET['id']) && $row['id'] == $_GET['id']) {
    echo '<form class="row row-cols-lg-auto g-3 align-items-center" action="update.php" method="POST">';
    echo '<td><input type="text" name="name" class="form-control" value="' . $row['name'] . '"></td>';
    echo '<td><input type="number" name="score" value="' . $row['score'] . '" class="form-control"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo '</form>';
  } else {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["score"] . "</td>";
    echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Modify</a></td>';
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
}

$conn->close();
?>