<?php
    echo "<select>";

    for ($i=date("Y"); $i > date("Y") - 100 ; $i--) { 
            
        echo '<option valeu = "'.$i.'">'.$i.'</option>';
    }

    echo "</select>";
?>