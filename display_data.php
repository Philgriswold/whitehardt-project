<?php
$db = new SQLite3('database.db');

$query = $db->query("SELECT * FROM records");

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Whitehardt Test</title>";
echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">';

echo "</head>";
echo "<body>";

echo "<div class='float-left' style='max-width: 100px; margin-bottom: 20px;' margin-top: 100px;' >";
echo "<img src='whitehardt-logo.png' alt='Your Logo' id='logo' class='img-thumbnail' style='max-width: 100px;'>";
echo "</div>";

echo "<div class='container''>";
echo "<h1 class='mt-5 mb-5 text-center'>Records</h1>";

echo "<table class='table table-bordered table-striped'>";
echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Company</th><th>Created Time</th><th>Updated Time</th><th>Tracking Phone Number</th></tr></thead>";

while ($row = $query->fetchArray()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['company'] . "</td>";
    echo "<td>" . $row['created_time'] . "</td>";
    echo "<td>" . $row['updated_time'] . "</td>";
    echo "<td>" . $row['tracking_phone_number'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
