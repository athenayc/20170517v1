
<?php
if (isset($_GET['xx'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $a =$x+$y;
    $b =$x-$y;
    $c =$x*$y;
    $d = floor($x/$y);

}
?>

<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>"/>

    <select name="name">

        <option >+<?php $r=$x+$y;?></option>
        <option >+<?php $r=$x+$y;?></option>
        <option >+<?php $r=$x+$y;?></option>
        <option >+<?php $r=$x+$y;?></option>

    </select>

    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php
    echo $r;
    ?>
</form>

