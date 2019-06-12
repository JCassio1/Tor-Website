<?php
    $path = 'data.txt';
    if (isset($_POST['field1']) && isset($_POST['field2'])) {
        $fh = fopen($path,"a+");
        $split = "\n---------------------------";
        $string = $_POST['field1']. ' esteve aqui e deixou a seguinte mensagem: ' . ' ' .$_POST['field2']. $split.PHP_EOL;
        

        fwrite($fh,$string);
        fclose($fh);
        die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    }
    ?>
