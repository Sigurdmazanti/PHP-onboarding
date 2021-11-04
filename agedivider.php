<?php
function ageCalculator($num01, $oper, $num02) {
    $sum;
    switch ($oper) {
        case "add":
            $sum = $num01 + $num02;
            break;

        case "sub":
            $sum = $num01 - $num02;
            break;

        default:
        $sum = "Hmm... something went wrong. Try again!";
        break;
    }
    return $sum;
}

$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

echo "Value: " . ageCalculator($num01, $oper, $num02);?>

<form action="agedivide.php" method="post">
        <input type="text" name="num01">
        <select name="oper">
            <label>kom</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
        </select>
        <input type="text" name="num02">
        <button type="submit">submit</button>
    </form>

    <?php
echo "Value: " . ageCalculator($num01, $oper, $num02);
?>