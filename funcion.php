<?php
    function calcularFactorial($num){
        $f=1;
            for($i=$num;$i>0;$i--){
                $f=$f*$i;
            }
            return $f;
    }
?>