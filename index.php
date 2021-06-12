<?php
    declare(strict_types = 1);
    include 'includes/translator.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.php" media="screen">
    <script>
    function trans(str) {
        if (str.length == 0) {
            document.getElementById("translatedText").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    document.getElementById("translatedText").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "includes/translator.inc.php?text=" + str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>
<body>
    <h1 id="title">Pig Latin Translator</h1>
    <div class="responsive">
        <div class="responsive-half">
            <form action="">
                <textarea name="textInput" onkeyup="trans(this.value)"></textarea>
            </form>
        </div>
        <div class="responsive-half">
            <textarea id="translatedText"></textarea>
        </div>
    </div>
</body>
</html>