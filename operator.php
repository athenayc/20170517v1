<?php
if (isset($_GET['xx'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $plus = $x + $y;
//    $min = $x - $y;
//    $mul = $x * $y;
//    $div = $x / $y;
//    $_div= floor($div);
    $r=$plus;
}
?>

<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>"/>
    <select name="oper">
        <option value="plus" <?php if($oper == "plus") { echo 'selected'; } ?>>+</option>
        <option  value="min" <?php if($oper == "min") { echo  'selected'; } ?>>-</option>
        <option  value="mul" <?php if($oper == "mul") { echo 'selected'; } ?>>*</option>
        <option  value="div" <?php if($oper == "div") { echo 'selected' ; } ?>>/</option>
    </select>

    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>

    <?php
        if ($_POST['oper'] === "plus") {
            $r=$x+$y; }
        elseif ($_POST['oper'] === "min" ) {
            $r=$x-$y; }
        elseif ($_POST['oper'] === "mul" ) {
            $r=$x*$y ; }
        else {floor($r= $x/$y);};

    echo $r;
    ?>
</form>


