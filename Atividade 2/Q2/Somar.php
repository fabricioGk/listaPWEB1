<?php

    function soma( $num1 , $num2, $num3, $num4) {
    
    return $num1 + $num2 + $num3 + $num4;
}
    echo ("Soma: ".soma ($_POST['num1'], $_POST ['num2'], $_POST['num3'], $_POST ['num4']));


?>