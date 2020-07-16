<?php
    require_once 'Human.php';
    $human = new Human('花子');
    $human->greet($yourName,$now);
    
    $human = new Human('華子');
    $human->greet($yourName,$now);
?>
