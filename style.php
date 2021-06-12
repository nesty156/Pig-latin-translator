<?php
header("Content-type: text/css");

$font_family = 'Arial, Helvetica, sans-serif';
?>

textarea {
    width: 90%;
    border: 2px solid black;
    margin: 5%;
    height: 100%;
}

#title {
    font-family: <?=$font_family?>;
    color: #E9473F;
    text-align: center;
}

.responsive {
    width: 100%;
    height: 300px;
}

.responsive-half {
    width: 50%;
    height: 300px;
    float: left
}