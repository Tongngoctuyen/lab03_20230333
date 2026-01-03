<?php
require_once "functions.php";

/* ===== Hàm xử lý action (tách logic) ===== */
function handleAction($action, $a, $b, $n) {
    switch ($action) {
        case 'max':
            return (is_numeric($a) && is_numeric($b))
                ? "Max($a, $b) = " . max2($a, $b)
                : "a và b phải là số";

        case 'min':
            return (is_numeric($a) && is_numeric($b))
                ? "Min($a, $b) = " . min2($a, $b)
                : "a và b phải là số";

        case 'prime':
            return is_numeric($n)
                ? ($n . (isPrime((int)$n) ? " là số nguyên tố" : " không là số nguyên tố"))
                : "n phải là số";

        case 'fact':
            if (!is_numeric($n)) return "n phải là số";
            $f = factorial((int)$n);
            return ($f === null) ? "n phải ≥ 0" : "$n! = $f";

        case 'gcd':
            return (is_numeric($a) && is_numeric($b))
                ? "GCD($a, $b) = " . gcd((int)$a, (int)$b)
                : "a và b phải là số";

        default:
            return "";
    }
}

/* ===== Nhận dữ liệu ===== */
$action = $_GET['action'] ?? '';
$a = $_GET['a'] ?? '';
$b = $_GET['b'] ?? '';
$n = $_GET['n'] ?? '';

$result = handleAction($action, $a, $b, $n);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LAB03 - Advanced</title>
</head>
<body>

<h2>LAB03 – Mini Utility (Advanced)</h2>

<form method="get">
    <label>Action:</label>
    <select name="action">
        <option value="max">Max</option>
        <option value="min">Min</option>
        <option value="prime">Prime</option>
        <option value="fact">Factorial</option>
        <option value="gcd">GCD</option>
    </select>
    <br><br>

    a: <input type="text" name="a">
    b: <input type="text" name="b">
    n: <input type="text" name="n">
    <br><br>

    <button type="submit">Thực hiện</button>
</form>

<hr>

<?php
if ($result !== '') {
    echo "<b>Kết quả: $result</b>";
}
?>

</body>
</html>