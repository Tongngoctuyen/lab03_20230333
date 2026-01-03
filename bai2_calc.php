<?php
$a = (float)($_GET["a"] ?? 0);
$b = (float)($_GET["b"] ?? 0);
$op = $_GET["op"] ?? "add";

$result = null;

switch ($op) {
    case "add":
        $result = $a + $b;
        echo "$a + $b = $result";
        break;

    case "sub":
        $result = $a - $b;
        echo "$a - $b = $result";
        break;

    case "mul":
        $result = $a * $b;
        echo "$a × $b = $result";
        break;

    case "div":
        if ($b == 0) {
            echo "Không chia được cho 0";
        } else {
            $result = $a / $b;
            echo "$a ÷ $b = $result";
        }
        break;

    default:
        echo "Phép toán không hợp lệ";
}
?>
