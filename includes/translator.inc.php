<?php
    declare(strict_types = 1);
    include 'autoloader.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(!empty($_GET["text"])){
            $text = new Text($_GET["text"]);
            echo $text->getTranslatedText();
        }
    }
?>