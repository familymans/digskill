<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ご挨拶</title>
    </head>
    <body>
        
        <?php
            $yourName = filter_input(INPUT_POST,'your_name');
            $now = filter_input(INPUT_POST,'now');
        ?>
        
        <form id="greetings_form" name="greetings_form" method="POST" action="">
            お名前を教えてください<br>
            <input id="your_name" name="your_name" type="text" value="<?php echo '名前' ?>"><br>
            今は「朝」？「昼」？「夜」？<br>
            <input id="now" name="now" type="text" value="<?php echo '時間' ?>"><br><br>
            <input id="submit" name="submit" type="submit" value="送信！"><br>
            
        </form>
        
        <?php
            if(filter_input(INPUT_SERVER,'REQUEST_METHOD') === 'POST'){
                include 'form_result.php';
            }
        ?>
        
        
    </body>
</html>
