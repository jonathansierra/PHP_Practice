<?php
    //The variable "$a" can exist or not and the result must be the same
    $a = null;

    //The keyword ?? evaluate if the variable is null
    $result = $a ?? 'default';
    
    var_dump($result);
?>