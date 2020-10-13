<?php
    function test($caLLback){
        $caLLback();
    }

    test(function(){
        echo "Terminou!!";
    });
?>