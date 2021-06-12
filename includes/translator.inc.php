<?php
    declare(strict_types = 1);

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(!empty($_GET["text"])){
            echo $_GET["text"];
        }
    }
?>