<?php
$data = [
    ["Name" => "Anuj", "Age" => 21],
    ["Name" => "Riya", "Age" => 20]
];
echo "<table border='1'>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
