<?php
    declare(strict_types = 1);
    include 'autoloader.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(!empty($_GET["text"])){
            $word = new Word($_GET["text"]);
            echo $word->getPigLatin();
        }
    }
?>