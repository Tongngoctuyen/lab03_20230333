<?php
$n = (int)($_GET["n"] ?? 10);

echo "<h3>A. Bảng cửu chương</h3>";
echo "<table border='1' cellpadding='5'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>$i × $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>B. Tổng chữ số của $n</h3>";
$temp = abs($n);
$sum = 0;
while ($temp > 0) {
    $sum += $temp % 10;
    $temp = intdiv($temp, 10);
}
echo "Tổng chữ số $n = $sum";

echo "<h3>C. Số lẻ từ 1..$n (dừng khi >15)</h3>";
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) continue;
    if ($i > 15) break;
    echo $i . " ";
}
?>
