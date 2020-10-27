<?php
    $dt = new DateTime();

    $periodo = new DateInterval("P15D");

    echo $dt->format("d/m/Y H:i:s");
?>
<html>
    <br><br>
</html>

<?php
    $dt->add($periodo);

    echo $dt->format("d/m/Y H:i:s");
?>